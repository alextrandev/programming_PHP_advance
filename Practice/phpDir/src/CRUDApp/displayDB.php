<?php include "db.php";
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if ($result) : ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>

        <?php while ($rows = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <?php foreach ($rows as $row) : ?>
                    <td><?= $row ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endwhile; ?>
    </table>
<?php
    $conn->close();

else : die("Query insertation failed");

endif; ?>