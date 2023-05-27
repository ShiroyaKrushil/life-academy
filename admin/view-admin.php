<?php

$email = $_SESSION['email'];

if($email  == true)
{

}

else
{
	header('location:login.php');
}



include('connect.php');
$s = mysqli_query($con,"select* from admin");

while($r = mysqli_fetch_assoc($s))
{?>
    <tr>
        <td><?php echo $r['Id'];?></td>
        <td><?php echo $r['Email'];?></td>
        <td><?php echo $r['pass']?></td>
        <td><a href="delete-admin.php?Id=<?php echo $r['Id'];?>" ><img src="icons/delete.png" alt=""></a></td>
        <td><a href="edit-admin.php?Id=<?php echo $r['Id'];?>" ><img src="icons/edit.png" alt=""></a></td>
    </tr>
<?php
}
?>




