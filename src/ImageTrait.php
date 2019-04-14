<?php

namespace Djmitry\Image;

use Djmitry\Image\ImageService;

trait ImageTrait
{
    public function image(string $field, int $w = 100, int $h = 100)
    {
        $path = '/storage/images/cache';
        if (!file_exists(public_path('storage/images/cache/') . $this->$field)) {
            $imageService = new ImageService();
            $imageService->resize($this->$field, $w, $h);
        }
        return asset('storage/images/cache/' . $this->$field);
    }
}
