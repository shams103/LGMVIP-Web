

<html>
<head>
<title>Result</title>
<link rel="stylesheet" href="css/self.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="self.php">STUDENT</a>
              </li>
            <li class="nav-item ">
              <a class="nav-link" href="login.php">ADMIN</a>
            </li>
           
      </ul>
      
      <div class="self">
        <form action="result.php" method="post">
         <h1>Studen Login</h1>
         <table class="form1">
          <tr>
          <th>Roll No </th>
          <td class="table"><input type="text" name="u_rollno" placeholder="Roll No" required class="field1"/></td>  
          </tr> 
          <tr>
          <th>Class </th>
          <td class="table"><input type="text" name="u_class" placeholder="Class" required class="field1"/></td>
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





