<?php

function makeUser($conn, $first_name, $last_name, $email, $password){    // create the insert query
    $sql = "INSERT INTO login (first_name, last_name, email, password) VALUES (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if (!$stmt || !mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
}
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss", $first_name, $last_name, $email, $password);
    if (mysqli_stmt_execute($stmt)) {
        header("location: ../signup.php?error=none");
    } else {
        header("location: ../signup.php?error=sqlfailed");
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    exit();
        
}

function checkuser($conn, $email){
    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT * FROM login WHERE email = ?";

    if (!$stmt->prepare($sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    return ($row = mysqli_fetch_assoc($result)) ? $row : false;
    mysqli_stmt_close($stmt);

}

function userlogin($conn, $email, $password){

    $checkuser = checkuser($conn, $email);

    if(!checkuser($conn, $email)){
        $message = 'User does no exist!';
        echo "<script>alert('$message')</script>";
        exit();
    }
    $passwordHashed = $checkuser["password"];
    if (password_verify($password, $passwordHashed)){
        //start session
        $_SESSION["email"] = $checkuser["email"];
        $_SESSION['logged_in'] = true;
        $message = 'Welcome!';
        echo "<script>alert('$message')</script>";
        header("Location: ../account.php");
        //redirect to account page
        exit();
    }else{
        $message = 'User does no exist!';
        echo "<script>alert('$message')</script>";
        exit();
    }
}  