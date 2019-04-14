<?php

namespace Djmitry\Image;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;

class ImageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Storage::makeDirectory('public/cache');
    }   
}