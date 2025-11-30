<?php
$nutrition = [
    'fat' => 16,
    'sugar' => 51,
    'sait' => 6.3,
]
?>
<!DOCTYPE html>
<html>
    <head>...</head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Nutrition per (per 100g)</h2>
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['sait']; ?>%</p>
    </body>
</html>