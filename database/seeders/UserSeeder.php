<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Tenant;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Aristides Neto',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ];

        User::create($admin);

        User::factory()->count(2)->create();
    }
}
