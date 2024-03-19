<?php

/* 
  Write you php code here
   */
$favorite_candies = ["chocolate", "mints", "fudge", "bubble gum", "toffee", "jelly beans"];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Echo Shorthand</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p><b>Favorites:</b></p>
  <p><?=ucfirst($favorite_candies[0])?></p>
  <p><?=ucfirst($favorite_candies[1])?></p>
  <p><?=ucfirst($favorite_candies[2])?></p>
</body>

</html>