<?php include "db.php";

//if form sent, send to database, else print the form
if ($_SERVER["REQUEST_METHOD"] === "POST") :

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $user = htmlspecialchars($_POST["username"]);
        $pwd = htmlspecialchars($_POST["password"]);

        //create the records in the database
        $query = "INSERT INTO users (username, password) VALUES ('$user', '$pwd')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Account successfully created!";
        } else {
            die("Query insertation failed");
        }
    };

else : ?>

    <form action="login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>
        <label for="password" name="password">Password</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>

<?php endif;

include "displayDB.php"; ?>

<a href="update.php">
    <button>Update database</button>
</a>
<a href="delete.php">
    <button>Delete user</button>
</a>