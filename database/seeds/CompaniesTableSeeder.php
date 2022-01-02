<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Logitech',
            'slug' => 'logitech',
            'meta_title'=> 'Logitech',
            'meta_description'=> 'Logitech'
        ]);
        Company::create([
            'name' => 'Trust',
            'slug' => 'trust',
            'meta_title'=> 'Trust',
            'meta_description'=> 'Trust'
        ]);
    }
}
