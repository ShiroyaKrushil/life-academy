<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <?php include('header.php');?>


        <div class="title">
            <h1>Students List</h1>
        </div>

        <div class="total">
        <?php
            include('connect.php');
            $s = mysqli_query($con,"select Id from students order by Id");

            $r = mysqli_num_rows($s);

            echo "<p>Total Recodes : $r </p>";
        ?>
        </div>
        
        <div class="search">
            <form action="" method="post">
                <input type="search" name="name" id="">
                <input type="submit" value="search" name="search" id="">
            </form>
        </div>

        <div class="main-table">
            <table border="1px" class="table">
                <tr>
                    <th>Id</th>
                    <th>Images</th>
                    <th>Student Name</th>
                    <th>Father Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Date Of Birth</th>
                    <th>Gendar</th>
                    <th>Blood Group</th>
                    <th colspan="2">Oprations</th>
                </tr>

                <?php include('view-students.php');?>
            </table>
        </div>
        </div>
    </div>
</body>
</html>

