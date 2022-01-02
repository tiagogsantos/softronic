<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Principal
        Category::create([
            "name" => "Mouses e Teclados",
            "status" => 1,
            "description" => "Mouses e Teclados",
            "slug" => "mouses-e-teclados",
            "meta_title" => "Mouses e Teclados",
            "meta_description" => "Mouses e Teclados",
            "softronic_id" => 1,
        ]);
        Category::create([
            "name" => "Caixas de Som",
            "status" => 1,
            "description" => "Caixas de Som",
            "slug" => "caixas-de-som",
            "meta_title" => "Caixas de Som",
            "meta_description" => "Caixas de Som",
            "softronic_id" => 1,
        ]);
        Category::create([
            "name" => "Headsets",
            "status" => 1,
            "description" => "Headsets",
            "slug" => "headsets",
            "meta_title" => "Headsets",
            "meta_description" => "Headsets",
            "softronic_id" => 1,
        ]);
        Category::create([
            "name" => "Dispositivos Móveis",
            "status" => 1,
            "description" => "Dispositivos Móveis",
            "slug" => "dispositivos-moveis",
            "meta_title" => "Dispositivos Móveis",
            "meta_description" => "Dispositivos Móveis",
            "softronic_id" => 1,
        ]);
        Category::create([
            "name" => "Conforto",
            "status" => 1,
            "description" => "Conforto",
            "slug" => "conforto",
            "meta_title" => "Conforto",
            "meta_description" => "Conforto",
            "softronic_id" => 1,
        ]);

        // Mouses e Teclados
        Category::create([
            "name" => "Teclados",
            "status" => 1,
            "description" => "Teclados",
            "slug" => "teclados",
            "meta_title" => "teclados",
            "meta_description" => "Teclados",
            "softronic_id" => 1,
            "category_id" => 1,
        ]);
        Category::create([
            "name" => "Teclados para iPad",
            "status" => 1,
            "description" => "Teclados para iPad",
            "slug" => "teclados-para-ipad",
            "meta_title" => "Teclados para iPad",
            "meta_description" => "Teclados para iPad",
            "softronic_id" => 1,
            "category_id" => 1,
        ]);
        Category::create([
            "name" => "Teclados de tablet",
            "status" => 1,
            "description" => "Teclados de tablet",
            "slug" => "teclados-de-tablet",
            "meta_title" => "Teclados de tablet",
            "meta_description" => "Teclados de tablet",
            "softronic_id" => 1,
            "category_id" => 1,
        ]);
        Category::create([
            "name" => "Mouses",
            "status" => 1,
            "description" => "Mouses",
            "slug" => "mouses",
            "meta_title" => "Mouses",
            "meta_description" => "Mouses",
            "softronic_id" => 1,
            "category_id" => 1,
        ]);

        //Caixas de Som
        Category::create([
            "name" => "Caixas Bluetooth",
            "status" => 1,
            "description" => "Caixas Bluetooth",
            "slug" => "bluetooth",
            "meta_title" => "Caixas Bluetooth",
            "meta_description" => "Caixas Bluetooth",
            "softronic_id" => 1,
            "category_id" => 2,
        ]);
        Category::create([
            "name" => "Caixas Computadores",
            "status" => 1,
            "description" => "Caixas Computadores",
            "slug" => "caixas-computadores",
            "meta_title" => "Caixas Computadores",
            "meta_description" => "Caixas Computadores",
            "softronic_id" => 1,
            "category_id" => 2,
        ]);
        Category::create([
            "name" => "Som Surround",
            "status" => 1,
            "description" => "Som Surround",
            "slug" => "som-surround",
            "meta_title" => "Som Surround",
            "meta_description" => "Som Surround",
            "softronic_id" => 1,
            "category_id" => 2,
        ]);

        // Headsets
        Category::create([
            "name" => "Headset com fio",
            "status" => 1,
            "description" => "Headset com fio",
            "slug" => "headset-com-fio",
            "meta_title" => "Headset com fio",
            "meta_description" => "Headset com fio",
            "softronic_id" => 1,
            "category_id" => 3,
        ]);
        Category::create([
            "name" => "Headset sem fio",
            "status" => 1,
            "description" => "Headset sem fio",
            "slug" => "headset-sem-fio",
            "meta_title" => "Headset sem fio",
            "meta_description" => "Headset sem fio",
            "softronic_id" => 1,
            "category_id" => 3,
        ]);

        // Dispositivos Móveis
        Category::create([
            "name" => "Acessórios",
            "status" => 1,
            "description" => "Acessórios",
            "slug" => "acessorios",
            "meta_title" => "Acessórios",
            "meta_description" => "Acessórios",
            "softronic_id" => 1,
            "category_id" => 4,
        ]);
        Category::create([
            "name" => "Suporte",
            "status" => 1,
            "description" => "Suporte",
            "slug" => "suporte",
            "meta_title" => "Suporte",
            "meta_description" => "Suporte",
            "softronic_id" => 1,
            "category_id" => 4,
        ]);
        
        // Conforto

        Category::create([
            "name" => "Lâmpadas",
            "status" => 1,
            "description" => "Lâmpadas",
            "slug" => "lampadas",
            "meta_title" => "Lâmpadas",
            "meta_description" => "Lâmpadas",
            "softronic_id" => 1,
            "category_id" => 5,
        ]);

    }
}
