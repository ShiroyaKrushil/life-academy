<?php

$email = $_SESSION['email'];

if($email  == true)
{

}

else
{
	header('location:login.php');
}


if(isset($_POST['search']))
{
$name = $_POST['name'];

include('connect.php');
$s = mysqli_query($con,"select* from students where Id like '%$name%' or  Student_Name like '%$name%' or Father_Name like '%$name%' or Email like '%$name%' or Contact like '%$name%' or Address like '%$name%' or Class like '%$name%' or Date_Of_Birth like '%$name%' or  Gendar like'%$name%' or  Blood_Group like '%$name%'");

while ($r = mysqli_fetch_array($s))
{

?>	

		<tr>
			<td class="td"> <?php echo $r['Id']?>              </td>
			<td class="td"><img src="..//<?php echo $r['Images']?>" height='200' width='200'/></td>
			<td class="td"> <?php echo $r['Student_Name']?>    </td>
			<td class="td"> <?php echo $r['Father_Name']?>     </td>
			<td class="td"> <?php echo $r['Email']?>		   </td>
			<td class="td"> <?php echo $r['Contact']?>         </td>
			<td class="td"> <?php echo $r['Address']?>         </td>
			<td class="td"> <?php echo $r['Class']?>           </td>
			<td class="td"> <?php echo $r['Date_Of_Birth']?>   </td>
			<td class="td"> <?php echo $r['Gendar']?>          </td>
			<td class="td"> <?php echo $r['Blood_Group']?>     </td>
			<td class="td"><a href="update-std.php?Id=<?php echo $r['Id']; ?> " ><img src="icons/edit.png" alt=""></a></td>
			<td class="td"><a href="delete-students.php?Id=<?php echo $r['Id']; ?> " ><img src="icons/delete.png" alt=""></a></td>
		</tr>

<?php
}
}

?>
