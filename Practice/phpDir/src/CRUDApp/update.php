<?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include "db.php";

    $stmt = $conn->prepare("UPDATE users SET username=?, password=? WHERE id=?");
    $stmt->bind_param("ssi", $user, $pwd, $id);
    $user = htmlspecialchars($_POST["username"]);
    $pwd = htmlspecialchars($_POST["password"]);
    $id = htmlspecialchars($_POST["id"]);

    switch (false) {
        case strlen($user) >= 4:
            $error_msg = "Username must have at least 4 characters";
            break;
        case strlen($pwd) >= 8:
            $error_msg = "Password must have at least 8 characters";
            break;
        case preg_match("~[A-ZÅÄÖ]~", $pwd):
            $error_msg = "Password must contain an uppercase";
            break;
        case preg_match("~[a-zäåö]~", $pwd):
            $error_msg = "Password must contain a lowercase";
            break;
        case preg_match("~[1-9]~", $pwd):
            $error_msg = "Password must contain a number";
            break;
        default:
            $error_msg = "";
            //create the records in the database
            if ($stmt->execute()) {
                header("Location: " . $_SERVER["PHP_SELF"]);
                exit();
            } else die("Query insertion failed");
    }

    $stmt->close();
    $conn->close();
}
?>

<form action="update.php" method="post">
    <label for="username"> Username </label>
    <input type="text" name="username" required><br>
    <label for="password"> Password </label>
    <input type="password" name="password" required><br>
    <select name="id" id="" required>
        <?php
        include "db.php";
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);
        while ($rows = mysqli_fetch_assoc($result)) {
            $id = $rows['id'];
            echo "<option value='$id'>$id</option>";
        };
        $conn->close();
        ?>
    </select>
    <input type="submit" name="submit" value="UPDATE">
    <p><?= @$error_msg ?></p>
</form>

<?php include "displayDB.php"; ?>

<a href="login.php">
    <button>Back to login page</button>
</a>