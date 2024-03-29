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
                $convertedTemp = number_format($tempC * 9 / 5 + 32);
                break;
            case "k":
                $convertedTemp = number_format($tempC + 273.15);
                break;
            default:
                $convertedTemp = number_format($tempC);
        } //converted mediator temp into the final result
    }

    if (isset($_POST["speed"])) {
        switch ($_POST["speedUnit1"]) {
            case "mps":
                $speedKph = $_POST["speed"] * 3.6;
                break;
            case "kn":
                $speedKph = $_POST["speed"] * 1.852;
                break;
            case "ma":
                $speedKph = $_POST["speed"] * 1234.8;
                break;
            case "c":
                $speedKph = $_POST["speed"] * 1079252849;
                break;
            default:
                $speedKph = $_POST["speed"];
        } //convert input speed into kph as a mediator

        switch ($_POST["speedUnit2"]) {
            case "mps":
                $convertedSpeed = number_format($speedKph / 3.6);
                break;
            case "kn":
                $convertedSpeed = number_format($speedKph / 1.852);
                break;
            case "ma":
                $convertedSpeed = number_format($speedKph / 1234.8);
                break;
            case "c":
                $convertedSpeed = number_format($speedKph / 1079252849);
                break;
            default:
                $convertedSpeed = number_format($speedKph);
        } //converted mediator speed into the final result
    }

endif;

?>
<link rel="stylesheet" href="style.css">

<form action="measurement_conversion.php" method="post">
    <h1>Temperature conversion</h1>
    <div class="form_container">
        <div class="input_container">
            <input type="float" id="temp" name="temp" value="<?= @$_POST["temp"] ?>">
            <select name="tempUnit1" id="tempUnit1">
                <option value="c" <?= @$_POST["tempUnit1"] == "c" ? "selected" : "" ?>>Celcius</option>
                <option value="f" <?= @$_POST["tempUnit1"] == "f" ? "selected" : "" ?>>Farenheit</option>
                <option value="k" <?= @$_POST["tempUnit1"] == "k" ? "selected" : "" ?>>Kelvin</option>
            </select>
        </div>
        <h2>=</h2>
        <div class="input_container">
            <input type="float" placeholder="<?= @$convertedTemp ?>" disabled>
            <select name="tempUnit2" id="tempUnit2">
                <option value="c" <?= @$_POST["tempUnit2"] == "c" ? "selected" : "" ?>>Celcius</option>
                <option value="f" <?= @$_POST["tempUnit2"] == "f" ? "selected" : "" ?>>Farenheit</option>
                <option value="k" <?= @$_POST["tempUnit2"] == "k" ? "selected" : "" ?>>Kelvin</option>
            </select>
        </div>
    </div>
    <input type="submit" value="Convert">
</form>

<form action="measurement_conversion.php" method="post">
    <h1>Speed conversion</h1>
    <div class="form_container">
        <div class="input_container">
            <input type="float" id="speed" name="speed" value="<?= @$_POST["speed"] ?>">
            <select name="speedUnit1" id="tempUnit1">
                <option value="kph" <?= @$_POST["speedUnit1"] == "kph" ? "selected" : "" ?>>Kilometer per hour</option>
                <option value="mps" <?= @$_POST["speedUnit1"] == "mps" ? "selected" : "" ?>>Meter per second</option>
                <option value="kn" <?= @$_POST["speedUnit1"] == "kn" ? "selected" : "" ?>>Knot</option>
                <option value="ma" <?= @$_POST["speedUnit1"] == "ma" ? "selected" : "" ?>>Mach</option>
                <option value="c" <?= @$_POST["speedUnit1"] == "c" ? "selected" : "" ?>>c (speed of light)</option>
            </select>
        </div>
        <h2>=</h2>
        <div class="input_container">
            <input type="float" placeholder="<?= @$convertedSpeed ?>" disabled>
            <select name="speedUnit2" id="speedUnit2">
                <option value="kph" <?= @$_POST["speedUnit2"] == "kph" ? "selected" : "" ?>>Kilometer per hour</option>
                <option value="mps" <?= @$_POST["speedUnit2"] == "mps" ? "selected" : "" ?>>Meter per second</option>
                <option value="kn" <?= @$_POST["speedUnit2"] == "kn" ? "selected" : "" ?>>Knot</option>
                <option value="ma" <?= @$_POST["speedUnit2"] == "ma" ? "selected" : "" ?>>Mach</option>
                <option value="c" <?= @$_POST["speedUnit2"] == "c" ? "selected" : "" ?>>c (speed of light)</option>
            </select>
        </div>
    </div>
    <input type="submit" value="Convert">
</form>