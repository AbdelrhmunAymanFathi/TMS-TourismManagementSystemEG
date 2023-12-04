<?php

include('database.php');
$query = "select * from travels";
$result = mysqli_query($conn , $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Roboto:wght@500&family=Saira:wght@700&display=swap" rel="stylesheet">
    <title>Fatech data from database</title>
</head>
<body class="bg-dark">
    <div class="container">
    <div class="row mt-5" style="width: 500%;">
        <div class="col">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center"> Fatech Data from DB in PHP</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td>id_Travel</td>
                            <td>Tour_Name</td>
                            <td>describtion</td>
                            <td>price</td>
                            <td>duration</td>
                            <td>tour_Availability</td>
                            <td>tour_Type</td>
                            <td>Pickup_Location</td>
                            <td>images </td>
                            <td>include </td>
                            <td>not_include </td>
                            <td>childeren_Policiy</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>

                        <tr >

                        <?php
                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>
                        <td><?php echo $row['id_Travel']; ?></td>
                        <td> <?php echo $row['Tour_Name']; ?></td>
                        <td> <?php echo $row['describtion']; ?></td>
                        <td> <?php echo $row['price']; ?></td>
                        <td> <?php echo $row['duration']; ?></td>
                        <td> <?php echo $row['tour_Availability']; ?></td>
                        <td> <?php echo $row['tour_Type']; ?></td>
                        <td> <?php echo $row['Pickup_Location']; ?></td>
                        <td> <img src="<?php echo $row['images']; ?>" alt="background image" ></td>
                        <td> <?php echo $row['include']; ?></td>
                        <td> <?php echo $row['not_include']; ?></td>
                        <td> <?php echo $row['childeren_Policiy']; ?></td>
                        <td>   <a href="#" class="btn btn-primary">Edit </a> </td>
                        <td>   <a href="#" class="btn btn-danger">Delete </a> </td>


                        </tr>
                        <?php
                    }
                    
        
                    
                    ?>
                <!-- row of data -->
                        <?php
                        $sql = "SELECT id_Travel, Tour_Name, Tour_Name FROM travels where id_Travel='19'";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                          // output data of each row
                            while($row = $result->fetch_assoc()) {
                            echo "id_Travel: " . $row["id_Travel"]. " - Tour_Name: " . $row["Tour_Name"]. " " . $row["Tour_Name"]. "<br>";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>

                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>