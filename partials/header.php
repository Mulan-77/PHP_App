<?php

session_start();

// include '../utils/functions.php';

// Opérateur ternaire qui vérifie ou on se trouve 
// Si jamais notre URI est /index.php alors notre variable path vaut '' sinon '../'
// $_SERVER['REQUEST_URI'] === '/index.php' ? $path = '' : $path = '..';

// Adresse de base qu'on transforme en tableau et on sépare avec les /
$array = explode('/', $_SERVER['REQUEST_URI']);

// On vient chercher le dernier item du tableau 
$cleanUri = $array[count($array)-1];

// On fait notre opérateur ternaire
$cleanUri === 'index.php' ? $path = 'views/' : $path = '';

// $_SERVER['REQUEST_URI'] === '/index.php' ? $path = 'views/' : $path = '';

// dd ($_SERVER['PHP_SELF']);
//     echo $path;
// // echo $_SERVER['SCRIPT_NAME'];

// ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon PHP eShop</title>
    <link rel="stylesheet" href="style/tamere.css">
    <script src="/views/scripts/app.js" defer></script>
</head>
<body>

    <nav>
        <ul>
            <!-- <img class="burger" src="../assets/icons/menu.png"> -->
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contact</a></li>

            <?php if (isset ($_SESSION ['user']) && $_SESSION ['user']['logged']) :  ?> 

                <li><a href="/products">Products</a></li>
                <li><a href="/cart">Cart</a></li>
                <li><a href="/profile">Profil</a></li>
                
                <li><a href="/logout">Logout</a></li>
            
            <?php else : ?>

                <li><a href="/signup">Signup</a></li>
                <li><a href="/login">Login</a></li>
            
            <?php endif ?>
        </ul>
    </nav>

