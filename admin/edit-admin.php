<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
    <?php include('header.php');?>


        <div class="form-box">
            <div class="form-title">
                <h1>Update Admin</h1>
            </div>
    
            <div class="form">
                <?php

            $email = $_SESSION['email'];

            if($email  == true)
            {

            }

            else
            {
                header('location:login.php');
            }

                $id = $_GET['Id'];

                include('connect.php');                
                $s = mysqli_query($con,"select* from admin where Id = '$id'");
                while($r = mysqli_fetch_assoc($s))
                {?>
            
                <form action="" method="post" >
                    
                    <label for="">User Id</label>
                    <input type="text" name="email" id="email" value="<?php echo $r['Email'];?>" autofocus >
                    <p></p>
    
                    <label for="">Password</label>
                    <input type="text" name="pass" id="pass" value="<?php echo $r['pass'];?>" >
    
                    
                    <div>
                        <input type="submit"  value="Update" name="update" id="" class="btn">
                    </div>
                    
                       
                </form>
                 <?php }?>   
                    
        </div>

                
    </div>
    </div>
</body>
</html>

<?php include('update-admin.php');?>