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
    <title>Messages</title>
<link rel="stylesheet" href="css/usermassage.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
    <ul class="nav nav-pills">
           
            <li class="nav-item active">
                <a class="nav-link" href="usermassage.php">MESSAGES</a>
              </li>
              <li class="nav-item ">
              <a class="nav-link" href="admindash.php">DASHBOARD</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../logout.php">LOGOUT</a>
            </li>
           
      </ul>
      <div class="main-content-header">
        <form>
         <table>
          <tr>
           <th class="id_h1">Id </th>
           <th class="name_h1">Name </th> 
           <th class="email_h1">Email </th> 
           <th class="contact_h1">Contact No</th>
           <th class="massage_h1">Message </th>
          </tr>
        
<?php
include('../dbcon.php');
  $sql="SELECT * FROM `user_massage`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
            <th class="email_h"> <?php  echo $row['u_email'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_contact'].'<br>'; ?></th> 
            <th class="massage_h"> <?php  echo $row['u_massage'].'<br>'; ?></th> 
        </tr>     
        <?php    
        }
   
}
else{
    echo "Connection failed";
}

?>
              </table>
        </form>
      </div>
    </header>

    <footer class="footer">
        <p>&copy 2021  <b>Shams Reza</b> </br>Designing Manager, Jean Bodin International School <br> Akash Vistara Foundation</p>
        </footer>
</body>
</html>