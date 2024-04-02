<?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
    include "db.php";

    $stmt = $conn->prepare("UPDATE users SET username=?, password=? WHERE id=?");
    $stmt->bind_param("ssi", $user, $pwd, $id);
    $user = htmlspecialchars($_POST["username"]);
    $pwd = htmlspecialchars($_POST["password"]);
    $id = htmlspecialchars($_POST["id"]);

    include "input_check.php";

    $stmt->close();
    $conn->close();
} ?>

<form action="update.php" method="post">
    <label for="username"> Username </label>
    <input type="text" name="username" required><br>
    <label for="password"> Password </label>
    <input type="password" name="password" required><br>
    <select name="id" id="" required>
        <?php include "db.php";
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);

        while ($rows = mysqli_fetch_assoc($result)) : ?>
            <option value='<?= $rows['id'] ?>'>$id</option>
        <?php endwhile;

        $conn->close(); ?>
    </select>
    <input type="submit" name="submit" value="UPDATE">
    <p><?= @$error_msg ?></p>
</form>

<?php include "displayDB.php"; ?>

<a href="login.php">
    <button>Back to login page</button>
</a>