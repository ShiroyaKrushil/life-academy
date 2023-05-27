<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panal</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
    <?php include('header.php');?>


        <div class="title">
            <h1>ADD ADMIN</h1>
        </div>

        <div class="total">
        <?php
            include('connect.php');
            $s = mysqli_query($con,"select Id from admin order by Id");

            $r = mysqli_num_rows($s);

            echo "<p>Total Admin : $r</p>";
        ?>
        </div>
        

        <div class="add-admin">
            <a href="add-new-admin.php">Add Admin</a>
        </div>
        
        <div class="main-table">
            <table border="1" class="table">
                <tr>
                    <th>Id</th>
                    <th>User Id</th>
                    <th>Password</th>
                    <th colspan="2">Opration</th>
                </tr>
                <?php include('view-admin.php');?>
            </table>
        </div>
        
    </div>
</body>
</html>