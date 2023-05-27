<?php session_start();

$email = $_SESSION['email'];

if($email  == true)
{

}

else
{
	header('location:login.php');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>

<!-- custom -->
<link rel="stylesheet" href="css/style.css">

<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div class="main">
      <div class="header">
        <?php include('header.php');?>
      </div>
        <div class="admission-form">
            <div class="form-title">
                <h1>Student Admission Form</h1>
            </div>

            <div class="form">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="c1">
                        <label for="">Upload Photo</label>
                        <input type="file" name="upfile" id=""  required>
                    </div>
            
                    <div class="c3">
                        <label for="">Class</label>
                        <select name="class" id="" required>
                            <option value="React Js" default>React Js</option>
                            <option value="Angular Js">Angular Js</option>
                            <option value="Laravel">Laravel</option>
                        </select>
                    </div>
            
                    <div class="c2">
                        <label for="">Student Name</label>
                        <input type="text" name="sname" id="" required>
                    </div>
            
                    <div class="c4">
                        <label for="">Date_Of_Birth</label>
                        <input type="date" name="date" required>
                    </div>
            
                    <div class="c5">
                        <label for="">Father Name</label>
                        <input type="text" name="fname" id="" required>
                    </div>
            
                    <div class="c6">
                        <label for="">Gendar</label>
                        <select name="gendar" id="" required>
                            <option value="Male" default>Male</option>
                            <option value="Femail">Female</option>
                        </select>
                    </div>
            
                    <div class="c7">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" required>
                    </div>
            
                    <div class="c8">
                        <label for="">Blood_Group</label>
                        <select name="bgroup" id="" required>
                            <option value="A+" default>A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div> 
            
                    <div class="c9">
                        <label for="">Contact</label>
                        <input type="number" name="contact" id="" required>
                    </div>
            
                    <div class="c10"></div>
           
                    <div class="c11">
                        <label for="">Address</label>
                        <textarea name="address" id="" required></textarea>
                    </div>

                    
                </div>
                <div class="btn">
                    <input type="submit" value="Submit" name="submit" id="">
                </div>
            </form>
            </div>    
           
        
      <div class="footer">
            <?php include('footer.php');?>
      </div>
    </div>  
 
</body>
</html>

<?php


if(isset($_POST['submit']))
{
  
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

    $folder ="photos/".$filename;
    move_uploaded_file($tempname,$folder);
    
    include('connaction/connaction.php');
    $s = mysqli_query($con,"select Email from students where Email = '$email'");

    if(mysqli_num_rows($s) > 0)
    {   
        echo"<script>";
        echo"alert('Email Id is Already Exist..')";
        echo"</script>";
     }

    else
    {

        include('connaction/connaction.php');

        mysqli_query($con,"insert into students(Images,Student_Name,Father_Name,Email,Contact,Address,Class,Date_Of_Birth,Gendar,Blood_Group) values('$folder','$snm','$fnm','$email','$contact','$address','$class','$date','$gendar','$bgroup')");

        echo"<script>";
        echo"alert('recode insert successfully...');";
        echo"</script>";
    }
}


?>