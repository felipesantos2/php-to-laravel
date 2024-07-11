<?php

session_start();

require __DIR__ . "/../vendor/autoload.php";

require '../bootstrap/app.php';

require '../routes/web.php';


class HomeController
{
    public function index()
    {
        view('index');
    }
}

// (new HomeController())->index())

echo APP_BASE_PATH;