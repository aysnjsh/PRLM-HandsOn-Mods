<?php
$name = 'Guest';
$name = 'eisen';
$price = 2;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Variables</title>
        <link rel ="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2>Welcome <?php echo $name; ?></h2>
        <p>The power of your spike is
            $<?php echo $price; ?> per serving.</p>
    </body>
</html>

<?php
$nutrition = [
    'fat' => 16,
    'sugar' => 51,
    'salt' => 6.3,
    'calcium' => 10.3,
]
?>
<!DOCTYPE html>
<html>
    <head>________________________________________________________</head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2>Nutrition per (per 100g)</h2>
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
        <p>Calcium: <?php echo $nutrition['calcium']; ?>%</p>
    </body>
</html>

<?php
$best_sellers = ['Hinata Roll', 'Kageyama Rice', 'Tsukishima Tea',
    'Kenma Balls', 'Oikawa Milktea', 'Kiyoko Pops',];
?>
<!DOCTYPE html>
<html>
    <head>________________________________________________________</head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2>Best Sellers</h2>
        <ul>
        <li><?php echo $best_sellers[0]; ?></li>
        <li><?php echo $best_sellers[1]; ?></li>
        <li><?php echo $best_sellers[2]; ?></li>
        </ul>
    </body>
</html>

<?php
$nutrition = [
    'fat' => 38,
    'sugar' => 51,
    'sait' => 0.25,
];
$nutrition['fat']   = 36;
$nutrition['fiber'] = 2.1;
?>
<!DOCTYPE html>
<html>
    <head>________________________________________________________</head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2>Nutrition per (per 100g)</h2>
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['sait']; ?>%</p>
        <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
    </body>
</html>

<?php
$offers = [
    ['name' => 'Hinata Roll', 'price' => 1.5, 'Stock' => 120],
    ['name' => 'Kageyama Rice', 'price' => 1, 'Stock' => 66],
    ['name' => 'Tsukishima Tea', 'price' => 1.25, 'Stock' => 97],
];
?>
<!DOCTYPE html>
<html>
    <head>________________________________________________________</head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2>Offers</h2>
        <p><?php echo $offers[0]['name']; ?> - 
        $<?php echo $offers[0]['price']; ?> </p>
        <p><?php echo $offers[1]['name']; ?> - 
        $<?php echo $offers[1]['price']; ?> </p>
        <p><?php echo $offers[2]['name']; ?> - 
        $<?php echo $offers[2]['price']; ?> </p>
    </body>
</html>

<?php
$names = 'eisen';
$favotires = ['Hinata Roll', 'Kageyama Rice', 'Tsukishima Tea',];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Echo Shorthand</title>
        <link rel ="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2>Welcome <?= $names; ?></h2>
        <p>Your favorites type of food is:
            <?= $favotires[0]; ?></p>
        
    </body>
</html>

<?php
$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 20; 
$total = $subtotal + $tax;
?>
<!DOCTYPE html>
<html>
    <head>________________________________________________________</head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2>Shopping Cart</h2>
        <p>Items: <?php echo $items; ?></p>
        <p>Cost per item: $<?php echo $cost; ?></p>
        <p>Subtotal: $<?php echo $subtotal; ?></p>
        <p>Tax: $<?php echo $tax; ?></p>
        <p>Total: $<?php echo $total; ?></p>
    </body>
</html>

<?php
$prefix = 'Thank you';
$name = 'eisen';
$message = $prefix . ', ' . $name;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>String Operator</title>
        <link rel ="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2><?php echo $name; ?>'s Order</h2>
        <p><?php echo $message; ?></p>
    </body>
</html>

<?php
$item = 'Hinata Roll';
$stock = 5;
$wanted = 8;
$can_buy = ($wanted <= $stock);
?> 
<!DOCTYPE html>
<html>
    <head>________________________________________________________</head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2>Full Menu</h2>
        <p>Item: <?= $item; ?></p>
        <p>In Stock: <?= $stock; ?></p>
        <p>Wanted: <?= $wanted; ?></p>
        <p>Can Buy: <?= $can_buy ?></p>
    </body>

    <?php
$Food = 'Hinata Roll';
$stock = 120;
$purchased = 15;
$deal = true;

$buy = (($purchased <= $stock) && ($deal == true));

$addString = 1 + "2";
$addMixed = intval("Rolls") + 3;
$concat = "Spike " . true;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/styles.css">
        </head>
    <body>
        <h1>Spike Eat-in</h1>
        <h2>Receipt</h2>

        <p><strong>Food Item:</strong> <?php echo $Food; ?></p>
        <p><strong>Stock:</strong> <?php echo $stock; ?></p>
        <p><strong>Purchased:</strong> <?php echo $purchased; ?></p>
        
        <p><strong>Shipped:</strong> <?php echo $buy ? "yes" : "no"; ?></p>

        <hr>

        <h2>Type Juggling Example</h2>
        <p>1 + "2" = <?= $addString ?>(string converted to integer)</p>
        <p>"Rolls" + 3 = <?= $addMixed ?>(string converted to integer)</p>
        <p>"correct" = "<?= $concat ?>" (boolean true becomes "1")</p>

    </body>
</html>