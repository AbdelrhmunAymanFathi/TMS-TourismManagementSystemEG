<?php

include 'database.php'


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Search</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <input type="text" name="search" id="" placeholder="Search Data...">
            <button class="btn btn-dark btn-sm" name="submit">search</button>
            <div class="contianer my-5">
                <table class="table">
                    <?php
                if(isset($_POST['submit']))
                {
                    $search = $_POST['search'];

                    $sql = "Select * from `users` where id like '%$search%' 
                    or full_name like '%$search%'
                    or email like '%$search%'
                    ";
                    $result =mysqli_query($conn , $sql);
                    if($result)
                    {
                        if(mysqli_num_rows($result)>0)
                        {
                            echo '
                            <thead>
                                <tr>
                                    <th> Number_id </th>
                                        <th>Full Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            ';
                            while ($row = mysqli_fetch_assoc($result))
                            {

                            

                            echo '
                            <tbody>
                                <tr>
                                    
                                <td > <a href="searchData.php?data='.$row['id'].'"> '.$row['id'].' </a></td>
                                    <td>'.$row['full_name'].'</td>
                                    <td>'.$row['email'].'</td>
                                </tr>
                            </tbody>

                            ';}
                        }
                        else
                        {
                            echo '<h2 class="text-danger"> Data Not Found </h2>';
                        }
                    }
                }

                    ?>
                
                </table>
            </div>
        </form>
    </div>
</body>
</html>
