<?php
include "db.php";

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if ($result) :

    if (isset($_GET["id"])) { ?>


    <?php } else { ?>
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