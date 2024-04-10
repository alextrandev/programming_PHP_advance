<?php include_once 'DBConnect.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
// phpinfo();


$objectDB = new DBConnect();
$connection = $objectDB->connect();
// var_dump($connection);

// print_r(file_get_contents('php://input'));

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case "POST":
        $user = json_decode(file_get_contents('php://input'));
        $sql = "INSERT INTO users(name, email, phone, created_at, updated_at) VALUES(?,?,?,?,?)";
        $stmt = $connection->prepare($sql);
        $paramArr = array($user->name, $user->email, $user->phone, date('Y-m-d'), date('Y-m-d'));

        foreach ($paramArr as $key => $val) {
            $stmt->bindParam($key + 1, $paramArr[$key]);
        }

        if ($stmt->execute()) {
            $res = ['status' => 1, 'message' => 'Record created successfully'];
        } else {
            $res = ['status' => 0, 'message' => 'Failed to create a record'];
        }

        echo json_encode($res);
        break;
}
