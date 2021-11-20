
<?php
if(isset($_POST['submit']))
{

	include('dbcon.php');
	
	$standerd=$_POST['u_class'];
	$rollno =$_POST['u_rollno'];
	$sql="SELECT * FROM `student_data` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
    $sql2="SELECT * FROM `user_mark` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$run2=mysqli_query($con,$sql2);
   $row=mysqli_num_rows($run2);
   $data2=mysqli_fetch_assoc($run2);
       
if(mysqli_num_rows($run)>0)
{
$data=mysqli_fetch_assoc($run);
?>


<html>

<head>
    <title>Result</title>
    <link rel="stylesheet" href="css/result.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>

<body>
    <header>
        <ul class="nav nav-pills">
            <li class="nav-item active">
                <a class="nav-link" href="self.php">STUDENT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logoutSTUDT.php">LOG OUT</a>
            </li>
        </ul>
        <br><br>
        <marquee scrollamount="5">
            <p>Your Result is Declared. Kindly check your marks and in case of any discrepancy contact the admin. </p>
        </marquee>

        <div class="main-content-header">
            <form method="post" action="result.php">



                <div class="row">
                    <div class="col-2">
                        <img src="girl.jpg" alt="">
                       
                    </div>
                    <div class="col-2">
                            <table class="table">

                            <tr>
                                <th>Name :</th>
                                <td>
                                    <?php echo $data['u_name'] ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Class :</th>
                                <td>
                                    <?php echo $data['u_class']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Section :</th>
                                <td>
                                    <?php echo $data['u_section']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Roll No :</th>
                                <td>
                                    <?php echo $data['u_rollno']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Address :</th>
                                <td>
                                    <?php echo $data['u_city']; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Contact :</th>
                                <td>
                                    <?php echo $data['u_mobile']; ?>
                                </td>
                            </tr>
                            </table>
                        </div>
                    </div>

                <hr>
                <table class="table2">
                    <tr>
                        <th>Subject</th>
                        <th>Half Yealy Exam (Score) </th>
                        <th>Annual Exam (Score)</th>
                        <th>Total</th>
                        <th>Max. Marks</th>
                    </tr><br><br>
                    <tr>
                        <th>Hindi</th>
                        <th>
                            <?php echo $data2['u_hindi1']; ?>
                        </th>
                        <th>
                            <?php echo $data2['u_hindi2']; ?>
                        </th>
                        <th>
                            <?php echo $total1=$data2['u_hindi1']+$data2['u_hindi2']; ?>
                        </th>
                        <th>200</th>
                    </tr>
                    <tr>
                        <th>English</th>
                        <th>
                            <?php echo $data2['u_english1']; ?>
                        </th>
                        <th>
                            <?php echo $data2['u_english2']; ?>
                        </th>
                        <th>
                            <?php echo $total2=$data2['u_english1']+$data2['u_english2']; ?>
                        </th>
                        <th>200</th>
                    </tr>
                    <tr>
                        <th>Math</th>
                        <th>
                            <?php echo $data2['u_math1']; ?>
                        </th>
                        <th>
                            <?php echo $data2['u_math2']; ?>
                        </th>
                        <th>
                            <?php echo $total3=$data2['u_math1']+$data2['u_math2']; ?>
                        </th>
                        <th>200</th>
                    </tr>
                    <tr>
                        <th>Physics</th>
                        <th>
                            <?php echo $data2['u_physics1']; ?>
                        </th>
                        <th>
                            <?php echo $data2['u_physics2']; ?>
                        </th>
                        <th>
                            <?php echo $total4=$data2['u_physics1']+$data2['u_physics2']; ?>
                        </th>
                        <th>200</th>
                    </tr>
                    <tr>
                        <th>Chemistry</th>
                        <th>
                            <?php echo $data2['u_chemestry1']; ?>
                        </th>
                        <th>
                            <?php echo $data2['u_chemestry2']; ?>
                        </th>
                        <th>
                            <?php echo $total5=$data2['u_chemestry1']+$data2['u_chemestry2']; ?>
                        </th>
                        <th>200</th>
                    </tr>
                    <br>
                    <tr>
                    
                        <th> Total </th>
                        <th>
                            <?php echo $data2['u_hindi1']+$data2['u_english1']+$data2['u_math1']+$data2['u_physics1']+$data2['u_chemestry1']; ?>
                        </th>
                        <th>
                            <?php echo $data2['u_hindi2']+$data2['u_english2']+$data2['u_math2']+$data2['u_physics2']+$data2['u_chemestry2']; ?>
                        </th>

                        <th><span class="colorchange">
                                <?php echo $all=$total1+$total2+$total3+$total3+$total4+$total5; ?>
                            </span></th>

                        <th>1000</th>

                    </tr>

                </table>
                <br><br>
                <h1 style="text-align: center;">You Are <span class="colorchange1">
                        <?php 
                            if($all<=500) 
                            {
                                echo "Fail";
                            }
                           else
                           {
                               echo "Pass with "; 
                               echo $percent=($all/1000)*(100);
                           }
                          ?>
                    </span></h1>

            </form>
        </div>  

    </header>


    <footer class="footer">
        <p>&copy 2021 <b>Shams Reza</b> </br>Designing Manager, Jean Bodin International School <br> Akash Vistara
            Foundation</p>
    </footer>

</body>

</html>

<?php
}
else
{
?>
<script>
alert('Record Not found');
    window.open('self.php','_self');
</script>
<?php
}

}

?>
