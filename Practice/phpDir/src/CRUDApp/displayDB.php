<?php include "db.php";
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if ($result) : ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>
                <span>Password</span>
                <i id="eye_icon" class="fa-regular fa-eye-slash"></i>
            </th>
            <th>Modify</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["username"] ?></td>
                <td class="password_td hidden"><?= $row["password"] ?></td>
                <td>
                    <button class="button" onclick="window.location.href='delete.php?id=<?= $row['id'] ?>'">Delete</button>
                    <button class="button" onclick="window.location.href='update.php?id=<?= $row['id'] ?>'">Update</button>
                </td>
            </tr>
            </tr>
        <?php endwhile; ?>
    </table>
<?php
    $conn->close();

else : die("Query insertation failed");

endif; ?>