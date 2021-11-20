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
<title>Add Marks</title>
<link rel="stylesheet" href="css/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>  
    <ul class="nav nav-pills">
        <li class="nav-item active">
          <a class="nav-link" href="addmark.php">DASH1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="admindash.php">DASHBOARD</a>  
        </li>
        <li class="nav-item">
      <a class="nav-link" href="../logout.php">LOG OUT</a>
    </li>
  </ul>
      <div class="main-content-header">
          <h2>Step 1/2 : Enter the Details of Student</h2>
        <form method="post" enctype="multipart/form-data" action="secondstep.php">
            <table class="table1">
             <tr>
                <th>Name </th>   <th> Class</th> <th>Section</th> <th>Roll No</th>
             </tr>
             <tr>
                 <td><input type='text' name='name' placeholder='Enter Full Name' required class="box"/></td>
                 <td><input type='text' name='class' placeholder='Class' required class="box"/></td>
                 <td><input type='text' name='section' placeholder='Section' required class="box"/></td>
                 <td><input type='text' name='rollno' placeholder='Rollno' required class="box"/></td>
                
             </tr>
             </table>
             <table class="table2">
             <tr>
                <th>father Name </th>   <th> Mother Name</th> <th>Mobile No</th><th>Your City</th>
             </tr>
                 <tr>
                 <td><input type='text' name='father' placeholder="Father's Name" required class="box"/></td>
                 <td><input type='text' name='mother' placeholder="Mother's Name" required class="box"/></td>
                 <td><input type='text' name='mobile' placeholder='Mobile No' required class="box"/></td>
                 <td><input type='text' name='city' placeholder='City' required class="box"/></td>
             </tr>
             
         </table>
         <table class="table3">
           <tr>
               <th>Choose Image -</th>
               <td><input type="file" name="img" required/></td>
           </tr> 
         </table>
         <table class="table4">
            <tr>
           <td align="center" colspan="2"><input type="submit" name="submit1" value="Next" class="next_Step"/></td>  
           </tr>
        </table>
       </form>
      </div>
    </header>
    <footer class="footer">
        <p>&copy 2021  <b>Shams Reza</b> </br>Designing Manager, Jean Bodin International School <br> Akash Vistara Foundation</p>
        </footer>
    
</body>
</html> 