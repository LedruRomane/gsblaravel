<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'test@gmail.com',
            'type' => User::_TYPE_PARTICULIER
        ]);
        User::factory()->create([
            'email' => 'test2@gmail.com',
            'type' => User::_TYPE_PRATICIEN
        ]);
        User::factory([
            'type' => User::_TYPE_PARTICULIER
        ])->count(5)->create();
        User::factory([
            'type' => User::_TYPE_PRATICIEN
        ])->count(5)->create();
    }
}
