<?php

    $id = $_GET['Id'];

    include('connect.php');
    mysqli_query($con,"delete from users where Id ='$id'");

    header('location:index.php');

?>