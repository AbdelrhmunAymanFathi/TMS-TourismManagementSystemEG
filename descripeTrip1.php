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
    
    <section class="detailshome">
    <img src="' . $row['images'] . '" alt="">
    </section>
    <!-- end to fatech image for row 1 -->

    <!-- start to get tittle for row 1 -->
    <section class="title1">
        <h1 class="title_trip">  ' . $row['Tour_Name'] . '</h1>
    </section>
    <!-- end to get tittle for row 1 -->

    <!-- start description row 1 -->

    <section class="Details">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 formdetails">
        <div class="main-text css-text">
            <h1><span>D</span>escription</h1>
        </div>
        ' . $row['describtion'] . '
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 formdetails">
            <div class="main-text css-text">
            <h1><span>B</span>ooking Form</h1>
            <h3>Price : ' . $row['price'] . ' $</h3>
            </div>

            <form action="#">
            <input type="text" class="form-control"placeholder="How Many Person ?" required><br>
            <label> <h5> Start Travel Date </h5> </label>
            <input type="date" class="form-control"placeholder="Start Travel Date" required><br>
            
            <a class="btn btn-success" href="book.php">Book Now</a>
            </form>
        </div>
    </div>
    </section>

    <!-- end description row 1 -->
    

    <!-- start table -->
<!--------------------------------Table------------------------------>
<section class="Table" >
    <table class="table table-striped">
    <thead>
        <tr>
        <th>Tour Details</th>
    </thead>
    <tbody>
        <tr>
        <td> <i class="fa-solid fa-business-time"></i>  Duration</td>
        <td>' . $row['duration'] . ' DAYS</td>
        </tr>
        <tr>
        <td> <i class="fa-solid fa-plane"></i>  Destinations</td>
        <td>' . $row['destination'] . '</td>
        </tr>
        <tr>
        <td>  <i class="fa-regular fa-calendar-days"></i>  Tour Availability</td>
        <td>' . $row['tour_Availability'] . '</td>
        </tr>
        <tr>
        <td> <i class="fa-solid fa-location-dot"></i>  Pickup Location</td>
        <td>' . $row['Pickup_Location'] . '</td>
        </tr>
        <tr>
        <td>  <i class="fa-solid fa-text-width"></i>  Tour Type</td>
        <td>' . $row['tour_Type'] . '</td>
        </tr>
    </tbody>
    </table>
</div>
</section>
<!-- end table -->


<!-------------------------------included---------------------------------------->

    <table class="tableclude table-bordered table-sm">
        <thead style="background:#f5b975d6;">
        <tr>
            <th> <i class="fa-solid fa-check"></i>  Included</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>   <ul>
            <li> <pre> ' . $row['include'] . ' </pre></li>
            </ul></td>
        </tr>
        </tbody>
    </table>

    <table class="tableclude  table-bordered table-sm">
        <thead style="background:#f5b975d6;">
        <tr>
            <th> <i class="fa-regular fa-circle-xmark"></i>   Not Icluded</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>   <ul>
            <li> <pre> ' . $row['not_include'] . '  </pre></li>
            </ul></td>
        </tr>
        </tbody>
    </table>
        <!-- children policiy -->
    <table class="tableclude table-bordered table-sm">
    <thead style="background:#f5b975d6;">
    <tr>
        <th> <i class="fa-solid fa-triangle-exclamation"></i>  Childeren Policiy</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>   <ul>
        <li> <pre> ' . $row['childeren_Policiy'] . ' </pre></li>
        </ul></td>
    </tr>
    </tbody>
</table>
';
    }
    ?>
    <!-- static data -->
    <!------------------------------ footer --------------------------------------------->

    <div class="footer">

        <div class="row" id="box-container">

            <div class="col-lg-3 col-md-6 col-sm-6" id="box">
                <h3>links</h3>
                <a href="index.html#home">home</a>
                <a href="index.html#book">about</a>
                <a href="index.html#packeges">packages</a>
                <a href="index.html#services">services</a>
                <a href="index.html#gallary">gallery</a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" id="box">
                <h3>locations</h3>
                <a href="#">egypt</a>
                <a href="#">aswan</a>
                <a href="#">luxor</a>
                <a href="#">cairo</a>
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