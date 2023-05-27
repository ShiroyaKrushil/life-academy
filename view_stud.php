<?php
$email = $_SESSION['email'];

if($email  == true)
{
    
}

else
{
	header('location:login.php');
}


include('connaction/connaction.php');

$s = mysqli_query($con,"select* from students");


    while($r = mysqli_fetch_array($s))
    {?>


                <div class="hr-top"><hr></div>

                    <div class="studentlist">
                        <img src=".//<?php echo $r['Images']?>" alt="">
                    </div>

                        <div class="stud-detail">
                            <table>
                                <tr>
                                    <th>Id: <span id="span"><?php echo $r['Id']?></span></th>
                                </tr>

                                <tr>
                                    <th>Student Name : <span id="span"><?php echo $r['Student_Name']?></span></th>
                                </tr>

                                <tr>
                                    <th>Father Name : <span id="span"><?php echo $r['Father_Name']?></span></th>
                                </tr>

                                <tr>
                                    <th>Email : <span id="span"><?php echo $r['Email']?></span></th>
                                </tr>

                                <tr>
                                    <th>Contact : <span id="span"><?php echo $r['Contact']?></span></th>
                                </tr>

                                <tr>
                                    <th>Address : <span id="span"><?php echo $r['Address']?></span></th>
                                </tr>

                                <tr>
                                    <th>Class : <span id="span"><?php echo $r['Class']?></span></th>
                                </tr>

                                <tr>
                                    <th>D.O.B : <span id="span"><?php echo $r['Date_Of_Birth']?></span></th>
                                </tr>

                                <tr>
                                    <th>Gendar : <span id="span"><?php echo $r['Gendar']?></span></th>
                                </tr>

                                <tr>
                                    <th>Blood Group : <span id="span"><?php echo $r['Blood_Group']?></span></th>
                                </tr>
                            </table>
                        </div>

                <div class="hr-bottom"><hr></div>
        

    <?php 
        }
    ?>
                