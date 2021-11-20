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
    <title>Homepage</title>
<link rel="stylesheet" href="css/secondstep.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
        <ul class="nav nav-pills">
            <li class="nav-item active">
              <a class="nav-link" href="secondstep.php">ADMIN3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admindash.php">DASHBOARD</a>
              </li>
            <li class="nav-item">
          <a class="nav-link" href="../logout.php">LOG OUT</a>
        </li>
      </ul>
      <br>
      <br>
      <div class="main-content-header">
          
          <form method="post" action="thirdstep.php">
              <h2>Step 2/2 : Add Exam mark</h2>
         
          <td><input type="hidden" name="class" class="class" value="<?php  echo $_POST['class']; ?>" required/></td>
          
          <td><input type="hidden" name="rollno" class="rollno" value="<?php  echo $_POST['rollno']; ?>" required/></td>
          
              
              
          <table class="table1">
              <span> <h4 class="h_3">First Exam (A)</h4></span>
             <tr>
                <th>Hindi</th>   <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input type='text' name='hindi1' placeholder='Hindi' required/></td>
                 <td><input type='text' name='english1' placeholder='English' required/></td>
                 <td><input type='text' name='math1' placeholder='Math' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemistry</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='physics1' placeholder='Physics' required/></td>
                 <td><input type='text' name='chemestry1' placeholder='Chemistry' required/></td>
                 
             </tr>
             
         </table>
         <br><br>
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
             <tr>
                <th>Hindi</th>  <th> English </th> <th>Math</th>
             </tr>
             <tr>
                 <td><input type='text' name='hindi2' placeholder='Hindi' required/></td>
                 <td><input type='text' name='english2' placeholder='English' required/></td>
                 <td><input type='text' name='math2' placeholder='Math' required/></td>
             </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Physics</th>   <th>Chemistry</th> 
             </tr>
                 <tr>
                 
                 <td><input type='text' name='physics2' placeholder='Physics' required/></td>
                 <td><input type='text' name='chemestry2' placeholder='Chemistry' required/></td>
                 
             </tr>
             <tr>
             <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>   
             </tr>
             
         </table>
         
       
       </form>
      </div>
    </header>
   
    
</body>
<footer class="footer">
    <p>&copy 2021  <b>Shams Reza</b> </br>Designing Manager, Jean Bodin International School <br> Akash Vistara Foundation</p>
    </footer>
</html>
<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $section=$_POST['section'];
    $rollno=$_POST['rollno'];
    $father=$_POST['father'];
    $mother=$_POST['mother'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    $imagename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    move_uploaded_file($tempname,"$imagename");
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_class`,`u_section`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_city`, `u_image`) VALUES ('$username','$class','$section','$rollno','$father','$mother','$mobile','$city','$imagename')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>