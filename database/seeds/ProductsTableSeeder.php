<?php

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductFeature;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Logitech
        Product::create([
            "name" => "Mouse",
            "status" => 1,
            "featured" => 0,
            "new" => 1,
            "reference" => "MS",
            "description" => "Mouse",
            "softronic_id" => 1,
            "company_id" => 1,
            "slug" => "mouse",
            "meta_title" => "Mouse",
            "meta_description" => "Mouse",
        ]);
        Product::create([
            "name" => "Teclado",
            "status" => 1,
            "featured" => 1,
            "reference" => "TS",
            "description" => "Teclado",
            "softronic_id" => 1,
            "company_id" => 1,
            "slug" => "teclado",
            "meta_title" => "Teclado",
            "meta_description" => "Teclado",
        ]);
        Product::create([
            "name" => "MX Vertical",
            "status" => 1,
            "featured" => 0,
            "new" => 1,
            "reference" => "MX",
            "description" => "MX Vertical",
            "softronic_id" => 1,
            "company_id" => 1,
            "slug" => "mx-vertical",
            "meta_title" => "MX Vertical",
            "meta_description" => "MX Vertical",
        ]);
        Product::create([
            "name" => "Logitech Peble",
            "status" => 1,
            "featured" => 0,
            "new" => 1,
            "reference" => "LP",
            "description" => "Logitech Peble",
            "softronic_id" => 1,
            "company_id" => 1,
            "slug" => "logitech",
            "meta_title" => "Logitech Peble",
            "meta_description" => "Logitech Peble",
        ]);
        Product::create([
            "name" => "MX Keys",
            "status" => 1,
            "featured" => 0,
            "new" => 1,
            "reference" => "MXK",
            "description" => "MX Keys",
            "softronic_id" => 1,
            "company_id" => 1,
            "slug" => "mx-keys",
            "meta_title" => "MX Keys",
            "meta_description" => "MX Keys",
        ]);
        Product::create([
            "name" => "K380 Bluetooth",
            "status" => 1,
            "featured" => 0,
            "new" => 1,
            "reference" => "K380",
            "description" => "K380 Bluetooth",
            "softronic_id" => 1,
            "company_id" => 1,
            "slug" => "k380-bluetooth",
            "meta_title" => "K380 Bluetooth",
            "meta_description" => "K380 Bluetooth",
        ]);


        // Trust
        Product::create([
            "name" => "Voca Comfort Mouse",
            "status" => 1,
            "featured" => 0,
            "reference" => "VCM",
            "description" => "Voca Comfort Mouse",
            "softronic_id" => 1,
            "company_id" => 2,
            "slug" => "voca-comfort-mouse",
            "meta_title" => "Voca Comfort Mouse",
            "meta_description" => "Voca Comfort Mouse",
        ]);
        Product::create([
            "name" => "Trust Zone Wired",
            "status" => 1,
            "featured" => 0,
            "reference" => "TZW",
            "description" => "Trust Zone Wired",
            "softronic_id" => 1,
            "company_id" => 2,
            "slug" => "trust-zone-wired",
            "meta_title" => "Trust Zone Wired",
            "meta_description" => "Trust Zone Wired",
        ]);
        Product::create([
            "name" => "Stereo Headset",
            "status" => 1,
            "featured" => 0,
            "reference" => "SHT",
            "description" => "Stereo Headset",
            "softronic_id" => 1,
            "company_id" => 2,
            "slug" => "stereo-headset",
            "meta_title" => "Stereo Headset",
            "meta_description" => "Stereo Headset",
        ]);

        Product::create([
            "name" => "Computer Headset",
            "status" => 1,
            "featured" => 1,
            "reference" => "CHT",
            "description" => "Computer Headset",
            "softronic_id" => 1,
            "company_id" => 2,
            "slug" => "computer-headset",
            "meta_title" => "Computer Headset",
            "meta_description" => "Computer Headset",
        ]);
        Product::create([
            "name" => "Voca Confort Mouse",
            "status" => 1,
            "featured" => 1,
            "reference" => "VCM",
            "description" => "Voca Confort Mouse",
            "softronic_id" => 1,
            "company_id" => 2,
            "slug" => "voca-confort-mouse",
            "meta_title" => "Voca Confort Mouse",
            "meta_description" => "Voca Confort Mouse",
        ]);
        Product::create([
            "name" => "Sketch Silent",
            "status" => 1,
            "featured" => 1,
            "reference" => "SS",
            "description" => "Sketch Silent",
            "softronic_id" => 1,
            "company_id" => 2,
            "slug" => "sketch-silent",
            "meta_title" => "Sketch Silent",
            "meta_description" => "Sketch Silent",
        ]);

        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65685/logitech-pebble-m350.png",
            "product_id" => 1,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65685/2/logitech-pebble-m350.png",
            "product_id" => 1,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65685/3/logitech-pebble-m350.png",
            "product_id" => 1,
        ]);

        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/64879/24/k375s-multidevice-keyboard.png",
            "product_id" => 2,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/64879/25/k375s-multidevice-keyboard.png",
            "product_id" => 2,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/64879/26/k375s-multidevice-keyboard.png",
            "product_id" => 2,
        ]);
        
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65520/mx-vertical-pdp.png",
            "product_id" => 3,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65520/3/mx-vertical-pdp.png",
            "product_id" => 3,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65520/5/mx-vertical-pdp.png",
            "product_id" => 3,
        ]);
        
        
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65685/logitech-pebble-m350.png",
            "product_id" => 4,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65685/2/logitech-pebble-m350.png",
            "product_id" => 4,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65685/3/logitech-pebble-m350.png",
            "product_id" => 4,
        ]);
        
        
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65781/19/mx-keys.png",
            "product_id" => 5,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65781/17/mx-keys.png",
            "product_id" => 5,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65781/16/mx-keys.png",
            "product_id" => 5,
        ]);

        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65763/14/k380-multi-device-bluetooth-keyboard.png",
            "product_id" => 6,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65763/15/k380-multi-device-bluetooth-keyboard.png",
            "product_id" => 6,
        ]);
        ProductImage::create([
            "link" => "https://assets.logitech.com/assets/65763/16/k380-multi-device-bluetooth-keyboard.png",
            "product_id" => 6,
        ]);

        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23650/23650_pictures_product_visual_1.png?f=RM1920,800",
            "product_id" => 7,
        ]);
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23650/23650_pictures_product_eshot_1.png?f=RM1920,800",
            "product_id" => 7,
        ]);
        ProductImage::create([
            "link" =>"https://d7qztf2ityad6.cloudfront.net/23650/23650_pictures_product_side_1.png?f=RM1920,800",
            "product_id" => 7,
        ]);

        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23439/23439_pictures_product_visual_1.png?f=RM1920,800",
            "product_id" => 8,
        ]);
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23439/23439_pictures_product_visual_2.png?f=RM1920,800",
            "product_id" => 8,
        ]);

        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23310/23310_pictures_product_visual_1.png?f=RM1920,800",
            "product_id" => 9,
        ]);
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23310/23310_pictures_product_visual_2.png?f=RM1920,800",
            "product_id" => 9,
        ]);
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23310/23310_pictures_product_visual_3.png?f=RM1920,800",
            "product_id" => 9,
        ]);

        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23203/23203_pictures_product_visual_1.png?f=RM1920,800",
            "product_id" => 10,
        ]);
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23203/23203_pictures_product_visual_2.png?f=RM1920,800",
            "product_id" => 10,
        ]);
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23203/23203_pictures_product_extra_1.png?f=RM1920,800",
            "product_id" => 10,
        ]);
        
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23507/23507_pictures_product_visual_1.png?f=RM1920,800",
            "product_id" => 11,
        ]);
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23507/23507_pictures_product_top_1.png?f=RM1920,800",
            "product_id" => 11,
        ]);
        
        

        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23337/23337_pictures_product_visual_1.png?f=RM1920,800",
            "product_id" => 12,
        ]);
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23337/23337_pictures_product_visual_2.png?f=RM1920,800",
            "product_id" => 12,
        ]);
        ProductImage::create([
            "link" => "https://d7qztf2ityad6.cloudfront.net/23337/23337_pictures_product_side_1.png?f=RM1920,800",
            "product_id" => 12,
        ]);

        ProductCategory::create([
            'product_id' => 1,
            'category_id' => 1,
        ]);
        ProductCategory::create([
            'product_id' => 1,
            'category_id' => 2,
        ]);
        ProductCategory::create([
            'product_id' => 1,
            'category_id' => 3,
        ]);
        ProductCategory::create([
            'product_id' => 1,
            'category_id' => 4,
        ]);
        ProductCategory::create([
            'product_id' => 1,
            'category_id' => 5,
        ]);
        
        ProductCategory::create([
            'product_id' => 2,
            'category_id' => 1,
        ]);
        ProductCategory::create([
            'product_id' => 2,
            'category_id' => 2,
        ]);
        ProductCategory::create([
            'product_id' => 2,
            'category_id' => 3,
        ]);
        ProductCategory::create([
            'product_id' => 2,
            'category_id' => 4,
        ]);
        ProductCategory::create([
            'product_id' => 2,
            'category_id' => 5,
        ]);

        ProductCategory::create([
            'product_id' => 3,
            'category_id' => 1,
        ]);
        ProductCategory::create([
            'product_id' => 3,
            'category_id' => 14,
        ]);
        ProductCategory::create([
            'product_id' => 3,
            'category_id' => 16,
        ]);
        ProductCategory::create([
            'product_id' => 3,
            'category_id' => 4,
        ]);
        ProductCategory::create([
            'product_id' => 3,
            'category_id' => 5,
        ]);

        ProductCategory::create([
            'product_id' => 4,
            'category_id' => 1,
        ]);
        ProductCategory::create([
            'product_id' => 4,
            'category_id' => 7,
        ]);
        ProductCategory::create([
            'product_id' => 4,
            'category_id' => 3,
        ]);
        ProductCategory::create([
            'product_id' => 4,
            'category_id' => 5,
        ]);
        ProductCategory::create([
            'product_id' => 4,
            'category_id' => 15,
        ]);

        ProductCategory::create([
            'product_id' => 5,
            'category_id' => 1,
        ]);
        ProductCategory::create([
            'product_id' => 5,
            'category_id' => 2,
        ]);
        ProductCategory::create([
            'product_id' => 5,
            'category_id' => 3,
        ]);
        ProductCategory::create([
            'product_id' => 5,
            'category_id' => 4,
        ]);
        ProductCategory::create([
            'product_id' => 5,
            'category_id' => 15,
        ]);

        ProductCategory::create([
            'product_id' => 6,
            'category_id' => 1,
        ]);
        ProductCategory::create([
            'product_id' => 6,
            'category_id' => 2,
        ]);
        ProductCategory::create([
            'product_id' => 6,
            'category_id' => 10,
        ]);
        ProductCategory::create([
            'product_id' => 6,
            'category_id' => 9,
        ]);
        ProductCategory::create([
            'product_id' => 6,
            'category_id' => 5,
        ]);

        ProductCategory::create([
            'product_id' => 12,
            'category_id' => 1,
        ]);
        ProductCategory::create([
            'product_id' => 7,
            'category_id' => 5,
        ]);
        ProductCategory::create([
            'product_id' => 7,
            'category_id' => 17,
        ]);
        ProductCategory::create([
            'product_id' => 7,
            'category_id' => 9,
        ]);
        ProductCategory::create([
            'product_id' => 7,
            'category_id' => 13,
        ]);

        ProductCategory::create([
            'product_id' => 8,
            'category_id' => 1,
        ]);
        ProductCategory::create([
            'product_id' => 8,
            'category_id' => 2,
        ]);
        ProductCategory::create([
            'product_id' => 8,
            'category_id' => 3,
        ]);
        ProductCategory::create([
            'product_id' => 8,
            'category_id' => 9,
        ]);
        ProductCategory::create([
            'product_id' => 8,
            'category_id' => 7,
        ]);

        ProductCategory::create([
            'product_id' => 9,
            'category_id' => 15,
        ]);
        ProductCategory::create([
            'product_id' => 9,
            'category_id' => 13,
        ]);
        ProductCategory::create([
            'product_id' => 9,
            'category_id' => 12,
        ]);
        ProductCategory::create([
            'product_id' => 9,
            'category_id' => 6,
        ]);
        ProductCategory::create([
            'product_id' => 9,
            'category_id' => 7,
        ]);

        ProductCategory::create([
            'product_id' => 10,
            'category_id' => 15,
        ]);
        ProductCategory::create([
            'product_id' => 10,
            'category_id' => 13,
        ]);
        ProductCategory::create([
            'product_id' => 10,
            'category_id' => 12,
        ]);
        ProductCategory::create([
            'product_id' => 10,
            'category_id' => 6,
        ]);
        ProductCategory::create([
            'product_id' => 10,
            'category_id' => 7,
        ]);
        ProductCategory::create([
            'product_id' => 11,
            'category_id' => 15,
        ]);
        ProductCategory::create([
            'product_id' => 11,
            'category_id' => 13,
        ]);
        ProductCategory::create([
            'product_id' => 11,
            'category_id' => 12,
        ]);
        ProductCategory::create([
            'product_id' => 11,
            'category_id' => 6,
        ]);
        ProductCategory::create([
            'product_id' => 11,
            'category_id' => 7,
        ]);

        ProductCategory::create([
            'product_id' => 12,
            'category_id' => 15,
        ]);
        ProductCategory::create([
            'product_id' => 12,
            'category_id' => 13,
        ]);
        ProductCategory::create([
            'product_id' => 12,
            'category_id' => 12,
        ]);
        ProductCategory::create([
            'product_id' => 12,
            'category_id' => 6,
        ]);
        ProductCategory::create([
            'product_id' => 12,
            'category_id' => 7,
        ]);

        ProductFeature::create([
            'product_id' => 1,
            'feature_id' => 3,
        ]);
        ProductFeature::create([
            'product_id' => 1,
            'feature_id' => 4,
        ]);
        ProductFeature::create([
            'product_id' => 1,
            'feature_id' => 7,
        ]);
        ProductFeature::create([
            'product_id' => 1,
            'feature_id' => 8,
        ]);

        ProductFeature::create([
            'product_id' => 2,
            'feature_id' => 3,
        ]);
        ProductFeature::create([
            'product_id' => 2,
            'feature_id' => 5,
        ]);
        ProductFeature::create([
            'product_id' => 3,
            'feature_id' => 3,
        ]);
        ProductFeature::create([
            'product_id' => 4,
            'feature_id' => 3,
        ]);
        ProductFeature::create([
            'product_id' => 5,
            'feature_id' => 3,
        ]);
        ProductFeature::create([
            'product_id' => 6,
            'feature_id' => 3,
        ]);
        ProductFeature::create([
            'product_id' => 7,
            'feature_id' => 3,
        ]);
        ProductFeature::create([
            'product_id' => 8,
            'feature_id' => 5,
        ]);
        ProductFeature::create([
            'product_id' => 9,
            'feature_id' => 5,
        ]);
        ProductFeature::create([
            'product_id' => 10,
            'feature_id' => 6,
        ]);
        ProductFeature::create([
            'product_id' => 11,
            'feature_id' => 6,
        ]);
        ProductFeature::create([
            'product_id' => 11,
            'feature_id' => 7,
        ]);
        ProductFeature::create([
            'product_id' => 12,
            'feature_id' => 3,
        ]);
        ProductFeature::create([
            'product_id' => 12,
            'feature_id' => 4,
        ]);
        ProductFeature::create([
            'product_id' => 12,
            'feature_id' => 5,
        ]);
        ProductFeature::create([
            'product_id' => 12,
            'feature_id' => 7,
        ]);
        
    }
}
