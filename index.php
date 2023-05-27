<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
        
        
        <div class="slider">
                 <img src="slider/bg-1.png" height="400px" width="100%">
                    
                    <div class="slider-contant">
                        <p>Find out how you can level up your career</p>
                    </div>
                    
                    <div class="slider-contant2">
                        <p>Even the greatest were beginners.<br>Don’t be afraid to take that first step!!</p>
                    </div>
            
                    <div class="read-more"> 
                           <a href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>  
        </div>

        <div class="courses-title">
            <h1>Our Courses</h1>
        </div>

        <div class="courses">
            <table>
                <tr>
                    <div class="contener">
                        <td>
                            <div class="card">
                                <div class="imgbox">
                                    <img src="images/courses-img/Reactjs.png" class="img">
                                </div>
                                <div class="detelis">
                                    <h2>React Js</h2>
                                    <p class="p">React is a JavaScript library for building user interfaces. React is used to build single page applications. React allows us to create reusable UI components. Our "Show React" tool makes it easy to demonstrate React, it shows both the code and the result. In order to learn and test React, you should set up a React Environment on your computer.</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card">
                                <div class="imgbox">
                                    <img src="images/courses-img/angular.png" class="img">
                                </div>
                                <div class="detelis">
                                    <h2>Angular Js</h2>
                                    <p class="p">AngularJS was one of the first modern JavaScript front-end frameworks. It came to market in 2010 and rapidly became the most popular JavaScript MVC (Model-View-Controller) framework. AngularJS quickly became popular because of features like dependency injection, routing, and two-way data binding.</p>
                                </div>
                            </div>
                        </td>
                    <td>
                        <div class="card">
                            <div class="imgbox">
                                <img src="images/courses-img/laravel.png" class="img">
                            </div>
                            <div class="detelis">
                                <h2>Laravel</h2>
                                <p class="p">Laravel is one of the worlds most popular PHP framework for building web applications from small to large projects. Due to its performance, features and scalability, Laravel is the choice of professional developers. You can customize Laravel so quickly that you can build your own project structure to meet your web application requirements.</p>
                            </div>
                        </div>
                    </td>
                   
                    </div>
                </tr>
            </table>
            
        </div>

        <div class="teachers-title">
            <h1>Our Teachers</h1>
        </div>

        <div class="teachers">
            <table>
                <tr>
                    <div class="contener">
                        <td>
                            <div class="teachers-box">
                                <img src="images/teachers-img/teacher-1.jpg" alt="" class="t1">
                                <div class="name">
                                    <h3>James Smith</h3>
                                </div>
                                <div class="email">
                                    <p>smithjms@gmail.com</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="teachers-box">
                                <img src="images/teachers-img/teacher-2.jpg" alt="" class="t1">
                                <div class="name"> 
                                    <h3>Christine Moore</h3>
                                </div>
                                <div class="email">
                                    <p>christine@gmail.com</p>
                                </div>
                            </div>
                        </td>
                    <td>
                        <div class="teachers-box">
                            <img src="images/teachers-img/teacher-3.jpg" alt="" class="t1">
                            <div class="name">
                                <h3>James Pugh</h3>
                            </div>
                            <div class="email">
                                <p>jamespp@gmail.com</p>
                            </div>
                        </div>
                    </td>
                   
                    </div>
                </tr>
            </table>
        </div>
        

        <div class="footer">
            <?php include('footer.php');?>
        </div>
    </div>

    

</body>
</html>