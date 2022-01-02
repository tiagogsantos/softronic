<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Thales Serra',
            'email' => 'thales@imaxinformatica.com.br',
            'password'=> Hash::make('.Welcome09')
        ]);
        User::create([
            'name' => 'Lucas Borelli',
            'email' => 'lucas@imaxinformatica.com.br',
            'password'=> Hash::make('.Welcome09')
        ]);
        User::create([
            'name' => 'Softronic',
            'email' => 'softronic@softronic.com.br',
            'password'=> bcrypt('cF@^0YdZBC2!')
        ]);
    }
}
