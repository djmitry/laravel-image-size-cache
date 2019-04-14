<?php

namespace Djmitry\Image;

class ImageService
{
    public function resize(string $image, int $w, int $h)
    {
        $images_path = public_path('storage/');
        $cache_path = public_path('storage/cache/');
        $pathToImage = $images_path . $image;
        $img = \Image::make($pathToImage);
        $img->fit($w, $h, function($constraint) {
            //$constraint->upSize();
        });
        $img->save($cache_path . $img->basename);
    }
}