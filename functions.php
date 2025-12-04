<?php
declare(strict_types=1);

include 'nav.php';

$tax_rate = 12;

$santaproduct = [
    "Santa's Cookies"         => ["price" => 15.00, "stock" => 25],
    "Reindeer Treats"         => ["price" => 20.00, "stock" => 8],
    "Elf Candy Canes"         => ["price" => 5.00,  "stock" => 40],
    "Snowflake Marshmallows"  => ["price" => 12.00, "stock" => 16],
    "Gingerbread Stars"       => ["price" => 18.00, "stock" => 10],
    "Holiday Chocolate Bars"  => ["price" => 25.00, "stock" => 14],
    "Peppermint Swirls"       => ["price" => 8.00,  "stock" => 6]
];

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax = 0): float {
    return ($price * $qty) * ($tax / 100);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Santa Stock Monitor</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<h1>Santa's Christmas Stock Control</h1>

<table>
    <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-Order?</th>
        <th>Total Value (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

<?php foreach($santaproduct as $product_name => $data): ?>
    <tr>
        <td><?= $product_name ?></td>
        <td><?= $data["stock"] ?></td>
        <td><?= get_reorder_message($data["stock"]) ?></td>
        <td>₱<?= number_format(get_total_value($data["price"], $data["stock"]), 2) ?></td>
        <td>₱<?= number_format(get_tax_due($data["price"], $data["stock"], $tax_rate), 2) ?></td>
    </tr>
<?php endforeach; ?>

</table>

</body>
</html>
