<?php
$candyPrice = 1.99;
$cart = 5;
$total = 0;
$i = 0;

while ($i < $cart) {
  $total += $candyPrice;
  $i++;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for <?=$cart?> pack(s)</h2>
  <p><?=$total?>$</p>
</body>

</html>