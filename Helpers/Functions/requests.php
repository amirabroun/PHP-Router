<?php

function POST($key = 'all-$_POST')
{
    if ($key === 'all-$_POST') {
        return $_POST;
    }

    return $_POST[$key] ?? null;
}

function GET($key = 'all-$_GET')
{
    if ($key === 'all-$_GET') {
        return $_GET;
    }

    return $_GET[$key] ?? null;
}

function REQUEST($key = 'all-$_REQUEST')
{
    if ($key === 'all-$_REQUEST') {
        return $_REQUEST;
    }

    return $_REQUEST[$key] ?? null;
}

function back($url = '/')
{
    redirect($_SERVER['HTTP_REFERER'] ?? $url);
}

function fail($code = 404)
{
    http_response_code($code);
    exit();
}

function originBaseUrl()
{
    return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
}

function adminBaseUrl()
{
    return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'];
}

function pageName()
{
    return ltrim(str_replace('.php', '', $_SERVER['SCRIPT_NAME']), '/');
}

function uri()
{
    return ltrim(str_replace('.php', '', $_SERVER['REQUEST_URI']), '/');
}

function checkAction($action)
{
    if (!(POST("action") && POST("action") === $action)) {
        return false;
    }

    return true;
}

function getAction()
{
    dd(POST("action"));
}
