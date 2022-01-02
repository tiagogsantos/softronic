<?php

namespace App\Services;

use App\Models\Banner;
use Image;
use App\Services\BannerService;

class BannerService
{
    public static function create(array $data): void
    {
        $data['image'] = BannerService::saveImage($data['name'],$data['image']);

        Banner::create($data);
    }
    public static function update(array $data, Banner $banner): void
    {
        if (isset($data['image'])) {
            $data['image'] = BannerService::saveImage(
                $data['name'],
                $data['image']
            );    
        }else{
            $data['image'] = $banner->image;
        }
        
        $banner->update($data);
    }

    public static function saveImage($name, $file): string
    {

        $originalPath = public_path() . '/uploads/banner/original/';
        $thumbnailPath = public_path() . '/uploads/banner/thumbnail/';
        $originalImage = $file;

        $fileName = getNameFile($originalImage, $name);

        $image = Image::make($originalImage);
        $image->save($originalPath . $fileName);

        $image->resize(350, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $image->save($thumbnailPath . $fileName, 100);

        return $fileName;
    }
}