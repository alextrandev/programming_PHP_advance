<?php
$path = 'img/logo.png';

include 'includes/header.php'; 

if (file_exists($path)): ?>

<p>File name: <?= basename($path) ?></p>
<p>File size: <?= filesize($path) ?> bytes</p>
<p>MIME type: <?= mime_content_type($path) ?></p>
<p>Folder: <?= pathinfo($path, PATHINFO_DIRNAME) ?></p>

<?php else: ?>

<p>File not exists</p>

<?php endif;

include 'includes/footer.php'; 
?>