<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(LaratrustSeeder::class);
        $user = User::factory()->create([
            'name' => 'Test User2',
            'email' => 'test@example2.com',
        ]);
        return $user->attachRole(1);
    }
}
