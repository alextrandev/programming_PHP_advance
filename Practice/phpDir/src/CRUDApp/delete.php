<?php
include "db.php";

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if ($result) :

    if (isset($_GET["id"])) {
        $id = $_GET["id"] ?? 0;
        $query = "DELETE FROM users WHERE id=$id";
        $result = mysqli_query($conn, $query);

        if ($result) : ?>
            <h1>Account deleted</h1>
        <?php else :
            die("Query failed");
        endif;
    } else { ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th></th>
            </tr>

            <?php while ($rows = mysqli_fetch_assoc($result)) : ?>

                <tr>
                    <?php foreach ($rows as $row) : ?>
                        <td><?= $row ?></td>
                    <?php endforeach; ?>
                    <td><a href="delete.php?id=<?= $rows["id"] ?>"><button>DELETE</button></a></td>
                </tr>

            <?php endwhile; ?>

        </table>
<?php };

else :

    die("Query insertation failed");

endif; ?>

<a href="login.php">
    <button>Back to login page</button>
</a>