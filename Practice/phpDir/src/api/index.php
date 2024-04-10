<?php include_once 'DBConnect.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
// phpinfo();


$objectDB = new DBConnect();
$connection = $objectDB->connect();
// var_dump($connection);

// print_r(file_get_contents('php://input'));
// $user = file_get_contents('php://input');
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":
        $user = json_decode(file_get_contents('php://input'));
        $sql = "INSERT INTO users(name, email, phone, created_at, updated_at) VALUES(:name, :email, :phone, :created_at, :updated_at)";
        $stmt = $connection->prepare($sql);
        $created_at = date('Y-m-d');
        $updated_at = date('Y-m-d');
        $stmt->bindParam(':name', $user->name);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':phone', $user->phone);
        $stmt->bindParam(':created_at', $created_at);
        $stmt->bindParam(':updated_at', $updated_at);

        if ($stmt->execute()) {
            $res = ['status' => 1, 'message' => 'Record created successfully'];
        } else {
            $res = ['status' => 0, 'message' => 'Failed to create a record'];
        }
        echo json_encode($res);
        break;
}
