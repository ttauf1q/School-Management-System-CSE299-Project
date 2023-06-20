<?php 
include("db.php");
mysqli_query($con,"select * from admin"); 
 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Grade </title> 
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
<h1 text align="center"><u>Grade</u></h1>
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
			  <th> <b>Username</b> </th> 
			  
			  <th> <b>Grade</b> </th> 
			  
		</tr> 
		
		
		<tr> <td><center>Sec 1</center></td> 
		<td> <center>Ramisa</center> </td> 
		
		<td> <center>A</center> </td> 
		</tr> 
		<?php 
               } 
			   
          ?> 

	</table> 
	</body> 
	</html>