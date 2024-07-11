<?php

// constantes utilitárias
define("APP_START", microtime(true));
define("APP_NAME", "MY MVC");
define("APP_VERSION", "0.0.1");

require __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));

$dotenv->load();

// dd($_ENV["DB_HOST"]);

dd($_SERVER);
