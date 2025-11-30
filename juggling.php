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