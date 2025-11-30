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