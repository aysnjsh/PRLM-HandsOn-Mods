<?php
$item = 'Chocolate';
$stock = 5;
$wanted = 8;
$can_buy = ($wanted <= $stock);
?> 
<!DOCTYPE html>
<html>
    <head>...</head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Shopping Cart</h2>
        <p>Item: <?= $item; ?></p>
        <p>In Stock: <?= $stock; ?></p>
        <p>Wanted: <?= $wanted; ?></p>
        <p>Can Buy: <?= $can_buy ?></p>
    </body>