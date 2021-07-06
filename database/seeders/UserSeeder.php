<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('qwertyui')
        ]);

        // $user = User::where('name', 'Admin')->get();
        $role = Role::where('name', 'Admin')->get();

        // $user->roles()->attach($role->pluck('id'));

        User::where('name', 'Admin')->each(function ($user) use ($role) {
            $user->roles()->attach(
                $role->pluck('id')
            );
        });
    }
}
