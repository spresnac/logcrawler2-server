<?php

namespace App\Repositories;

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
}
