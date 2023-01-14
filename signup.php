<?php
if (!isset($_SESSION)){
    session_start();
}

// Error variable to store any error messages
$error = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email is valid
    if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error = "Valid E-mail is required!";
    }
    // Check if password is at least 8 characters
    elseif (strlen($_POST["password"]) < 8) {
        $error = "Password must be at least 8 characters!";
    }
    // Check if passwords match
    elseif ($_POST["password"] !== $_POST["password2"]) {
        $error = "Passwords must match!";
    }
    // If all validation checks pass, include the success page
    else{
        // assign the form values to variables and format correctly for the db
        $first_name = ucfirst(strtolower($_POST["fname"]));
        $last_name = ucfirst(strtolower($_POST["lname"]));
        $email = strtolower($_POST["email"]);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        // check if the name cookie is set
        if (!isset($_COOKIE["name_cookie"])){
            // if not, set the cookie
            setcookie("name_cookie", $last_name, time() + 600);
        }else{
            // if set, update the cookie
            setcookie("name_cookie", $last_name, time() + 600);
        }
        // create a new mysqli object
        $db_obj = new mysqli('localhost', 'jimmy', 'password', 'test');
        // create the insert query
        $sql = "INSERT INTO `login` (`first_name`, `last_name`,`email`, `password`) VALUES (?,?,?,?);";
        // prepare the statement
        $stmt = $db_obj->prepare($sql);
        // bind the parameters
        $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
        // execute the statement
        $stmt->execute();
        // display welcome message
        $message = 'Congratulations, your account has been successfully created!';
        echo "<script>alert('$message')</script>";
        echo "<meta http-equiv='refresh' content='0; URL=http://localhost/index.php?site=login'>";
        die();
    }
}   
?>
<?php
    if (!empty($error)) {
    echo "<script>alert('$error')</script>";
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <style> <?php include "signup.css" ?> </style>
    
    <div class="center_signup1 container">
        <h1>CREATE AN ACCOUNT</h1>
        <form class="form-group" action="" method="POST">
                <div class ="row align-items-center g-3 text-center">
                    <div class="col-md-12">
                        <div class="btn-group" role="group" aria-label="radio toggle btn group">
                                <input type="radio" class="btn-check" name="btnradio" id="male" value="male" autocomplete="off" required>
                                <label class="btn btn-outline-primary" for="male">MALE</label>

                                <input type="radio" class="btn-check" name="btnradio" id="female" value="female" autocomplete="off" >
                                <label class="btn btn-outline-primary" for="female">FEMALE</label>

                                <input type="radio" class="btn-check" name="btnradio" id="rns" value="rns" autocomplete="off">
                                <label class="btn btn-outline-primary" for="rns">RATHER NOT SAY</label>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="FIRST NAME" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="LAST NAME" required>
                        </div>
                        <div class="col-md-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="SUPPORT@HILLTON.AT" required>
                        </div>
                        <div class="col-md-12">
                            <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD" required>
                        </div>
                        <div class="col-md-12">
                            <input type="password" name="password2" id="password2" class="form-control" placeholder="CONFIRM PASSWORD" required>
                        </div>
                        <div class="container mt-3 mb-3">
                        <input type="submit" id="submitButton" name="submitButton" class="btn btn-outline-light" value="SIGN UP"></input>
                        </div>
                </div> 
            </div>
            </form>
        </div>

</body>
</html>