<?php
if (isset($_GET["id"])) :
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        include "db.php";

        $stmt = $conn->prepare("UPDATE users SET username=?, password=? WHERE id=?");
        $stmt->bind_param("ssi", $user, $pwd, $id);
        $user = htmlspecialchars($_POST["username"]);
        $pwd = htmlspecialchars($_POST["password"]);
        $id = htmlspecialchars($_POST["id"]);

        include "input_check.php";

        $stmt->close();
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
        <label for="username"> Username </label>
        <input type="text" name="username" value="<?= $user["username"] ?>" required><br>
        <label for="password"> Password </label>
        <input type="password" name="password" value="<?= $user["password"] ?>" required><br>
        <label for="id">User ID</label>
        <input type="number" name="id" value="<?= $user["id"] ?>" readonly><br>
        <input class="button" type="submit" name="submit" value="UPDATE">
        <p><?= @$error_msg ?></p>
        <input type="button" onclick="history.go(-1)" value="Back to index page">
    </form>
<?php

else : header("Location: index.php");
endif; ?>

<link rel="stylesheet" href="style.css">