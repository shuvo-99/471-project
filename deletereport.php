<?php 
    session_start();
	include "dbconnection.php";
	
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <!-- font awesome -->

    <script
      src="https://kit.fontawesome.com/5b05054594.js"
      crossorigin="anonymous"
    ></script>

    <style>
      .func_btn{
        color: rgb(250, green, blue);
      }
    </style>
  </head>
  
<?php
$q=mysqli_query($db,"SELECT * FROM employee");

$row=mysqli_fetch_assoc($q);
?>
<table class="table table-striped table-primary" >
            <thead>
            
            <tr >
              
              <th scope="col " class="text-center">EmployeeSl</th>
              
              <th scope="col " class="text-center">UserName</th>
              <th scope="col " class="text-center">Employee name</th>
              <th scope="col " class="text-center">Emp_Position</th>
              <th scope="col " class="text-center">Department</th>
              <th scope="col " class="text-center">Birth Year</th>
             
              <th scope="col " class="text-center">Mobile No</th>
              <th scope="col " class="text-center">Joining Year</th>
              <th scope="col " class="text-center">Gender</th>
             
    </tr> 
          </thead>
          <tbody>
            <tr class="td-text text-center">
            
              <?php
  
								$sql= "SELECT emp_sl,username,emp_position,dept_name,mobile_no,birth_year,joining_year,emp_name,gender  FROM employee";
								$res=mysqli_query($db, $sql);
								
								while ($row= mysqli_fetch_assoc($res)){
								
									echo "<tr><td>{$row["emp_sl"]}</td><td>{$row["username"]}</td><td>{$row["emp_name"]}</td><td>{$row["emp_position"]}</td><td>{$row["dept_name"]}</td><td>{$row["birth_year"]}</td><td>{$row["mobile_no"]}</td><td>{$row["joining_year"]}</td><td>{$row["gender"]}</td>/tr>";
                                    
								}
								
								echo "</table>";
              ?>
              
            </tr>
            
          </tbody>
          
        </table>
    
		

        <div class="form1">
		<form action="" method="post" enctype="multipart/form-data">

		<!--<input class="form-control" type="file" name="file">-->

		<label><h4><b>User Id: </b></h4></label>
		<input class="form-control" type="text" name="Employee Sl" value="">

		

        

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit8">Delete</button></div>
	</form>
    <?php 

		if(isset($_POST['submit8']))
		{
			/*move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);*/

			$username=$_POST['username'];
			
			/*$pic=$_FILES['file']['name'];*/

			$sql1= "DELETE FROM `employee` WHERE username='$username';";
            echo $sql1;
			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Delete Successfully.");
						
					</script>
				<?php
			}
		}
 	?>
</div>