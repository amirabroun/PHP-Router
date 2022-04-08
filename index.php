<?php include __DIR__ . '/vendor/autoload.php';

use Router\Router;

$route = new Router;
$route->get('/', function () {
    dd('hello world');
});
$route->run();
