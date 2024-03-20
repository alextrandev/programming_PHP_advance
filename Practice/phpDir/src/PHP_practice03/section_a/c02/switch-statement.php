<?php
$day = "monday";
switch($day) {
  case "monday":
    $deal = "20% off chocolates";
    break;
  case "tuesday":
    $deal = "20% off mints";
    break;
  default:
    $deal = "Buy three packs, get one free";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Today deal:</h2>
  <p>
    <?php echo $deal; ?>
</p>
</body>

</html>