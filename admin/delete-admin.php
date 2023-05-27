<?php

$id = $_GET['Id'];

include('connect.php');
mysqli_query($con,"delete from admin where Id ='$id'");

header('location:add-admin.php');

?>