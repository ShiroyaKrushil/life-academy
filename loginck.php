<?php session_start();

$email = $_POST['email'];
$pass  = $_POST['pass'];

include('connaction/connaction.php');

$s = mysqli_query($con,"select* from users where Email = '$email' and Password = '$pass'");

if($r = mysqli_fetch_array($s))
{
    $_SESSION['email'] = $email;
    
    header('location:admission.php');
}
else
{
    echo"<script>";
    echo"alert('Please enter valid email and password');";
    echo"</script>";

    header('location:login.php');
}
?>