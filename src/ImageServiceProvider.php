<?php

namespace Djmitry\Image;

use Illuminate\Support\ServiceProvider;

class ImageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Storage::makeDirectory('cache');
    }
}