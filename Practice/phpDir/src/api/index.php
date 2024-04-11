<?php include_once 'DBConnect.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
// phpinfo();


$objectDB = new DBConnect();
$pdo = $objectDB->connect();
// var_dump($pdo);

// print_r(file_get_contents('php://input'));

$method = $_SERVER['REQUEST_METHOD'];
switch ($method):
    case "POST":
        $user = json_decode(file_get_contents('php://input'));
        $sql = "INSERT INTO users(name, email, phone, created_at, updated_at) VALUES(?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);

        // $paramArr = array($user->name, $user->email, $user->phone, date('Y-m-d'), date('Y-m-d'));
        // foreach ($paramArr as $key => $val) {
        //     $stmt->bindParam($key + 1, $paramArr[$key]);
        // }
        // if ($stmt->execute()) {
        //     $res = ['status' => 1, 'message' => 'Record created successfully'];
        // } else {
        //     $res = ['status' => 0, 'message' => 'Failed to create a record'];
        // }

        if ($stmt->execute([$user->name, $user->email, $user->phone, date('Y-m-d'), date('Y-m-d')])) {
            $res = ['status' => 1, 'message' => 'Record created successfully'];
        } else {
            $res = ['status' => 0, 'message' => 'Failed to create a record'];
        }

        echo json_encode($res);
        break;

    case "GET":
        $sql = "SELECT * from users";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //PDO::FETCH_COLUMN return first column as array, FETCH_GROUP group all row by first column
        //PDO::FETCH_GROUP | PDO::FETCH_COLUMN group by first column and value from second column
        //PDO::FETCH_BOTH return also table key as array key


        echo json_encode($users);
        break;
endswitch;
