<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\RoleUser;
use Illuminate\Support\Str;
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
        // user 1
        User::create([
            'name' => 'operator',
            'email' => 'operator@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '1',
            'password' => bcrypt('operatorpass'),
            'remember_token' => Str::random(10),
        ]);
        // user 2
        User::create([
            'name' => 'pengelolahbantuanhukum',
            'email' => 'pengelolahbantuanhukum@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '2',
            'password' => bcrypt('pengelolahbantuanhukumpass'),
            'remember_token' => Str::random(10),
        ]);
        // user 3
        User::create([
            'name' => 'analisishukum',
            'email' => 'analisishukum@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '3',
            'password' => bcrypt('analisishukumpass'),
            'remember_token' => Str::random(10),
        ]);
        // user 4
        User::create([
            'name' => 'obh',
            'email' => 'obh@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '4',
            'password' => bcrypt('obhpass'),
            'remember_token' => Str::random(10),
        ]);
        // user 5
        User::create([
            'name' => 'kabag',
            'email' => 'kabag@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '5',
            'password' => bcrypt('kabagpass'),
            'remember_token' => Str::random(10),
        ]);
        // user 6
        User::create([
            'name' => 'kuasahukumpemkot',
            'email' => 'kuasahukumpemkot@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '6',
            'password' => bcrypt('kuasahukumpemkotpass'),
            'remember_token' => Str::random(10),
        ]);
        // user 7
        User::create([
            'name' => 'staffdokumentasi',
            'email' => 'staffdokumentasi@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '7',
            'password' => bcrypt('staffdokumentasipass'),
            'remember_token' => Str::random(10),
        ]);
        // user 8
        User::create([
            'name' => 'kabaghukum',
            'email' => 'kabaghukum@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '8',
            'password' => bcrypt('kabaghukumpass'),
            'remember_token' => Str::random(10),
        ]);
        // user 9
        User::create([
            'name' => 'kepalapublikasi',
            'email' => 'kepalapublikasi@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '9',
            'password' => bcrypt('kepalapublikasipass'),
            'remember_token' => Str::random(10),
        ]);
        // user 10
        User::create([
            'name' => 'staffhukum',
            'email' => 'staffhukum@gmail.com',
            'email_verified_at' => now(),
            'role_id' => '10',
            'password' => bcrypt('staffhukumpass'),
            'remember_token' => Str::random(10),
        ]);

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
    }
}
