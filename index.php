<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>

<?php

include('database.php');
$query = "select * from travels ORDER BY RAND() LIMIT 6;";
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
    <title>Tourism Management System</title>
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
                        <a class="nav-link" href="index.php">Home</a>
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





    <div class="home">
        <div class="content">
            <h5>Welcome To EGYPT</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>
                Tourism Management System Travel A Memorable Travel Experience
            </p>
            <a href="#book">Book Place</a>
        </div>
    </div>
    <!-----------------------------------Books------------------------>
    <section class="book" id="book">
        <div class="container">
            <div class="main-text">
                <h1>S<span>earch</span> F<span>or</span> T<span>rips</span></h1>
            </div>
            <div class="row">
                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 py-3 py-md-0">
                    <form action="packeges.php">
                        <input type="text" class="form-control" placeholder="Where To" method="post" name="search" required><br><br>
                        <!-- <input type="text" class="form-control" placeholder="How Many" ><br>
                        <input type="date" class="form-control" placeholder="Arrivals" ><br>
                        <input type="date" class="form-control" placeholder="Leaving" ><br>
                        <textarea rows="10" class="form-control" name="text" placeholder="Enter Your Name & Details"></textarea><br> -->
                        <a href="packeges.php?data = <?php echo $row['search']; ?>" type="submit" class="btn btn-primary"> Search For Trip</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------Packages---------------------------->

    <section class="packages" id="packages">
        <div class="main-text">
            <h1><span>P</span>ackages</h1>
        </div>
        <div class="container" style="    display: flex; flex-wrap: wrap;">
        <div class="row" style="margin-top:30px;">
            <!-- start -->
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
            ?>

            

                
                    <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                        <div class="card">
                            <img src="<?php echo $row['images']; ?>" alt="">
                            <div class="card-body">
                                <h3><?php echo $row['Tour_Name']; ?></h3>
                                <p><?php echo $row['mini_descripe']; ?></p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <h6>Price: <strong><?php echo $row['price']; ?> $</strong></h6>
                                <div class="packages-action">
                                    <a href="descripeTrip1.php?data=<?php echo $row['id_Travel']; ?> " class="btn btn-action">More Details </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php




            }



                ?>


                <!-- end -->

                </div>
        </div>
    </section>
    <!------------------------------Servicise--------------------------->
    <section class="services" id="services">
        <div class="container">
            <div class="main-text">
                <h1><span>S</span>ervices</h1>
            </div>
            <div class="row" style="margin-top:30px ;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-hotel"></i>
                        <div class="card-body">
                            <h3>Affordable Hotel</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-bullhorn"></i>
                        <div class="card-body">
                            <h3>Safty Guide</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-utensils"></i>
                        <div class="card-body">
                            <h3>Food & Drink</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-globe-asia"></i>
                        <div class="card-body">
                            <h3>Around The World</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-plane"></i>
                        <div class="card-body">
                            <h3>Fastest Travel</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, laudantium.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-hiking"></i>
                        <div class="card-body">
                            <h3> Adventures</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, laudantium.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="gallary" id="gallary">
        <div class="container">
            <div class="main-text">
                <a href="gallary.php" style="color:black; text-decoration:none;"><h1><span>G</span>allary</h1></a>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/360_F_561090988_fHHhcnYRBUeI2ddSoWuQKAhKBWMcDAI6.jpg" alt="" height="280px">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/1pyramids-1551361995.jpg" alt="p" height="280px">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/9913289da639195622b641d316ef69a3.jpg" alt="p" height="280px">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="main-text">
                <h1><span>About </span>Us</h1>
            </div>
            <div class="row" style="margin-top:50px ;">
                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/world.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 py-3 py-md-0">
                    <h2>How Travel Agancy Work</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia facilis hic totam temporibus ullam eos provident! Obcaecati, illo. Placeat dicta, perspiciatis repudiandae quae provident laborum aliquam? Mollitia, quia a. Nulla velit officia natus saepe iusto numquam, suscipit incidunt tenetur eius, distinctio voluptatem repellat eligendi sunt vel laboriosam deserunt placeat praesentium</p>
                    <button class="custom-btn btn-1">Read More</button>
                </div>
            </div>
        </div>
    </section>




    <!-- footer -->

    <div class="footer mt-5">

        <div class="row" id="box-container">

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

















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>