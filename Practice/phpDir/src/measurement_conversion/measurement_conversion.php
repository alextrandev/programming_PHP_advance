<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") :

    if (isset($_POST["temp"])) {
        switch ($_POST["tempUnit1"]) {
            case "f":
                $tempC = ($_POST["temp"] - 32) * 5 / 9;
                break;
            case "k":
                $tempC = $_POST["temp"] - 273.15;
                break;
            default:
                $tempC = $_POST["temp"];
        } //convert input temp into C as a mediator

        switch ($_POST["tempUnit2"]) {
            case "f":
                $convertedTemp = $tempC * 9 / 5 + 32;
                break;
            case "k":
                $convertedTemp = $tempC + 273.15;
                break;
            default:
                $convertedTemp = $tempC;
        } //converted mediator temp into the final result
    }

endif;

?>
<link rel="stylesheet" href="style.css">
<form action="measurement_conversion.php" method="post">
    <h1>Temperature conversion</h1>
    <div class="form_container">
        <div class="input_container">
            <input type="number" id="temp" name="temp" value="<?= @$_POST["temp"] ?>">
            <select name="tempUnit1" id="tempUnit1">
                <option value="c" <?= @$_POST["tempUnit1"] == "c" ? "selected" : "" ?>>Celcius</option>
                <option value="f" <?= @$_POST["tempUnit1"] == "f" ? "selected" : "" ?>>Farenheit</option>
                <option value="k" <?= @$_POST["tempUnit1"] == "k" ? "selected" : "" ?>>Kelvin</option>
            </select>
        </div>
        <h2>=</h2>
        <div class="input_container">
            <input type="number" placeholder="<?= @$convertedTemp ?>" disabled>
            <select name="tempUnit2" id="tempUnit2">
                <option value="c" <?= @$_POST["tempUnit2"] == "c" ? "selected" : "" ?>>Celcius</option>
                <option value="f" <?= @$_POST["tempUnit2"] == "f" ? "selected" : "" ?>>Farenheit</option>
                <option value="k" <?= @$_POST["tempUnit2"] == "k" ? "selected" : "" ?>>Kelvin</option>
            </select>
        </div>
    </div>
    <input type="submit" value="Convert">
</form>