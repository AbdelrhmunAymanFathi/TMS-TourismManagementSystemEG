<?php
include 'database.php';
?>

<?php

include('database.php');
$query = "select * from travels ";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Roboto:wght@500&family=Saira:wght@700&display=swap" rel="stylesheet">
    <title>Gallary</title>
</head>
<body>
<nav class="navbar navbar-expand-sm" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html" id="logo"><span>T</span>ravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span><i class=" fa-solid fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#book">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallary">Gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>

                <li class="ms-5">
                    <div class="dropdown">
                        <button class="dropdown-btn" aria-haspopup="menu">
                        <a href="logout.php" class="btn me-5" style="background-color: red; color:#fff;">Logout</a>
                            <span class="arrow"></span>
                        </button>
                        
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="gallary" id="gallary">
        <div class="container">
            <div class="main-text">
            <h1><span>G</span>allary</h1>
                </div>
                <div class="row" style="margin-top: 30px;">
    <?php

            while ($row = mysqli_fetch_assoc($result)) {
            ?>

            

                    <div class="col-md-4 py-3 py-md-0 mt-3">
                    <div class="card">
                        <img src="<?php echo $row['images']; ?>" alt="" height="280px">
                    </div>
                </div>

                <?php




            }



                ?>



        
                
            
                </div>
            </div>
        </div>

    </section>

<!-- footer -->

<div class="footer mt-5">

<div class="row " id="box-container">

    <div class="col-lg-3 col-md-6 col-sm-6" id="box">
        <h3>links</h3>
        <a href="index.php">home</a>
        <a href="index.php">about</a>
        <a href="index.php">packages</a>
                
        <a href="#gallary">gallary</a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6" id="box">
        <h3>locations</h3>
        <a href="#">egypt</a>
        <a href="#">usa</a>
        <a href="#">Italy</a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6" id="social-links">
        <h1><span>T</span>ravel</h1>

        <i id="tw" class="fa-brands fa-twitter"></i>
        <i id="fa" class="fa-brands fa-facebook"></i>
        <i id="inst" class="fa-brands fa-instagram"></i>
        <i id="yo" class="fa-brands fa-youtube"></i>
    </div>

</div>

<div class="credit">
    <p>Copyright &copy; 2023 All rights reserved | made by </p>
    <h6>Abdelrhman Ayman</h6>
</div>
</div>

</body>
</html>