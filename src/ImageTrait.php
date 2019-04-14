<?php

namespace Djmitry\Image;

use Djmitry\Image\ImageService;

trait ImageTrait
{
    public function imageUrl()
    {
        $path = '/storage/images/cache';
        if (!file_exists(public_path('storage/images/cache/') . $this->image)) {
            $imageService = new ImageService();
            $imageService->resize($this->image);
        }
        return asset('storage/images/cache/' . $this->image);
    }
}
