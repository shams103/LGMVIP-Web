<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admindash.php');	
}
?>
<html>
<head>
    <title>Login  here</title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->

</head>
<body>
    <header>
    
          <ul class="nav nav-pills">
          <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php">ADMIN</a>
            </li>
            
          </ul>

      <div class="login">
          <form action="login.php" method="post">
           <h1>Admin Login</h1>
           <table class="form1">
            <tr>
            <th>Username </th>
            <td class="table"><input type="text" name="username" placeholder="Enter Username" class="field1"/></td>  
            </tr> 
            <tr>
            <th>Password </th>
            <td class="table"><input type="password" name="password" placeholder="Enter Password" class="field1"/></td>
            </tr>   
            <tr>
            <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>
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
<?php
if(isset($_POST['submit']))
{
    include('dbcon.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.open('login.php','_self');
        </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location: admin/admindash.php');
    }
}
?> 