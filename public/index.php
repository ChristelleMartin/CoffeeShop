<?php
// Point d'entrée du projet

// On charge les routes avec Altorouter (autoload.php se charge de gérer l'ensemble des fichiers présents dans Vendor)
require __DIR__ . "/../vendor/autoload.php";

// On charge les fichiers Controller
require __DIR__ . "/../app/Controllers/mainController.php";

// On charge les fichiers Models et Utils
require __DIR__ . "/../app/Utils/Database.php";
require __DIR__ . "/../app/Models/Product.php";
require __DIR__ . "/../app/Models/Recipe.php";

$router = new AltoRouter();
$router->setBasePath("/CoffeeShop/public"); 


// Définir les URLs avec la fonction native de PHP
$router->map('GET', '/', [ 
    'method' => 'homepage', 
    'controller' => 'mainController'], 
    'page_index');

$router->map('GET', '/products', [ 
    'method' => 'productspage', 
    'controller' => 'mainController'], 
    'page_products');

$router->map('GET', '/product/[i:product_id]', [ 
    'method' => 'detailproduct', 
    'controller' => 'mainController'], 
    'page_product');

$router->map('GET', '/recipes', [ 
    'method' => 'recipespage', 
    'controller' => 'mainController'], 
    'page_recipes');

// $match va contenir soit un tableau soit un booléen = false
$match = $router->match();

// $match["params"] va contenir les paramètres de l'URL (par ex. product_id)

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
$controller->$method($match["params"]);
