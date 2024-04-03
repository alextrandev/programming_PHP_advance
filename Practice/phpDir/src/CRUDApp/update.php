<?php
if (isset($_GET["id"])) :
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        include "db.php";

        $updateStmt = $conn->prepare("UPDATE users SET username=?, password=? WHERE id=?");
        $updateStmt->bind_param("ssi", $user, $pwd, $id);
        $user = htmlspecialchars($_POST["username"]);
        $pwd = htmlspecialchars($_POST["password"]);
        $id = htmlspecialchars($_POST["id"]);

        include "input_check.php";

        $updateStmt->close();
        $conn->close();
    }

    include "db.php";

    $id = htmlspecialchars($_GET["id"]);
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["id"] == $_GET["id"]) {
            $user = $row;
        }
    }

    $conn->close(); ?>

    <h1>Update user <?= $user["id"] . ": " . $user["username"]  ?></h1>
    <form action="update.php?id=<?= $user["id"] ?>" method="post">
        <label for="id">User ID</label>
        <input type="number" name="id" value="<?= $user["id"] ?>" readonly>
        <label for="username"> Username </label>
        <input type="text" name="username" id="username" value="<?= $user["username"] ?>" required>
        <label for="password"> Password </label>
        <input type="password" name="password" id="password" value="<?= $user["password"] ?>" required>
        <input type="checkbox" id="show_password">
        <label for="show_password">Show password</label>
        <input class="button" type="submit" name="submit" value="UPDATE">
        <p class="error_msg"><?= @$error_msg ?></p>
        <input type="button" onclick="history.go(-1)" value="Back to index page">
    </form>
<?php

else : header("Location: index.php");
endif; ?>

<link rel="stylesheet" href="style.css">
<script src="toggle_password.js"></script>