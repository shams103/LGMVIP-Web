<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<html>
<head>
    <title>All Student Detail</title>
<link rel="stylesheet" href="css/allstudentdata.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <header>
      <ul class="nav nav-pills">
        <li class="nav-item active">
          <a class="nav-link" href="addmark.php">DASH2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="admindash.php">DASHBOARD</a>  
        </li>
        <li class="nav-item">
      <a class="nav-link" href="../logout.php">LOG OUT</a>
    </li>
  </ul>
      <div class="main-content-header">
        <h2>Student Record</h2>
        <form> 

         <table class="table ">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Class</th>
              <th scope="col">Section</th>
              <th scope="col">Roll No</th>
              <th scope="col">Father Name</th>
              <th scope="col">Mother Name</th>
              <th scope="col">City</th>
              <th scope="col">Mobile No</th>
            </tr>
          </thead>
          <tbody>
            
<?php
include('../dbcon.php');
  $sql="SELECT * FROM `student_data`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th > <?php  echo $row['id'].'<br>'; ?></th>
            <th > <?php  echo $row['u_name'].'<br>'; ?></th> 
            <th > <?php  echo $row['u_class'].'<br>'; ?></th> 
            <th > <?php  echo $row['u_section'].'<br>'; ?></th> 
            <th > <?php  echo $row['u_rollno'].'<br>'; ?></th> 
            <th > <?php  echo $row['u_father'].'<br>'; ?></th> 
            <th > <?php  echo $row['u_mother'].'<br>'; ?></th>
            <th > <?php  echo $row['u_city'].'<br>'; ?></th> 
            <th > <?php  echo $row['u_mobile'].'<br>'; ?></th> 
        </tr>     
        <?php    
        }
   
}
else{
    echo "No Record Found";
}

?>

</tbody>
</table>  
        </form>
      </div>
    </header>

    <footer class="footer">
      <p>&copy 2021  <b>Shams Reza</b> </br>Designing Manager, Jean Bodin International School <br> Akash Vistara Foundation</p>
      </footer>

</body>
</html>