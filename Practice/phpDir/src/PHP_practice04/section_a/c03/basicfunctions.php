<?php
$candies = [
  "toffee" => [3, 12],
  "mints" => [2, 26],
  "fudge" => [8, 8],
];

$stockPrice = fn($price, $stock) => $price * $stock;
$taxDue = fn($price, $stock) => $price * $stock * 0.2;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Basic Functions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Stock Control</h2>
  <table>
    <tr>
      <th>Product</th>
      <th>Stock</th>
      <th>Re-order</th>
      <th>Total value</th>
      <th>Tax due</th>
    </tr>
    <?php foreach ($candies as $candy => list($price, $stock)) { ?>
      <tr>
        <td><?=ucfirst($candy)?></td>
        <td><?=$stock?></td>
        <td><?=$stock < 10 ? "Yes" : "No"?></td>
        <td><?=$stockPrice($price, $stock)?></td>
        <td><?=$taxDue($price, $stock)?></td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>