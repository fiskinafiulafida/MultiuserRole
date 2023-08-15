<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\RoleUser;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        RoleUser::create([
            'role_name' => 'operator',
        ]);

        RoleUser::create([
            'role_name' => 'pengelolahbantuanhukum',
        ]);
        RoleUser::create([
            'role_name' => 'analisishukum',
        ]);
        RoleUser::create([
            'role_name' => 'obh',
        ]);
        RoleUser::create([
            'role_name' => 'kabag',
        ]);
        RoleUser::create([
            'role_name' => 'kuasahukumpemkot',
        ]);
        RoleUser::create([
            'role_name' => 'staffdokumentasi',
        ]);
        RoleUser::create([
            'role_name' => 'kabaghukum',
        ]);
        RoleUser::create([
            'role_name' => 'kepalapublikasi',
        ]);
        RoleUser::create([
            'role_name' => 'staffhukum',
        ]);

        User::factory(5)->create();
    }
}
