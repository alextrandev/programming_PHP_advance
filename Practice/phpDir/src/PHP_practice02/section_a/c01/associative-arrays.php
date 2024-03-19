<?php

/* 
  Write you php code here
   */
$nutrion = [
  "fat" => 20,
  "sugar"=> 50,
  "salt"=> 2,
];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>Fat: <?php echo $nutrion["fat"]?>%</p>
  <p>Sugar: <?php echo $nutrion["sugar"]?>%</p>
  <p>Salt: <?php echo $nutrion["salt"]?>%</p>

</body>

</html>