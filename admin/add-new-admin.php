
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panal</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
    <?php include('header.php');?>


        <div class="form-box">
            <div class="form-title">
                <h1>Add New Admin</h1>
            </div>
    
            <div class="form">
                <form action="add-adminphp.php" method="post" >
                    
                    <label for="">User Id</label>
                    <input type="email" name="email" id="email" autofocus required>
                    <p></p>
    
                    <label for="">Password</label>
                    <input type="password" name="pass" id="pass" required>
    
                    
                    <div>
                        <input type="submit"  value="Add" name="submit" id="" class="btn">
                    </div>
                    
                       
                </form>
    
                    
        </div>

                
    </div>
    </div>
</body>
</html>