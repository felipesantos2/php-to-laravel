<?php

use core\library\Router;
use app\controllers\HomeController;
use app\controllers\ProductController;

try {
    $router = new Router();
    $router->add('GET', '/', [HomeController::class, 'index']);
    $router->add('GET', '/product/[a-z\-]', [ProductController::class, 'index']); // regex
    $router->add('POST', '/login', [LoginController::class, 'store']); // regex
    $router->execute();
} catch (Exception $e) {
}
