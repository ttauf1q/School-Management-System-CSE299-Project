<?php 
include("db.php");

 
?> 
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="student_dashboard.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Student Dashboard</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="Student_logo.png" alt="">
            </div>

            <span class="logo_name">Student</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="student_profile.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Profile</span>
                </a></li>

                <li><a href="attendance.php">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Attendance</span>
                </a></li>
                

                
                <li><a href="grade.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Grade</span>
                </a></li>
                
            
            <ul class="logout-mode">
                <li><a href="login.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-chart"></i>
                        <span class="text">Primary Class</span>
                        <span class="number">Class 1- Class 5</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-chart"></i>
                        <span class="text">Secondary Class</span>
                        <span class="number">Class 6- Class 9</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-chart"></i>
                        <span class="text"> High School</span>
                        <span class="number"> Class 11</span>
                    </div>
                    

                    
                </div>
            </div>

            
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>