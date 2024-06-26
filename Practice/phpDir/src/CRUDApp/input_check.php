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
        //create the records in the database
        if (isset($insertStmt)) {
            $insertStmt->execute()
                ? setcookie("message", "Successfully registered", time() + 10)
                : setcookie("message", "Failed to register, try again!", time() + 10);
        } elseif (isset($updateStmt)) {
            $updateStmt->execute()
                ? setcookie("message", "Successfully updated", time() + 10)
                :   setcookie("message", "Failed to register, try again!", time() + 10);
        }
        header("Location: index.php");
        exit();
}

setcookie("message", $error_msg, time() + 10);
