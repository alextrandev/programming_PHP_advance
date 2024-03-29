<link rel="stylesheet" href="style.css">
<form action="calculator.php" method="post">
    <div class="input_field">
        <label for="first_number">Enter first number</label>
        <input type="number" name="first_number" id="first_number" required>
    </div>
    <div class="input_field">
        <span>Choose an operator</span>
        <div class="radio_container">
            <input type="radio" id="&plus;" name="operator" value="&plus;" required>
            <label for="&plus;">&plus;</label>
            <input type="radio" id="&minus;" name="operator" value="&minus;">
            <label for="&minus;">&minus;</label>
            <input type="radio" id="&times;" name="operator" value="&times;">
            <label for="&times;">&times;</label>
            <input type="radio" id="&divide;" name="operator" value="&divide;">
            <label for="&divide;">&divide;</label>
        </div>
    </div>
    <div class="input_field">
        <label for="second_number">Enter second number</label>
        <input type="number" name="second_number" id="second_number" required>
    </div>
    <input type="submit" value="Calculate" class="button-54">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] === "POST") :

    class Func {
        public $num1, $num2, $op;

        function __construct($num1, $num2, $op) {
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->op = $op;
        }

        function calculate() {
            switch ($this->op) {
                case "+":
                    return ($this->num1 + $this->num2);
                    break;
                case "−":
                    return ($this->num1 - $this->num2);
                    break;
                case "×":
                    return ($this->num1 * $this->num2);
                    break;
                case "÷":
                    return $this->num2 == 0 ? "undefine" : ($this->num1 / $this->num2);
                    break;
            }
        }
    };

    $func = new Func($_POST["first_number"], $_POST["second_number"], $_POST["operator"]);
    $result = $func->calculate(); ?>

    <h3 class="input_field"><?= "$func->num1 $func->op $func->num2 = $result" ?></h3>

<?php endif; ?>