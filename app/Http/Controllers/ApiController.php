<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Models\Projects;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function log(Request $request)
    {
        /** @var Projects $project */
        $project = Projects::where('key', '=', $request->headers->get(config('logcrawler_server.header_key')))
            ->active()
            ->first();
        if ($project !== null) {
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
        }
    }
}
