<?php

namespace Djmitry\Image;

class ImageService
{
    public function resize($image)
    {
        $images_path = public_path('storage/images/');
        $cache_path = public_path('storage/images/cache/');
        $pathToImage = $images_path . $image;
        $img = \Image::make($pathToImage);
        $img->fit(800, 200, function($constraint) {
            //$constraint->upSize();
        });
        $img->save($cache_path . $img->basename);
    }
}