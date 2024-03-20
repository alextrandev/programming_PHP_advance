<?php

/* 
  Write you php code here
  */
$input = 11;
$stock = 10;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>

  <?php
  if ($input <= $stock && $input >= 0) {
    echo "1";
  } elseif ($input > $stock) {
    echo "";
  } else {
    echo "Please try again!";
  }
  ?>

</body>

</html>