<?php

namespace Djmitry\Image;

use Djmitry\Image\ImageService;

trait ImageTrait
{
    public function image(string $field, int $w = 100, int $h = 100)
    {   
        $arr_path = explode('/', $this->$field);
        if ($arr_path) {
            $cache_file = array_pop($arr_path);
        } else {
            $cache_file = $this->$field;
        }

        $cache_file = str_replace('.', "{$w}x{$h}.", $cache_file);
        
        $cache_dir = 'storage/cache/';
        if (!file_exists(public_path($cache_dir) . $cache_file)) {
            $imageService = new ImageService();
            $imageService->resize($this->$field, $w, $h);
        }
        return asset($cache_dir . $cache_file);
    }
}
