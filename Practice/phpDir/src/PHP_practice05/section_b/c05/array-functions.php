<?php
$greetings = ["Hi", "Xin Chào" ,"Howdy", "Hello", "Hola", "Cia", "Moi", "Namaste", "Welcome"];
$greeting = $greetings[array_rand($greetings)];

$customers = [
    ["Alice", "Smith", "alice.smith@example.com"],
    ["John", "Doe", "john.doe@example.com"],
    ["Emily", "Johnson", "emily.johnson@example.com"],
    ["Michael", "Williams", "michael.williams@example.com"],
    ["Sarah", "Brown", "sarah.brown@example.com"]
];
$customer = $customers[array_rand($customers)][0];

$best_sellers = ["notebook" => 243, "pencil" => 412, "ink" => 182, "eraser" => 87, "ruler" => 42];
array_multisort($best_sellers, SORT_DESC, SORT_NUMERIC); //sort items by amount sold
?>

<?php include 'includes/header.php'; ?>

<p><?= "$greeting $customer !" ?></p>

<h1>Best Sellers</h1>

<?php 
$i = 1;
foreach($best_sellers as $item => $numberSold):
?>

<p><?= $i++ . ". " . ucfirst($item) . " : " . $numberSold ?> </p>

<?php endforeach; ?>

<?php include 'includes/footer.php'; ?>