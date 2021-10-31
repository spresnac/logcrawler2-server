<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Sascha Presnac',
            'email' => 'sascha@presnac.de',
            'password' => password_hash('123456789', PASSWORD_DEFAULT),
            'is_admin' => true,
            'is_active' => true,
        ]);
    }
}
