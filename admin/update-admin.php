<?php

$con = mysqli_connect("localhost","root","","life_academy");
$s = mysqli_query($con,"select* from admin");

    
$Id = $_GET['Id'];

if(isset($_POST['update']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if(empty($email && $pass))
    {
        echo"<script>";
        echo"alert('Please Enter User Id and Password')";
        echo"</script>";
    }

    else
    {
       
        include('connect.php');
        mysqli_query($con,"update admin set Email = '$email',pass = '$pass'  where Id ='$Id'");
        
    
        header('location:add-admin.php');
    }
	
    


}



?>