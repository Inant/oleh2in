<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\User;
        $admin->username = 'administrator';
        $admin->name = 'Administrator';
        $admin->email = 'administrator@mail.test';
        $admin->password = \Hash::make('administrator');
        $admin->roles = 'Admin';
        $admin->address = 'Jl Mastrip 7, Sumbersari, Jember';
        $admin->phone = '082359382266';
        $admin->avatar = 'No Avatar';
        $admin->status = 'Active';

        $admin->save();

        $this->command->info('Administrator berhasil ditambah');
    }
}
