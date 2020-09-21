<?php

if (!defined('path')) {
function path($path = null) {

    $root = dirname(getcwd());

    if (!$path)
        return $root;

    $path = str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $path);
    $path = trim(trim($path), DIRECTORY_SEPARATOR);
    $path = $root . DIRECTORY_SEPARATOR . $path;

    if ($real = realpath($path))
        return $real;

    return $path;
}
}

if (!defined('config')) {
function config(string $key, $default = null) {
    return App\Kernel\Config::get($key, $default);
}
}
