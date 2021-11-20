<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Management System</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<header>
      <marquee> <h2>Welcome To JEAN BODIN International School <br>
       Shimla, Himachal Pradesh</h2></marquee>
    </header>

       <div class="image">
        <img src="image/castle.jpg" alt="">
        </div>
         
        <div class="div2">
        <h2>About Us</h2>
        <h3>Student Result Management System</h2>
        <p>This Software Application unbelievably unravels and quickens the result management system with unique templates by providing the administration a secure database system for storing, evaluating and publishing the test scores and grades of candidates online. The database likewise allows the student to observe and gander at the exam results on the web at whatever point necessary.</p>
        <br><p> Student Result Management System is a technological opportunity for the school, college university and coaching centre institutions searching for a secure, simple and alternative solution to the conventional paper-based exam results  evaluation, reporting and distribution.</p>
        </div> 
          

    <div class="row">
      <div class="col-2 student">
      <img src="student.png" alt="">
      <h4><a href="self.php"> STUDENT </a></h4>
      
      </div>

      <div class="col-2 admin">
      <img src="admin.png" alt="">
      <h4> <a href="login.php"> ADMIN </a></h4>
     
      </div>
    </div>

    <div class="contact">
       <form method='post'>
        <table class="table">
              <h2>Need help?  Leave your query</h2>
             
              <tr>
              <td><input type='text' class='tb' name='u_name' placeholder='Full Name' Required/></td>
              </tr>
            
              <tr>
                <td><input type='text' class='tb' name='u_email' placeholder='Email Id' Required/></td>
              </tr>
            
              <tr>
                <td><input type='text' class='tb' name='u_contact' placeholder='Contact No' Required/></td>
              </tr>
             
              <tr>
                <td ><textarea class='tblm' name="u_massage" placeholder='Type here...'></textarea></td>
              </tr>
              <tr>
              <td colspan='2' align='center'><input type="submit" name='submit' value='Send' class='submit'/></td>
              </tr>
          </table>
       </form>
      
    </div>

    <footer class="footer">
    <p>&copy 2021  <b>Shams Reza</b> </br>Designing Manager, Jean Bodin International School <br> Akash Vistara Foundation</p>
    </footer>

    
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    include('dbcon.php');
    $username=$_POST['u_name'];
    $email=$_POST['u_email'];
    $contact=$_POST['u_contact'];
    $massage=$_POST['u_massage'];
    $sql="INSERT INTO `user_massage`(`u_name`, `u_email`, `u_contact`, `u_massage`) VALUES ('$username','$email','$contact','$massage')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
      <script>
      alert('Your Message is sent to Admin');

     </script>
   <?php
    }
}

?>