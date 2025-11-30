<?php
$name = 'Guest';
$name = 'Asher';
$price = 2;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Varialbles</title>
        <link rel ="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Welcome <?php echo $name; ?></h2>
        <p>The cost of your candy is
            $<?php echo $price; ?> per pack.</p>
    </body>
</html>