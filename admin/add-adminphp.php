<?php

$email = $_SESSION['email'];

if($email  == true)
{

}

else
{
	header('location:login.php');
}

$email = $_POST['email'];
$pass = $_POST['pass'];

if(isset($_POST['submit']))
{
    
    include('connect.php');
    $s = mysqli_query($con,"select Email from admin where Email = '$email'");

    if(mysqli_num_rows($s) > 0)
    {   
         echo"<p> User Id is Already Exist....</p>";
         header('location:add-new-admin.php');
    }

    else
    {
        mysqli_query($con,"insert into admin(Email,pass) values('$email','$pass')");

        header('location:add-admin.php');
    }
}


?>
