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
    <div class="center_signup">
        <h1>CREATE AN ACCOUNT</h1>
        <form method="POST">
                <div class ="row align-items-center g-3 ">
                    <div class="col-md-12">
                        <div class="btn-group" role="group" aria-label="radio toggle btn group">
                                <input type="radio" class="btn-check" name="btnradio" id="male" autocomplete="off" >
                                <label class="btn btn-outline-primary" for="male">MALE</label>

                                <input type="radio" class="btn-check" name="btnradio" id="female" autocomplete="off" >
                                <label class="btn btn-outline-primary" for="female">FEMALE</label>

                                <input type="radio" class="btn-check" name="btnradio" id="rns" autocomplete="off">
                                <label class="btn btn-outline-primary" for="rns">RATHER NOT SAY</label>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="FIRST NAME" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="LAST NAME" required>
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="SUPPORT@HILLTON.AT" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="USERNAME" required>
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="PASSWORD" required>
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="CONFIRM PASSWORD" required>
                        </div>
                        <div class="container mt-3">
                        <button type="button" class="btn btn-outline-primary">Submit</button>
                        </div>
                </div> 
            </div>
            </form>
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>