<?php
$nutrition = [
    'fat' => 38,
    'sugar' => 51,
    'sait' => 0.25,
]
$nutrition['fat'] = 36;
$nutrition['fiber'] = 2.1;
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
        <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
    </body>
</html>