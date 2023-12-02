<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
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
                        <i class="fa-solid fa-gear fa-spin" style="color: orange;"></i>
                            <span class="arrow"></span>
                        </button>
                        <ul class="dropdown-content" role="menu">
                        <a href="logout.php" class="btn me-5" style="background-color: red; color:#fff;">Logout</a>
                        </ul>
                    </div>
                </li>
            </div>
        </div>
    </nav>





    <div class="home">
        <div class="content">
            <h5>Welcome To World</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur.</p>
            <a href="#book">Book Place</a>
        </div>
    </div>
    <!-----------------------------------Books------------------------>
    <section class="book" id="book">
        <div class="container">
            <div class="main-text">
                <h1>B<span>ook</span></h1>
            </div>
            <div class="row">
                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 py-3 py-md-0">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Where To" required><br>
                        <input type="text" class="form-control" placeholder="How Many" required><br>
                        <input type="date" class="form-control" placeholder="Arrivals" required><br>
                        <input type="date" class="form-control" placeholder="Leaving" required><br>
                        <textarea rows="10" class="form-control" name="text" placeholder="Enter Your Name & Details"></textarea><br>
                        <button type="submit" class="btn btn-primary"> Book Now</button>
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
        <div class="container">
            <div class="row" style="margin-top:30px;">
                <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/Eg.jpg" alt="">
                        <div class="card-body">
                            <h3>Egypt</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>Price: <strong>$250</strong></h6>
                            <button type="submit" class="btn btn-primary"> Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/Dubai.jpg" alt="">
                        <div class="card-body">
                            <h3>The United Arab Emirates</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <button type="submit" class="btn btn-primary"> Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/Russia.jpg" alt="">
                        <div class="card-body">
                            <h3>Russia</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <button type="submit" class="btn btn-primary"> Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/KSA.jpg" alt="">
                        <div class="card-body">
                            <h3>Kingdom of Saudi Aradia</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h6>Price: <strong>$350</strong></h6>
                            <button type="submit" class="btn btn-primary"> Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/Italy.jpg" alt="">
                        <div class="card-body">
                            <h3>Italy</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h6>Price: <strong>$450</strong></h6>
                            <button type="submit" class="btn btn-primary"> Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/United Kingdom.jpg" alt="">
                        <div class="card-body">
                            <h3>The United Arab Emirates</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <button type="submit" class="btn btn-primary"> Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/USA.jpg" alt="">
                        <div class="card-body">
                            <h3>United States of America</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <button type="submit" class="btn btn-primary"> Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/Garmany.jpg" alt="">
                        <div class="card-body">
                            <h3>Germany</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <button type="submit" class="btn btn-primary"> Book Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/parise.jpg" alt="">
                        <div class="card-body">
                            <h3>France</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h6>Price: <strong>$400</strong></h6>
                            <button type="submit" id="book" class="btn btn-primary"> Book Now</button>
                        </div>
                    </div>
                </div>
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
                <h1><span>G</span>allary</h1>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/B.jpg" alt="" height="280px">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/pexels-kai-pilger-1734907.jpg" alt="p">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./images/pexels-michał-ludwiczak-1239162.jpg" alt="p">
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

    <div class="footer">

        <div class="row" id="box-container">

            <div class="col-lg-3 col-md-6 col-sm-6" id="box">
                <h3>links</h3>
                <a href="#home">home</a>
                <a href="#book">about</a>
                <a href="#packeges">packages</a>
                <a href="#services">products</a>
                <a href="#gallary">team</a>
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