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
    <title>Admin Dashboard</title>
<link rel="stylesheet" href="css/admindash.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
     
    <ul class="nav nav-pills">
            <li class="nav-item active">
              <a class="nav-link" href="admindash.php">DASHBOARD</a>
            </li>
            <li class="nav-item">
          <a class="nav-link" href="logout.php">LOG OUT</a>
        </li>
      </ul>

      <div class="main-content-header">
        <h1>Admin Dashboard</h1>
       <h3><a href="addmark.php">-> Add Marks of Student </a></h3>
       <h3><a href="updatemark.php">-> Update Student Marks </a></h3>
       <h3><a href="deleteform.php">-> Delete the Marks of Student </a></h3>
       <h3><a href="allstudentdata.php">-> Data of all Students </a></h3>
       <h3><a href="usermassage.php">-> Messages by Student</a></h3>
      </div>
    </header>
    <footer class="footer">
      <p>&copy 2021  <b>Shams Reza</b> </br>Designing Manager, Jean Bodin International School <br> Akash Vistara Foundation</p>
      </footer>
    
</body>
</html>