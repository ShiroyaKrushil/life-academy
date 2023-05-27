<?php session_start();
$email = $_SESSION['email'];

if($email  == true)
{

}

else
{
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact</title>

<!-- custom -->
<link rel="stylesheet" href="css/contactform.css">
    
<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="header">
        <?php include('header.php');?>
    </div>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>12 Pachora Road,<br>Gujarat,India,<br>362001</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>8320066220</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>lifeacademy@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="post">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" required="required" name="fnm">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" required="required" name="email">
                        <span>Eamil</span>
                    </div>
                    <div class="inputBox">
                        <input type="number" required="required" name="contact">
                        <span>Contact</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="msg" id="" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send" name="send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div class="footer">
    <div class="footer-title">
                <h1>ADMISSION SYSTEM</h1>
                <p>Education is most powerful<br>
                    weapon you can use to change <br>the world.<br><br>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp; -  Nelson Mandela</p>
            </div>

            <div class="navigation">
                <h1>Navigation</h1>
            </div>
            <div class="nav-menu">
                <a href="index.php">Home</a>
                <a href="admission.php">Admission</a>
                <a href="studentlist.php">Students List</a>
                <a href="contact.php">Contact Us</a>
            </div>

            <div class="contact2">
                <h1>Contact Us</h1>
            </div>
            <div class="link">
                <a href="" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
                <a href="" title="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            
            
            <div class="developer">
                <h3>Design & Developed By : Krushil & Johil</h3>
            </div>
    </div>
</body>
</html>

<?php

if(isset($_POST['send']))
{
    
$name = $_POST['fnm'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$msg = $_POST['msg'];

    if(empty($name && $email && $contact && $msg))
    {
        echo"<script>";
        echo"alert('All Fileds Are Required....');";
        echo"</script>";
    }
    else
    {
        include('connaction/connaction.php');

        mysqli_query($con,"insert into contact (Name,Email,Contact,Message) value('$name','$email','$contact','$msg');");

        echo"<script>";
        echo"alert('Thank You $name,   Your message has been sent.....');";
        echo"</script>";
    }
}

?>