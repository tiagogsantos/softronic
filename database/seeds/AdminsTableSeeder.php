<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Thales Serra',
            'email' => 'thales@imaxinformatica.com.br',
            'password'=> bcrypt('.Welcome09')
        ]);
        Admin::create([
            'name' => 'Lucas Borelli',
            'email' => 'lucas@imaxinformatica.com.br',
            'password'=> bcrypt('.Welcome09')
        ]);
        Admin::create([
            'name' => 'Softronic',
            'email' => 'softronic@softronic.com.br',
            'password'=> bcrypt('cF@^0YdZBC2!')
        ]);
    }
}
