<?php
$username = "Carusso";
$greeting = "What's up,";
$offer = array("Santa's Sock", 10, 50, 40);
$usual_price = 50;
$offer_price = 40;
$saving = $offer_price - $usual_price;

$totals = [];

for ($counter = 1; $counter <= 15; $counter++) {
    $subtotal = $offer_price * $counter;
    $discount = ($offer_price / 100) * ($counter * 4);
    $totals[$counter] = $subtotal - $discount;
}

require "includes/header.php"; 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Presents</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>NICE kids only !</h1>
        <p><?php echo $greeting; ?> <?php echo $username; ?> ! </p>
        <p>Get now, our very special <?= $offer[0] ?> for AS LOW AS $<?= $offer[3] ?>!</p>
        <p>Discounted Price: $<?= $offer[3] ?></p>
        <p>Casual Price: $<?= $offer[2] ?></p>

        <table border='1'>
            <tr>
                <th>Quantity</th>
                <th>Price</th>
            </tr>

            <?php
            foreach ($totals as $quantity => $price) {
                echo "<tr>";

                echo "<td>" . $quantity . " " . ($quantity > 1 ? "packs" : "packs") . "</td>";

                echo "<td>$" . number_format($price, 2) . "</td>";

                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>

<?php 
include "includes/footer.php";
?>
