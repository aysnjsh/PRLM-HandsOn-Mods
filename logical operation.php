<?php
$offers = [
    ['name' => 'Hinata Roll', 'price' => 1.5, 'Stock' => 120],
    ['name' => 'Kageyama Rice', 'price' => 1, 'Stock' => 66],
    ['name' => 'Tsukishima Tea', 'price' => 1.25, 'Stock' => 97],
];
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href="css/styles.css">
    </head>
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