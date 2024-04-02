<?php include "db.php";
//execute the deletion if the form is sent, else send the form
if (isset($_GET["id"])) :
    $id = htmlspecialchars($_GET["id"]) ?? 0;
    $query = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    } else die("Query insertion failed");

else : ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th></th>
        </tr>
        <?php
        $query = "SELECT * FROM users";
        $result = mysqli_query($conn, $query);

        while ($rows = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <?php foreach ($rows as $row) : ?>
                    <td><?= $row ?></td>
                <?php endforeach; ?>
                <td><a href="delete.php?id=<?= $rows["id"] ?>"><button>DELETE</button></a></td>
            </tr>
        <?php endwhile; ?>
    </table>
<?php

endif;
$conn->close(); ?>

<a href="login.php">
    <button>Back to login page</button>
</a>