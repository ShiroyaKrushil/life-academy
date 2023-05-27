<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Custom -->
    <link rel="stylesheet" href="css/style.css">
    
<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="">
    <div class="header">
        <?php include('header.php');?>
    </div>
    <div class="main-containar">
        <div class="form-title">
            <h1>Sign Up</h1>
        </div>

        <div class="form2">
            <form action="#" method="post" onsubmit="return validation()">
                
                <label for="">Name</label>
                <input type="text" name="nm" id="nm" autofocus required>

                <label for="">Email</label>
                <input type="email" name="email" id="email" required>

                <label for="">Password</label>
                <input type="password" name="pass" id="pass" required>

                <label for="">Confirm Password</label>
                <input type="password" name="cpass" id="cpass" required>
                
                <div>
                    <input type="submit"  value="Sign Up" name="signup" id="" class="btn">
                </div>
               
                <div class="login-link">
                    <p>Alredy Have an Account?<a href="login.php">Login Now</a></P>
                </div>
            
            </form>

               
        </div>
    </div>

    
</body>
</html>

<?php

if(isset($_POST['signup']))
{
    $nm = $_POST['nm'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    
    include('connaction/connaction.php');
    $s = mysqli_query($con,"select Email from users where Email = '$email'");
        
        if($pass != $cpass)
        {
            echo"<script>";
            echo"alert('Both Password are Not match..')";
            echo"</script>";
        }
    
        else if(mysqli_num_rows($s) > 0)
        {
            echo"<script>";
            echo"alert('Email Id is Already Exist..')";
            echo"</script>";
        }

        else
        {
            include('connaction/connaction.php');
            mysqli_query($con,"insert into users (Name,Email,Password,Cpassword) values('$nm','$email','$pass','$cpass')");

            header('location:login.php');
        }

        
}

?>