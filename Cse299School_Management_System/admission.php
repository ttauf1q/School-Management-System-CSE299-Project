<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $full_name = $_POST['full_name'];
   $father_name = $_POST['father_name'];
   $mother_name = $_POST['mother_name'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $address = $_POST['address'];
   $gender = $_POST['gender'];
   $class = $_POST['class'];


   
      // Insert the new user into the database
      $query = "INSERT INTO registration (Full_name, father_name, mother_name, email,mobile,address,gender,class) VALUES ('$full_name', '$father_name','$mother_name',  '$email','$mobile ','$address','$gender','$class')";
      mysqli_query($con, $query);
      echo "<script type='text/javascript'> alert('Successfully Submitted')</script>";
      header("Location: table.php");
      
      
}
?>

   
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <link rel="stylesheet" href="admission.css">
</head>
<body>
  
 
  <h5>STUDENT ADMISSION FORM</h5>
  <div class="reg">
  <form action="" method="POST" class="box">

      <br><label for="full_name">Full name* :</label>
      <input type="text" id="full_name" name="full_name" value=""  required><br><br>

      <label for="father_name">Father's name* :</label>
      <input type="text" id="father_name" name="father_name" value=""  required><br><br>

      <label for="mother_name">Mother's name* :</label>
      <input type="text" id="mother_name" name="mother_name" value="" required><br><br>

      <label for="email">Email Address* :</label>
      <input type="email" id="email" name="email" value=""  required><br><br>

      <label for="mobile_number">Mobile Number* :</label>
      <input type="text" id="mobile" name="mobile" maxlength="11" required><br><br>

      <label for="gender">Gender* :</label>
      <input type="radio" id="male" name="gender" value="Male">
      Male</label>
      <input type="radio" id="female" name="gender" value="Female">
      Female</label><br><br>

      <label for="address">Address :</label><br><br>
      <textarea id="address" name="address" rows="4" cols="30"></textarea><br><br>


      <label for="class">Apply for Class* :</label><br><br>
      <select id="class" name="class">
        <option value="1">Class 1</option>
        <option value="2">Class 2</option>
        <option value="3">Class 3</option>
        <option value="4">Class 4</option>
        <option value="5">Class 5</option>
        <option value="6">Class 6</option>
        <option value="7">Class 7</option>
        <option value="8">Class 8</option>
        <option value="9">Class 9</option>
        <option value="10">Class 10</option>
      </select><br><br>

      <input type="submit" id= "sub"value="Submit">
       
    </div>
  </form>
</body>
</html>
