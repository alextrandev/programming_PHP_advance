<?php
/* Write your code here */
$stock = 0;
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <p>
    <?php if ($stock > 0) { 
      echo "In stock"; 
      } else echo "Sold out"; ?>
  </p>
</body>

</html>