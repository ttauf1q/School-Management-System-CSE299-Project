<?php 
include("db.php");
mysqli_query($con,"select * from admin"); 
 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Attendance </title> 
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
<center><h2><u>Attendance</u></h2></center>
  <div class="center">
    <img src="user.png" alt="user">
  </div>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
    <?php if($rows=mysqli_fetch_assoc(mysqli_query($con,"select * from admin"))) 
		{ 
		?> 
	<tr> 
		<th colspan="4"><h2><?php echo $rows['username']; ?></h2></th> 
		</tr> 
			  <th> <b>User</b> </th> 
			  <th> <b>Class</b> </th> 
			  <th> <b>Attended</b> </th> 
			  <th> <b>Total Class</b> </th> 
			  
		</tr> 
		
		
		<tr> <td><center><?php echo $rows['usertype']; ?></center></td> 
		<td> <center>9</center> </td> 
		<td> <center>18</center> </td> 
		<td> <center>21</center> </td> 
		</tr> 
		<?php 
               } 
			   
          ?> 

	</table> 
	</body> 
	</html>