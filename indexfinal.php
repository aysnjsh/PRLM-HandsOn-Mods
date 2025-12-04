<?php

$username = "Carusso";
$greeting = "What's up,";
$offer = array("Santa's Sock", 10, 50, 40);
$usual_price = 50;
$offer_price = 40;
$saving = $offer_price - $usual_price;

?>

<?php include "includes/header.php"; ?>
<?php include "includes/footer.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Santa's Warehouse</title>
        <link rel ="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1> Are you NAUGHTY or NICE?</h1>
        <p><?php echo $greeting; ?> <?php echo $username; ?> ! </p>
        <p> Get now, our very special <?=$offer [0] ?> for a AS LOW AS $<?=$offer [3] ?>!</p>
        <p>Discounted Price: $<?=$offer [3] ?></p>
        <p>Casual Price: $<?=$offer [2] ?></p>
    
    </body>

</html>