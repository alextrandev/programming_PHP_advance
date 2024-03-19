<?php

/* 
  Write you php code here
   */
$nutrion = [
  "fat" => 20,
  "sugar"=> 50,
  "salt"=> 2,
];

$nutrion["fat"] = 15;
$nutrion["fiber"] = 5;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <?php
  foreach($nutrion as $key => $value) {
    echo "<p>".ucfirst($key).": ".$value."%</p>";
  }
?>
</body>

</html>