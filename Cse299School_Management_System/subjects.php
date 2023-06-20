<?php 
include ('db.php'); 
$query="select * from admin"; 
$result=mysqli_query( $con, $query);
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
<center><h2><u>Classes</u></h2></center>
  <div class="center">
    <img src="user.png" alt="user">
  </div>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
    <?php if($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
	<tr> 
		<th colspan="4"><h2>kashpia</h2></th> 
		</tr> 
			  <th> <b>User</b> </th> 
			  <th> <b>Class</b> </th> 
			  <th> <b>Courses</b> </th> 
			  <th> <b>Sections</b> </th> 
			  
		</tr> 
		
		
		<tr> <td><center>Teacher</center></td> 
		<td> <center>9</center> </td> 
		<td> <center>English</center> </td> 
		<td> <center>1,2</center> </td> 
		</tr> 
		<?php 
               } 
			   
          ?> 

	</table> 
	</body> 
	</html>