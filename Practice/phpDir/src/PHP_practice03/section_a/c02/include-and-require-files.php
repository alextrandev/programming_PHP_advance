<?php 
require ("./includes/header.php");

$stock = 15;
$stockStatus = "";

switch (true) {
    case ($stock >= 25):
        $stockStatus = "Good availability";
        break;
    case ($stock > 0):
        $stockStatus = "Low stock";
        break;
    default:
        $stockStatus = "Out of stock";
}
?>

<h2>Chocolate</h2>
<p><?=$stockStatus?></p>

<?php include("./includes/footer.php") ?>