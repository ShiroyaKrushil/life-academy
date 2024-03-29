<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studentslist</title>

<!-- custom -->
<link rel="stylesheet" href="css/style.css">

<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div class="main">
        <div class="header">
            <?php include('header.php');?>
        </div>

        <div class="student">
            <div class="student-title">
                <h1>Students List</h1>
            </div>

            <div class="student-information">
                <?php include('view_stud.php');?>
            </div>    

        <div class="footer">
            <?php include('footer.php');?>     
        </div>
    </div>    
</body>
</html>