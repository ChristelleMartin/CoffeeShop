<?php
// Point d'entrée du projet

// On charge les routes avec Altorouter (autoload.php se charge de gérer l'ensemble des fichiers présents dans Vendor)
require __DIR__ . "/../vendor/autoload.php";

// On charge les fichiers Controller
require __DIR__ . "/../app/Controllers/mainController.php";

$router = new AltoRouter();
$router->setBasePath("/CoffeeShop/public"); 

// var_dump($router); 

// Définir les URLs avec la fonction native de PHP
$router->map('GET', '/', [ 
    'method' => 'homepage', 
    'controller' => 'mainController'], 
    'page_index');

$router->map('GET', '/products', [ 
    'method' => 'productspage', 
    'controller' => 'mainController'], 
    'page_products');

$router->map('GET', '/recipes', [ 
    'method' => 'recipespage', 
    'controller' => 'mainController'], 
    'page_recipes');

// $match va contenir soit un tableau soit un booléen = false
$match = $router->match();

if($match !== false) {
    $matchRoute = $match['target'];
    $controller = $matchRoute['controller'];
    $method = $matchRoute['method'];
} else {

    // si la route n'existe pas, on a une erreur 404
    var_dump("erreur 404, la page demandée n'existe pas");
    die();
}

// Dispatcher
$controller = new $controller();
$controller->$method();
