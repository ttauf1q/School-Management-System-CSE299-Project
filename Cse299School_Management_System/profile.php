<?php 
include("db.php");
mysqli_query($con,"select * from admin"); 
 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<style>
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50vh;
    }

	table, tr, td, th{

padding: 10px;

margin: auto;

border: none;

}

  </style>
</head>
<body>
	<center><h2><u>Profile</u></h2></center>
  <div class="center">
    <img src="user.png" alt="user">
  </div>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"></th> 
		</tr> 
			  <th> <b>User</b> </th> 
			  <th> <b>Name</b> </th> 
			  <th> <b>Email</b> </th> 
			  <th> <b>Contact No.</b> </th> 
			  
		</tr> 
		
		<?php if($rows=mysqli_fetch_assoc(mysqli_query($con,"select * from admin"))) 
		{ 
		?> 
		<tr> <td><center>Teacher</center></td> 
		<td><center>kashpia</center></td> 
		<td><center>summiyasunjida@gmail.com</center></td> 
		<td><center>01309923045</center></td> 
		</tr> 
		<?php 
               } 
			   
          ?> 

	</table> 
	</body> 
	</html>