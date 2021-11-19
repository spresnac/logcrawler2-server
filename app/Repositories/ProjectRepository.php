<?php

namespace App\Repositories;

use App\Models\Logs;
use App\Models\Projects;
use Ramsey\Uuid\Uuid;

class ProjectRepository
{
    /**
     * @param string $project_name
     * @return Projects
     */
    public function createProject(string $project_name): Projects
    {
        return Projects::create([
            'user_id' => auth()->id(),
            'name' => $project_name,
            'key' => Uuid::uuid6(),
        ]);
    }

    public static function formatLogLine(Logs $log): string
    {
        return sprintf(
            '[%1$s] %2$s.%3$s: %4$s %5$s',
            $log->logged_at,
            $log->channel,
            $log->level_name,
            $log->message,
        );
    }

    public static function getColorStringForLogLevel(int $log_level): string
    {
        return match ($log_level) {
            100 => 'text-green-500', // debug
            200 => 'text-gray-600', // info
            300 => 'text-yellow-400', // warning
            400 => 'text-red-500', // error
            default => 'text-gray-600',
        };
    }
}
