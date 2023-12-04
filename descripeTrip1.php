<?php
include 'database.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>trip 1</title>
</head>

<body>


    <!-- start nav -->
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
                        <a class="nav-link" href="index.php">Packages</a>
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
    <!-- end nav -->
    <?php
    $data = $_GET['data'];
    // echo $data;
    $sql = "select * from `travels` where id_Travel = $data ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo '


    <!-- start to fatech image for row 1 -->
    <section class="gallary1">
    <img src="' . $row['images'] . '" alt="pic1" style="width: 100%;  height: 443px;">
    </section>
    <!-- end to fatech image for row 1 -->

    <!-- start to get tittle for row 1 -->
    <section class="title1">
        <h1 class="title_trip">  ' . $row['Tour_Name'] . '</h1>
    </section>
    <!-- end to get tittle for row 1 -->
    <!-- start description row 1 -->
    <section class="desc1">
        <div class="form-title-wrap">
            <h2>Description</h2>
        </div>
        <div class="form-content contact-form-action">
        <p style="margin: 0;">' . $row['describtion'] . '</p>
        </div>
    </section>
    <!-- end description row 1 -->
    

    <!-- start table -->
    <div class="row contiannerTable" style="">
<div itemscope="" itemtype="http://schema.org/Table" class="luxor-tour-overview  wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_start_animation animated" id="details" style="
    width: 100%;
"> <h2 itemprop="about" style="
    font-weight: bold;
    font-size: larger;
" class="st-heading-section h2 ml-3"><span class="luxor-tour-icon"><img src="https://www.luxorandaswan.com/photos/icons/tour-details.svg" alt="Icon representing tour details"></span>Tour Details</h2> <table class="table" style="
    margin-bottom: 0px;
"> <tbody><tr style="
    background-color: #ffffff;
"> <td><span class="luxor-overview-icon"><img src="https://www.luxorandaswan.com/photos/icons/duration.svg" alt="Icon representing duration of the tour"></span><span>Duration</span></td> <td><p class="value">' . $row['duration'] . '</p></td> </tr> <tr> <td><span class="luxor-overview-icon"><img src="https://www.luxorandaswan.com/photos/icons/tour-location.svg" alt="Icon representing tour location"></span><span>Destinations</span></td> <td><p class="value">' . $row['destination'] . ' DAYS</p></td> </tr> <tr style="
    background-color: #ffffff;
"> <td><span class="luxor-overview-icon"><img src="https://www.luxorandaswan.com/photos/icons/availability.svg" alt="Icon indicating availability status"></span><span>'.$row['tour_Availability'].'</span></td> <td><p class="value">Every Day</p></td> </tr> <tr> <td><span class="luxor-overview-icon"><img src="https://www.luxorandaswan.com/photos/icons/pickup.svg" alt="Icon indicating pickup location"></span><span>Pickup Location</span></td> <td><p class="value">' . $row['Pickup_Location'] . '</p></td> </tr> <tr style="
    background-color: #ffffff;
"> <td><span class="luxor-overview-icon"><img src="https://www.luxorandaswan.com/photos/icons/tour-type.svg" alt="Icon representing tour type"></span><span>Tour Type</span></td> <td><p class="value">' . $row['tour_Type'] . '</p></td> </tr> </tbody></table></div>

</div>
<!-- end table -->



';
    }
    ?>





    <!-- include & notinclude start -->
    <div id="inclusions" class="form-box page-scroll">
        <div class="form-title-wrap">
            <h2 class="title">What's Included
            </h2>
        </div>
        <div class="form-content contact-form-action">
            <div class="collapse show" id="viewIncludedExample" style="">
                <div class="cruise-included-feature-wrap">
                    <div class="cruise-include-feature ">
                        <div class="single-tour-feature d-flex align-items-center mb-3">
                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3">
                                <i class="la la-check"></i>
                            </div>
                            <div class="single-feature-titles">
                                <h3 class="title font-size-15 font-weight-medium">Included</h3>
                            </div>
                        </div>
                        <ul class="list-items list-items-bullet">
                            <ul>
                                <li><i class="bi bi-caret-right-fill"></i>Accommodation in Luxor with breakfast at 5* Hotel with breakfast</li>
                            </ul>
                            <ul>
                                <li><i class="bi bi-caret-right-fill"></i>All transfers by private air-conditioned vehicle</li>
                            </ul>
                            <ul>
                                <li><i class="bi bi-caret-right-fill"></i>1 breakfast, 2 lunches</li>
                            </ul>
                            <ul>
                                <li><i class="bi bi-caret-right-fill"></i>Domestic flight ticket (Hurghada/Cairo - Cairo/ Luxor)</li>
                                <li><i class="bi bi-caret-right-fill"></i>Pick up services from your hotel in Hurghada and return</li>
                                <li><i class="bi bi-caret-right-fill"></i>Private English speaking guide throughout your tours</li>
                                <li><i class="bi bi-caret-right-fill"></i>Entrance fees to all the sights in Cairo and Luxor</li>
                                <li><i class="bi bi-caret-right-fill"></i>Transfer from Luxor to Hurghada by private vehicle</li>
                                <li><i class="bi bi-caret-right-fill"></i>Lunch at local restaurant during tour in Cairo &amp; Luxor</li>
                                <li><i class="bi bi-caret-right-fill"></i>Bottled water on board the vehicle</li>
                                <li><i class="bi bi-caret-right-fill"></i>Shopping tours through out Khan El Khalili bazaars</li>
                                <li><i class="bi bi-caret-right-fill"></i>All service charges &amp; taxes</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="cruise-include-feature pt-3">
                        <div class="single-tour-feature d-flex align-items-center mb-3">
                            <div class="single-feature-icon icon-element ml-0 flex-shrink-0 mr-3" style="
    color: red;
">
                                <i class="la la-close"></i>
                            </div>
                            <div class="single-feature-titles">
                                <h3 class="title font-size-15 font-weight-medium">Not Included</h3>
                            </div>
                        </div>
                        <ul class="list-items list-items-bullet">
                            <ul>
                                <li> <i class="bi bi-caret-right-fill"></i>Any Extras not mentioned in the itinerary</li>
                                <li> <i class="bi bi-caret-right-fill"></i>Tipping</li>
                                <li><i class="bi bi-caret-right-fill"></i>Optional activities</li>
                                <li><i class="bi bi-caret-right-fill"></i>Personal spending</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- include & notinclude end -->
















    <!-- static data -->

    
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