
<?php

/* 
  Write you php code here
   */
  $cart = ["candy", "candy", "candy"];
  $candyPrice = 5;
  $sum = 0;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
<?php 
foreach($cart as $item) {
  echo "<p>".ucfirst($item).": $candyPrice €</p>";
  $sum += $candyPrice;
}
echo "<p><b>Total:</b> $sum €</p>";
?>
</body>

</html>