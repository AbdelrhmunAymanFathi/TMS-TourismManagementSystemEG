<?php
include 'database.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Display Search Data</title>
</head>

<body>
    <?php


    $data = $_GET['data'];
    // echo $data;
    $sql = "select * from `users` where id = $data ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo '
        <div class="contianer ">
            <div class="jumbotron">
                <h1 class="display-4 text-center text-success">'.$row['full_name'].'</h1>
                <p class="lead text-center text-danger">Your email id is :  '.$row['email'].' </p>
                    <hr class="my-4">
    
                <p class="lead">
                <a class="btn btn-primary btn-lg" href="search.php" role="button">Back</a>
                </p>
            </div>
        </div>
        
        ';
    }



    ?>

    
</body>

</html>