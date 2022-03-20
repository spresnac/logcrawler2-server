<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetInfoRequest;
use App\Models\Logs;
use App\Models\Projects;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function Sodium\version_string;

class ApiController extends Controller
{
    public function log(Request $request)
    {
        /** @var Projects $project */
        $project = Projects::where('key', '=', $request->headers->get(config('logcrawler_server.header_key')))
            ->active()
            ->first();
        if ($project === null) {
            return new Response(null, 200);
        }
        foreach ($request->all() as $row) {
            $params = $row['params'];
            $record = $row['record'];
            /** @var Carbon $carbon */
            $carbon = (is_string($record['datetime'])===true)
                ? Carbon::createFromFormat('Y-m-d\TH:i:s.uP', $record['datetime'])
                : Carbon::createFromFormat('Y-m-d H:i:s.u', $record['datetime']['date']);
            Logs::create([
                'project_id' => $project->id,
                'ident' => $params['ident'],
                'level' => $record['level'],
                'level_name' => $record['level_name'],
                'channel' => $record['channel'],
                'logged_at' => $carbon->toDateTimeString(),
                'message' => $record['message'],
                'formatted' => $record['formatted'],
                'size' => mb_strlen(serialize($row)),
            ]);
        }
        return new Response(null, 201);
    }

    public function get_info(GetInfoRequest $request)
    {
        /** @var Projects $project */
        $project = Projects::where('key', '=', $request->headers->get(config('logcrawler_server.header_key')))
            ->active()
            ->first();
        if ($project === null) {
            return new Response(null, 200);
        }
        $update_data = [];
        if ($request->has('php') && $this->check_version_string_is_valid($request->get('php'))) {
            if ($project->version_php !== $request->get('php')) {
                $update_data['version_php'] = $request->get('php');
            }
        }
        if ($request->has('laravel') && $this->check_version_string_is_valid($request->get('laravel'))) {
            if ($project->version_laravel !== $request->get('laravel')) {
                $update_data['version_laravel'] = $request->get('laravel');
            }
        }
        if (count($update_data) > 0) {
            $project->update($update_data);
        }
        return new Response(null, 201);
    }

    protected function check_version_string_is_valid(string $input): bool
    {
        return version_compare('0.0.1', $input, '>=');
    }
}
