<?php

use Illuminate\Support\Str;

if ( ! function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}

if ( ! function_exists('public_path')) {
    /**
     * Get the configuration path.
     *
     * @param string $uri
     * @return string
     */
    function public_path($uri = '')
    {
        return __DIR__.'/public/'.$uri;
    }
}

if (!function_exists('createNewPhotoName')) {

    function createNewPhotoName(string $ext): string
    {
        return strtolower(Str::random(10) . '_' . time() . '.' . $ext);
    }
}
