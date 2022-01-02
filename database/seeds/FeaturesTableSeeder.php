<?php

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'name' =>'Plataforma'
        ]);
        Feature::create([
            'name' =>'Navegador'
        ]);
        Feature::create([
            'name' => 'Windows',
            'feature_id' => 1
        ]);
        Feature::create([
            'name' => 'Apple',
            'feature_id' => 1
        ]);
        Feature::create([
            'name' => 'Linux',
            'feature_id' => 1
        ]);

        Feature::create([
            'name' => 'Chrome',
            'feature_id' => 2
        ]);
        Feature::create([
            'name' => 'Mozila Firefox',
            'feature_id' => 2
        ]);
        Feature::create([
            'name' => 'Microsoft Edge',
            'feature_id' => 2
        ]);
        
    }
}
