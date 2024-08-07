<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("Source");

// Rotas para as páginas

$router->group(null);
$router->get("/", "Pages:HomePage");
$router->get("/conheca-os-bairros", "Pages:ConhecaBairrosPage");
$router->get("/mercado-imob", "Pages:conhecaBairrosPage");
$router->get("/lancamento", "Pages:conhecaBairrosPage");
$router->get("/duo", "Pages:conhecaBairrosPage");
$router->get("/decoracao-e-paisagismo", "Pages:conhecaBairrosPage");

$router->group("/painel");
$router->get("/bairros", "Painel:BairrosPainel");

$router->dispatch();
