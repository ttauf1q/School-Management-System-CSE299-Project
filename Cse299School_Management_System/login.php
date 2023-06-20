<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_type = $_POST['usertype'];
    $email = $_POST['email'];
    $password = $_POST['Password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "SELECT * FROM admin WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['password'] == $password) {
                // Check if the user is a teacher or a student
                if ($user_data['usertype'] == 'teacher') {
                    header("Location: teacher_dashboard.php");
                    exit;
                } elseif ($user_data['usertype'] == 'student') {
                    header("Location: student_dashboard.php");
                    exit();
                } else {
                    // Handle other user types if needed
                }
            } else {
                echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login & Registration</title>
   <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
<div class="form_container">
    <div class="overlay"></div>
    <div class="titleDiv">
        <h1 class="title">Login</h1>
        <span class="subTitle">Welcome back!</span>
    </div>

    <form action="" method="POST">
    <div class="rows grid">
        
        <div class="row">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter User email" required>
        </div>
        <div class="row">
            <label for="password">Password</label>
            <input type="password" id="password" name="Password" placeholder="Enter your password" required>
        </div>
        <div class="row">
            <input type="submit" id="submitBtn" name="submit" value="Login">
            <span class="registerLink">Don't have an account? <a href="Registration.php">Register</a></span>
        </div>
    </div>
</form>