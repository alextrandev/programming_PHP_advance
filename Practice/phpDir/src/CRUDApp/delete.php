<?php if (isset($_GET["id"]) && !isset($_GET["confirm"])) :

    include "db.php";
    $id = htmlspecialchars($_GET["id"]);
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
?>
    <h1>Delete user <?= $user["id"] . ": " . $user["username"]  ?></h1>
    <form action="delete.php?id=<?= $user["id"] ?>&confirm=1" method="post">
        <label for="username"> Username </label>
        <input type="text" name="username" value="<?= $user["username"] ?>" readonly><br>
        <label for="password"> Password </label>
        <input type="password" name="password" value="<?= $user["password"] ?>" readonly><br>
        <label for="id">User ID</label>
        <input type="number" name="id" value="<?= $user["id"] ?>" readonly><br>
        <input onclick="location.href='delete.php?id=<?= $user['id'] ?>&confirm=1'" class=" button" type="submit" value="DELETE">
        <input type="button" onclick="history.go(-1)" value="Back to index page">
    </form>
<?php

elseif (isset($_GET["confirm"])) :

    include "db.php";
    $id = htmlspecialchars($_GET["id"]) ?? 0;
    $query = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        setcookie("message", "Account successfully deleted", time() + 10);
        header("Location: index.php");
        exit();
    } else die("Query insertion failed");

else :

    header("Location: index.php");
    exit();

endif;
$conn->close();

?>

<link rel="stylesheet" href="style.css">