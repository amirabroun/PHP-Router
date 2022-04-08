<?php

require 'Functions/requests.php';

ini_set('xdebug.var_display_max_depth', 10);
ini_set('xdebug.var_display_max_children', 256);
ini_set('xdebug.var_display_max_data', 1024);

function url($path = '')
{
    return originBaseUrl() . '/' . $_SERVER['HTTP_HOST'] . '/' . ltrim($path, '/');
}

function dd(...$data)
{
    var_dump((object)$data);
    die(var_dump([
        'page name' => pageName(),
        'uri' => uri(),
    ]));
}

function ddd(...$data)
{
    die(json_encode([
        $data,
        'page name' => pageName(),
        'uri' => uri(),
    ]));
}

function responseJson($data)
{
    die(json_encode($data));
}

function redirect($path)
{
    header("location: $path");
    exit();
}
