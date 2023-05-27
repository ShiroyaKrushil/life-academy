<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>

<!-- custom -->
<link rel="stylesheet" href="css/form.css">

<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div class="main">
      
        <div class="admission-form">
            <div class="form-title">
                <h1>Student Admission Form</h1>
            </div>

<?php 

$Id = $_GET['Id'];
include('connect.php');
$s = mysqli_query($con,"select* from students where Id = '$Id'");

while($r = mysqli_fetch_assoc($s))
{?>

            <div class="form">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="c1">
                        <img src="<?php echo $r['Images']?>" alt="" style="width:100px; height:100px;position:absolute;top:6%;">
                        <label for="">Upload Photo</label>
                        <input type="file" name="upfile" id="" >
                        <p id="img"></p>
                    </div>
            
                    <div class="c3">
                        <label for="">Class</label>
                        <select name="class" id="">
                            <option value="React Js">React Js</option>
                            <option value="Angular Js">Angular Js</option>
                            <option value="Laravel">Laravel</option>
                        </select>
                        <p id="class"></p>
                    </div>
            
                    <div class="c2">
                        <label for="">Student Name</label>
                        <input type="text" name="sname" id="" value = "<?php echo $r['Student_Name']?>">
                        <p id="snm"></p>
                    </div>
            
                    <div class="c4">
                        <label for="">Date_Of_Birth</label>
                        <input type="date" name="date" value = "<?php echo $r['Date_Of_Birth']?>">
                        <p id="dob"></p>
                    </div>
            
                    <div class="c5">
                        <label for="">Father Name</label>
                        <input type="text" name="fname" id="" value = "<?php echo $r['Father_Name']?>">
                        <p id="fnm"></p>
                    </div>
            
                    <div class="c6">
                        <label for="">Gendar</label>
                        <select name="gendar" id="">
                            <option value="Male">Male</option>
                            <option value="Femail">Female</option>
                        </select>
                        <p id="gendar"></p>
                    </div>
            
                    <div class="c7">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" value = "<?php echo $r['Email']?>">
                        <p id="email"></p>
                    </div>
            
                    <div class="c8">
                        <label for="">Blood_Group</label>
                        <select name="bgroup" id="">
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <p id="bgroup"></p>
                    </div> 
            
                    <div class="c9">
                        <label for="">Contact</label>
                        <input type="number" name="contact" id="" value = "<?php echo $r['Contact']?>">
                        <p id="contact"></p>
                    </div>
            
                    <div class="c10"></div>
           
                    <div class="c11">
                        <label for="">Address</label>
                        <textarea name="address" id=""><?php echo $r['Address']?> </textarea>
                        <p id="address"></p>
                    </div>

                    
                </div>
                <div class="btn">
                    <input type="submit" value="Submit" name="update" id="">
                </div>
            </form>
            </div>    
<?php
}
?>
        
      
    </div>  
 
</body>
</html>

<?php

if(isset($_POST['update']))
{   
    $Id = $_GET['Id'];
    $snm = $_POST['sname'];
    $fnm = $_POST['fname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $date = $_POST['date'];
    $gendar = $_POST['gendar'];
    $bgroup = $_POST['bgroup'];
    
    $filename = $_FILES['upfile']['name'];
    $tempname = $_FILES['upfile']['tmp_name'];

    $folder ="..//photos/".$filename;
    move_uploaded_file($tempname,$folder);

    include('connect.php');

    mysqli_query($con,"update students set Images = '$folder',Student_Name = '$snm', Father_Name = '$fnm', Email = '$email', Contact = '$contact', Address = '$address', Class = '$class', Date_Of_Birth = '$date', Gendar = '$gendar', Blood_Group = '$bgroup' where Id ='$Id'"); 

    header('location:students.php');
}

?>
