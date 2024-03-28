<?php
$host = "db";
$dbName = "loginapp";
$dbUser = "root";
$dbPwd = "lionPass";

//check mysql connection status
$conn = new mysqli($host, $dbUser, $dbPwd, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
