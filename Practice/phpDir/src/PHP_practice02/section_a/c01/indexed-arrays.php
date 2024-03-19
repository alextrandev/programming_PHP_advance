<?php

/* 
  Write you php code here
   */
$best_sellers = ["chocolate", "mints", "fudge", "bubble gum", "toffee", "jelly beans"];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Indexed Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Best Sellers</h2>

  <?php 
for ($i = 0; $i < 3; $i++) {
  echo "<p>".ucfirst($best_sellers[$i])."</p>";
}
  ?>

</body>

</html>