<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Custom -->
<link rel="stylesheet" href="css/style.css">

    <!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
</head>
<body class="">
    <div class="header">
        <?php include('header.php');?>
    </div>
    <div class="main2">
        <div class="form-title">
            <h1>Login</h1>
        </div>

        <div class="form2">
            <form action="loginck.php" method="post" >
                
                <label for="">Email</label>
                <input type="email" name="email" id="email" autofocus>

                <label for="">Password</label>
                <input type="password" name="pass" id="pass">

                
                <div>
                    <input type="submit"  value="Login" name="login" id="" class="btn">
                </div>
                
                <div class="login-link">
                    <p>Not Have an Account?<a href="signup.php">Sign up Now</a></P>
                </div>

                           
            </form>

                
    </div>


</body>
</html>
