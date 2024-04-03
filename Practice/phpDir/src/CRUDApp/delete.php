<?php if (isset($_GET["id"])) :

    include "db.php";
    $id = htmlspecialchars($_GET["id"]) ?? 0;
    $query = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: login.php");
        exit();
    } else die("Query insertion failed");

else :

    header("Location: login.php");
    exit();

endif;
