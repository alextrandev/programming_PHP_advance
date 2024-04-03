<?php include "db.php";

//if form sent, send to database, else print the form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $insertStmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $insertStmt->bind_param("ss", $user, $pwd);
        $user = htmlspecialchars($_POST["username"]);
        $pwd = htmlspecialchars($_POST["password"]);

        include "input_check.php";

        $insertStmt->close();
        $conn->close();
    };
} ?>

<h1>ADMIN PANEL</h1>
<form action="index.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required value="<?= @$user ?>">
    <label for="password" name="password">Password</label>
    <input type="password" name="password" id="password" required>
    <input type="checkbox" id="show_password">
    <label for="show_password">Show password</label>
    <input class="button" type="submit" name="submit" value="Register">
    <p class="error_msg"><?= @$error_msg ?></p>
</form>

<?php

include "displayDB.php";

if (isset($_COOKIE["message"])) : ?>
    <div id="toast"><?= $_COOKIE["message"] ?></div>
<?php endif; ?>

<script src="toast.js"></script>
<script src="toggle_password.js"></script>
<link rel="stylesheet" href="style.css">