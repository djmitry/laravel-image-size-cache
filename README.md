## Laravel Form Generator
[![Latest Version on Packagist](https://img.shields.io/packagist/v/djmitry/laravel-image-size-cache.svg)](https://packagist.org/packages/djmitry/laravel-image-size-cache)
[![Software License](https://img.shields.io/packagist/l/djmitry/laravel-image-size-cache.svg)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/djmitry/laravel-image-size-cache.svg)](https://packagist.org/packages/djmitry/laravel-image-size-cache)

# Установка
```bash
$ composer require djmitry/laravel-image-size-cache
```

# Использование
Путь изображения хранится в поле image_path, ширина 300, высота 200
```bash
<img src="{{ $article->image('image_path', 300, 200) }}">
```