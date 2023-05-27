<?php

$id = $_GET['Id'];

include('connect.php');
mysqli_query($con,"delete from students where Id ='$id'");

header('location:students.php');


?>