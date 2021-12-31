<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ActivateUser extends Command
{
    protected $signature = 'user:activate {user_id : The user id to activate}';
    protected $description = 'Use this to activate a user. Useful for the first user ;)';

    public function handle()
    {
        $user = User::find($this->argument('user_id'));
        if ($user === null) {
            $this->alert('User not found, break');
            exit;
        }
        $user->update([
            'is_active' => 1,
        ]);
        $this->info('done...');
    }
}
