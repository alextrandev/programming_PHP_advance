<?php
include "displayDB.php";
include "db.php";

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if ($_SERVER["REQUEST_METHOD"] === "POST") :

    $name = $_POST["username"];
    $pwd = $_POST["password"];
    $id = $_POST["id"];
    $query = "UPDATE users SET username='$name', password='$pwd' WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo <<<HTML
            <h1>Update successfully</h1>
            <a href="login.php">
                <button>Back to login page</button>
            </a>
            HTML;
    } else {
        die("Query failed");
    }

else : ?>

    <form action="update.php" method="post">
        <label for="username"> Username </label>
        <input type="text" name="username" required><br>
        <label for="password"> Password </label>
        <input type="password" name="password" required><br>
        <select name="id" id="" required>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
                $id = $rows['id'];
                echo "<option value='$id'>$id</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="UPDATE">
    </form>
    <a href="login.php">
        <button>Back to login page</button>
    </a>

<?php endif;

$conn->close();
