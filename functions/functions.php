<?php 

function emptyInSignUp($name, $email, $username, $pwd, $pwdRepeat) {
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUserId($username) {
    $result;
    if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}

function passwordMismatch($pwd, $pwdRepeat) {
    $result;
    if($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function useridTaken($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = $conn->prepare($sql);

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    $stmt->bind_param("ssss", $name, $email, $username, $hashedPwd);
    $stmt->execute();
    header("location: ../account/login.php?error=none");
    exit();    
}

function emptyInputLogin($username, $pwd) {
    $result;
    if(empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function loginUser($conn, $username, $pwd) {
    $user = uidExists($conn, $username, $username);
    
    if($user === false) {
        header("location: ../account/login.php?error=wrongLogin");
        exit();
    }

    $pwdHashed = $user['usersPwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);
    if($checkPwd === false) {
        header("location: ../account/login.php?error=wrongLogin");
        exit();
        
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["username"] = $user["usersName"];
        $_SESSION["userEmail"] = $user["usersEmail"];
        $_SESSION["userid"] = $user["usersId"];
        $_SESSION["useruid"] = $user["usersUid"];
        header("location: ../index.php");
        exit();
    }
}

function deleteAccount($conn) {
    session_start();
    $sql = "DELETE FROM users WHERE usersUid = ?";

    $stmt = $conn->prepare($sql);
    $uid = $_SESSION["useruid"];
    $stmt->bind_param("s", $uid);
    $stmt->execute();

    header("location: logout.func.php");
}

function emptyInputEdit($name, $email) {
    $result;
    if(empty($name) || empty($email)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function editProfile($conn, $name, $email) {
    session_start();
    $sql = "UPDATE users 
            SET usersName = ?, usersEmail = ?
            WHERE usersUid = ?";

$stmt = $conn->prepare($sql);
    $uid = $_SESSION["useruid"];
    $_SESSION["username"] = $name;
    $_SESSION["userEmail"] = $email;
    $stmt->bind_param("sss", $name, $email, $uid);

    $stmt.execute();
    header("location: ../account/profile.php");

    }
?>