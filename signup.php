<?php
include_once 'nav.php';
include_once 'includes/signupinclude.php';

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
    <style> <?php include "css/style.css" ?> </style>
    
    <div class="center_signup1 container">
        <h1>CREATE AN ACCOUNT</h1>
        <form class="form-group" action="includes\signupinclude.php" method="POST">
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
                    <?php
                        $error = "";

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
                            } else {
                            $error = 'Congratulations, your account has been successfully created!';
                            }
                        }
                            ?>
                            <?php
                                if (!empty($error)) {
                                echo "<script>alert('$error')</script>";
                                }
                            ?>
                </div> 
            </div>
            </form>
        </div>

</body>
</html>