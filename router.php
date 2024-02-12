<?php

include "../TP eShop/utils/functions.php";

//Notre fichier pour les routes
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];





//On associe dans ce tableau des uri à des pages de notre app
$routes = [
    '/'=>'views/index.view.php',
    '/login'=>'views/login.view.php',
    '/signup'=>'views/signup.view.php',
    '/signup-sucess'=>'views/signup-sucess.view.php',
    '/profile'=>'views/profile.view.php',
    '/products'=>'views/products.view.php',
    '/product'=>'views/product.view.php',
    '/logout'=>'views/logout.php',
    '/delete-product'=>'views/delete-product.view.php',
    '/contact'=>'views/contact.view.php', 
    '/cart'=>'views/cart.view.php',
];


//On vient vérifier dans le tableau si une des clés correspond au chemin de l'URL ($uri)
array_key_exists($uri, $routes) ? require $routes [$uri]: require 'views/404.view.php';
