<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>This is the example string: "<?= $text ?>"</p>
<p>Lowercase: <?= strtolower($text) ?></p>
<p>Uppercase: <?= strtoupper($text) ?></p>
<p>Number of characters: <?= strlen($text) ?></p>
<p>Number of words: <?= str_word_count($text) ?></p>

<?php include 'includes/footer.php'; ?>