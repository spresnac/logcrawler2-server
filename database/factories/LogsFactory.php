<?php

namespace Database\Factories;

use App\Models\Logs;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LogsFactory extends Factory
{
    protected $model = Logs::class;

    public function definition(): array
    {
        return [
            'project_id' => $this->faker->randomNumber(),
            'ident' => $this->faker->word,
            'level' => $this->faker->randomNumber(),
            'level_name' => $this->faker->name,
            'channel' => $this->faker->word,
            'logged_at' => Carbon::now(),
            'message' => $this->faker->word,
            'formatted' => $this->faker->word,
            'size' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
