<?php
$greetings = ["Hi", "Xin Chào" ,"Howdy", "Hello", "Hola", "Cia", "Moi", "Namaste", "Welcome"];
$best_sellers = ["notebook" => 243, "pencil" => 412, "ink" => 182, "eraser" => 87, "ruler" => 42];
$customerDetails = [
    ["Alice", "Smith", "alice.smith@example.com"],
    ["John", "Doe", "john.doe@example.com"],
    ["Emily", "Johnson", "emily.johnson@example.com"],
    ["Michael", "Williams", "michael.williams@example.com"],
    ["Sarah", "Brown", "sarah.brown@example.com"]
];

$random = fn($array) => $array[rand(0, count($array) -1)];
    
array_multisort($best_sellers, SORT_DESC, SORT_NUMERIC);

include 'includes/header.php';
?>

<p><?=$random($greetings)." ".$random($customerDetails)[0]." !"?></p>

<h1>Best Sellers</h1>

<?php 
$i = 1;

foreach($best_sellers as $item => $numberSold) echo "<p>" . $i++ . ". " . $item . " : " . $numberSold . "</p>";

include 'includes/footer.php'; 
?>