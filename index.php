<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("Source");

// Rotas para as páginas

$router->group(null);
$router->get("/", "Pages:homePage");
$router->get("/conheca-os-bairros", "Pages:conhecaBairrosPage");


$router->dispatch();
