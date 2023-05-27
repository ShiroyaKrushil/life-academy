<?php

$id = $_GET['Id'];

include('connect.php');
mysqli_query($con,"delete from contact where Id ='$id'");

header('location:contact.php');


?>