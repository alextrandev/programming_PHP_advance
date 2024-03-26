<?php
$candies = [
  "toffee" => ["price" => 3, "stock" => 12],
  "mints" => ["price" => 2, "stock" =>  26],
  "fudge" => ["price" => 8, "stock" =>  8],
];

$stockPrice = fn($price, $stock): int => $price * $stock;
$taxDue = fn($price, $stock): int => $price * $stock * 0.2;

//alternative functions
function stockPrice_alt($price, $stock): int {
  return $price * $stock;
}
function taxDue_alt($price, $stock): int {
  return $price * $stock * 0.2;
} ?>

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
    <!--  "toffee" => ["price" => 3, "stock" => 12] -->
    <?php foreach ($candies as $candy => list("price" => $price, "stock" => $stock)): ?>

      <tr>
        <td><?=ucfirst($candy)?></td>
        <td><?=$stock?></td>
        <td><?=$stock < 10 ? "Yes" : "No"?></td>
        <td><?=$stockPrice($price, $stock)?></td>
        <td><?=$taxDue($price, $stock)?></td>
      </tr>

    <?php endforeach; ?>
  </table>
</body>

</html>