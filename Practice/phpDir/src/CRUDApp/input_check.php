<?php switch (false) {
    case strlen($user) >= 4:
        $error_msg = "Username must have at least 4 characters";
        break;
    case strlen($pwd) >= 8:
        $error_msg = "Password must have at least 8 characters";
        break;
    case preg_match("~[A-ZÅÄÖ]~", $pwd):
        $error_msg = "Password must contain an uppercase";
        break;
    case preg_match("~[a-zäåö]~", $pwd):
        $error_msg = "Password must contain a lowercase";
        break;
    case preg_match("~[1-9]~", $pwd):
        $error_msg = "Password must contain a number";
        break;
    default:
        $error_msg = "";
        //create the records in the database
        if ($stmt->execute()) {
            header("Location: " . $_SERVER["PHP_SELF"]);
            exit();
        } else die("Query insertion failed");
}
