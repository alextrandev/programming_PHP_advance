<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"):
  
  if (isset($_POST["name"])) {
    $name = $_POST["name"];
    echo "<p>Welcome $name !</p>";
  };

else: ?>

  <form action="6.php" method="post">
  <input type="text" name="name" id="#">
  <input type="submit">
  </form>

<?php endif;?>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>