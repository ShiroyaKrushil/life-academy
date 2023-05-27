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
$s = mysqli_query($con,"select* from contact ");

while($r = mysqli_fetch_assoc($s))
{?>
    <tr>
        <td><?php echo $r['Id'];?></td>
        <td><?php echo $r['Name'];?></td>
        <td><?php echo $r['Email'];?></td>
        <td><?php echo $r['Contact'];?></td>
        <td><?php echo $r['Message'];?></td>
        <td><a href="delete-contact.php?Id=<?php echo $r['Id'];?>" ><img src="icons/delete.png" alt=""></a></td>
    </tr>
<?php
}
?>


