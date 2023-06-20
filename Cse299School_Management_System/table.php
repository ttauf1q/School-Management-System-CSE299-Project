<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="table.css">
  </head>
  <body>
    
   <div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" align="center"> Register Student
</h4>
</div>
</div class="card-body">
<?php
session_start();
include("db.php");
$query="SELECT * FROM registration";
$query_run=mysqli_query($con,$query);

?>
<table class="table table-bordered">
  <thead>
    <tr class="one">
      <th scope="col">Full Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Mother's Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Apply for Class</th>
      

    </tr>
  </thead>
  <tbody>
    <?php
    
if(mysqli_num_rows($query_run)>0){
    
    while($row = mysqli_fetch_array($query_run)){
        
    ?>
    <tr>
      
      <td><?php echo $row['full_name'];?></td>
      <td><?php echo $row['father_name'];?></td>
      <td><?php echo $row['mother_name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['mobile'];?></td>
      <td><?php echo $row['gender'];?></td>
      <td><?php echo $row['address'];?></td>
      <td><?php echo $row['class'];?></td>
    </tr>
    <?php
}
}
 
else{
    ?>
<tr>
    <td colspan="8" align="center">No Record Found</td>
</tr>
    <?php
}
?>
    
  </tbody>
</table>
</div>
</div>
</div>
</div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>
</html>