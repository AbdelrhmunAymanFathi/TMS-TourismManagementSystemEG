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
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="container2">
        
        <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($user)
                {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <form action="login.php" method="post">
        <div class="form-group">
        <h5>Email :</h5>
            <input type="email" placeholder="Enter Your Email" name="email" class="form-control">
        </div>
        <div class="form-group">
        <h5>Password :</h5>
            <input type="password" placeholder="Enter Your Password" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn text-light m-auto" style="background-color:#E6BE8A;border-radius: 30px;width: 100%; height: 64px;flex-shrink: 0;">
        </div>
        </form>
        <div><h6 class="colorLinkGr">Not registered yet <a href="registration.php" class="linkes">Register Here</a></h6></div>
    </div>
</body>
</html>