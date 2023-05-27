<?php session_start();


	$id = $_POST['email'];
	$p  = $_POST['pass'];

			

		
	include('connect.php');
	$s = mysqli_query($con,"select* from admin where Email='$id' and pass='$p'");

		
	
		if ($r = mysqli_fetch_array($s)) 
			{
				$_SESSION['email'] = $id;
				
				echo "<script> alert('Login successfully.....'); </script>";
				
				header("location:index.php");
			}

		else
			{

				echo "<script> alert('Invalide Email and Password...'); </script>";

				header('location:login.php');
			}
				

				
			

	?>