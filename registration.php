<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="p-0">
<!-- <div class="container0" >
    <img src="./imgs/takethree.jpg" alt="" class="imgBack"> 
</div> -->
    <div class="container1">
        <?php
        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
            
            if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat))
            {
                array_push($errors,"All fields are required");
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                array_push($errors, "Email is not valid");
            }

            if (strlen($password) < 8) 
            {
                array_push($errors,"Password must be at least 8 charactes long");
            }

            if ($password!==$passwordRepeat) 
            {
                array_push($errors,"Password does not match");
            }
            
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) 
            {
                array_push($errors,"Email already exists!");
            }
            if (count($errors)>0) 
            {
                foreach ($errors as  $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }else{
                
                $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                }else{
                    die("Something went wrong");
                }
            }
            

        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <h5>Full Name :</h5>
                <input type="text" class="form-control" name="fullname" placeholder="Enter Your Full Name">
            </div>
            <div class="form-group">
                <h5>Email :</h5>
                <input type="emamil" class="form-control" name="email" placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <h5>Password :</h5>
                <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
            </div>
            <div class="form-group">
                <h5>Repeat Password :</h5>
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Your Password">
            </div>
            <div class="form-btn">

                <input type="submit" class="btn text-light m-auto"
                    style="background-color:#E6BE8A;border-radius: 30px;width: 100%; height: 64px;flex-shrink: 0;"
                    value="Register" name="submit">
            </div>
        </form>
        <div>
            <div>
                <h6 class="colorLinkGr">Already have an account? <a href="login.php" class="linkes">Login Here</a></h6>
            </div>
        </div>
    </div>
</body>

</html>