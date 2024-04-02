<?php include "db.php";

//if form sent, send to database, else print the form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $user = htmlspecialchars($_POST["username"]);
        $pwd = htmlspecialchars($_POST["password"]);

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
                $query = "INSERT INTO users (username, password) VALUES ('$user', '$pwd')";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    echo "Account successfully created!";
                } else {
                    die("Query insertation failed");
                }
        }
    };
};

?>

<form action="login.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" required value="<?= @$user ?>"><br>
    <label for="password" name="password">Password</label>
    <input type="password" name="password" required><br>
    <input type="submit" name="submit" value="Submit">
    <p><?= @$error_msg ?></p>
</form>

<?php

include "displayDB.php"; ?>

<a href="update.php">
    <button>Update database</button>
</a>
<a href="delete.php">
    <button>Delete user</button>
</a>