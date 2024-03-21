<?php

/* 
  Write you php code here
   */
$offers = 
[["name" => "apple", "price" => 1, "stock" => 201],
["name" => "orange", "price" => 2, "stock" => 182],
["name" => "banana", "price" => 1, "stock" => 334]];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <h1>The Candy Store</h1>
  <h2>Offers</h2>

  <?php foreach($offers as $offer): ?>

     <p><?= ucfirst($offer["name"]) . ": " . $offer["price"] . "€. Stock: " . $offer['stock'] ?></p>
     
  <?php endforeach; ?>

</body>

</html>