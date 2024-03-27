<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">

  <?php
		/*  Step 1: Use the Make a class called Dog
		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
		Step 4: Make a method named ShowAll that echos all the properties
		Step 5: Instantiate the class / create object and call it pitbull
    Step 6: Call the method ShowAll
	*/
  class Dog {
    public $name, $eyeColor, $nose, $furColor;

    function __construct($name, $eyeColor, $nose, $furColor) {
      $this->name = $name;
      $this->eyeColor = $eyeColor;
      $this->nose = $nose;
      $this->furColor = $furColor;
    }

    function showAll() {
      echo "$this->name, eye color: $this->eyeColor, nose: $this->nose, fur color: $this->furColor.";
    }
  }

  $pitbull = new Dog("Pitbull", "brown", "round","white");

  $pitbull->showAll();

	?>
    
  </article>
</section>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>