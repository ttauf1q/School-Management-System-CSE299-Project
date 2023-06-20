<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $user_name = $_POST['username'];
   $user_type = $_POST['usertype'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password = $_POST['Password'];

   // Check if email or phone number already exists in the database
   $emailQuery = "SELECT * FROM admin WHERE email = '$email' LIMIT 1";
   $phoneQuery = "SELECT * FROM admin WHERE phone = '$phone' LIMIT 1";
   $emailResult = mysqli_query($con, $emailQuery);
   $phoneResult = mysqli_query($con, $phoneQuery);

   if (mysqli_num_rows($emailResult) > 0) {
      echo "<script type='text/javascript'> alert('Email already exists')</script>";
   } elseif (mysqli_num_rows($phoneResult) > 0) {
      echo "<script type='text/javascript'> alert('Phone number already exists')</script>";
   } else {
      // Insert the new user into the database
      $query = "INSERT INTO admin (username, usertype, email, password, phone) VALUES ('$user_name', '$user_type','$email', '$password', '$phone')";
      mysqli_query($con, $query);
      echo "<script type='text/javascript'> alert('Successfully registered')</script>";
      header("Location: login.php");
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Account</title>
   <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class= "register_container">
    <div class="overlay">

    </div>
    <div class="titleDiv">
       <h1 class="title "> Register </h1>
       <span class ="subTitle"> Thanks for choosing us!</span>
    </div>

    <form action="" method="POST">
       <div class="rows grid">
          <div class="row">
             <label for ="username">Username</label>
             <input type="text" id ="username" name="username"
             placeholder="Enter User Name" required>
          </div>
          <div class="row">
            <label for="usertype">User Type</label>
            <select id="usertype" name="usertype" required>
            <option value="student">Student</option>
                <option value="teacher">Teacher</option>
                
            </select>
        </div>
          <div class="row">
            <label for ="email">Email Address</label>
            <input type="email" id ="email" name="email"
            placeholder="Enter User email" required>
         </div>
         <div class="row">
            <label for ="phone">Phone Number</label>
            <input type="text" id ="phone" name="phone"
            placeholder="Enter your phone number" required>
         </div>

          <div class="row">
             <label for ="password">Password</label>
             <input type="password" id ="password" name="Password"
             placeholder="Enter your password" required>
          </div>

          <div class="row">
             
             <input type="submit" id ="submitBtn" name="submit"
             value="Register" required>

             <span class="registerLink">Already have an account? <a href ="login.php" >Login</a></span>
          </div>

       </div>
</form>
 </div>
 </body>
