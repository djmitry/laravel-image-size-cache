<?php

namespace Djmitry\Image;

use Djmitry\Image\ImageService;

trait ImageTrait
{
    public function image(int $w = 100, int $h = 100)
    {
        $path = '/storage/images/cache';
        if (!file_exists(public_path('storage/images/cache/') . $this->image)) {
            $imageService = new ImageService();
            $imageService->resize($this->image, $w, $h);
        }
        return asset('storage/images/cache/' . $this->image);
    }
}
