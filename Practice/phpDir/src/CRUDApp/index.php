<?php include "db.php";

//if form sent, send to database, else print the form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $user, $pwd);
        $user = htmlspecialchars($_POST["username"]);
        $pwd = htmlspecialchars($_POST["password"]);

        include "input_check.php";

        $stmt->close();
        $conn->close();
    };
} ?>

<form action="index.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" required value="<?= @$user ?>"><br>
    <label for="password" name="password">Password</label>
    <input type="password" name="password" required><br>
    <input type="submit" name="submit" value="Submit">
    <p><?= @$error_msg ?></p>
</form>

<?php

include "displayDB.php"; ?>