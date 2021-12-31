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
            '[%1$s] %2$s.%3$s: %4$s',
            $log->logged_at,
            $log->channel,
            $log->level_name,
            $log->message,
        );
    }

    // TODO: let user customize the colors, next version
    public static function getColorStringForLogLevel(int $log_level): string
    {
        return match ($log_level) {
            100 => 'text-gray-400', // debug
            300 => 'text-orange-500', // warning
            400, 500, 550 => 'text-red-500', // error, critical
            default => 'text-gray-600', // info goes here, default
        };
    }
}
