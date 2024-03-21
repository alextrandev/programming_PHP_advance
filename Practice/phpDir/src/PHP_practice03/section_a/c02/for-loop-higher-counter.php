<?php 
$candyPrice = 5;
$candiesInPacks = 10;
$displayIteration = 10;
$packPrice = 0;

for ($i = 0; $i < $candiesInPacks; $i++) {
  $packPrice += $candyPrice;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>

<?php

for ($i = 0; $i < $displayIteration; $i++) : ?>

<p>Price of <?=($i + 1) * 10?> packs: <span><?=$packPrice * ($i + 1)?></span></p>

<?php endfor; ?>
</body>

</html>