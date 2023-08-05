<?php
session_start();
if(!isset($_SESSION['usrname'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Courses Offered by Academy
        </title>
        
        <link rel="stylesheet" href="style1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <style>
            .aa
            {
                background-color: palevioletred;
                font-weight: bold;
                color: blue;
            }
        </style> 
           </head>
          
      
    <body>
        <div class="main">
               <div class="container_12">
                <div class="a2 ">
                    <h1><center><abbr title="software solutions">SSS</abbr>ACADEMY</center></h1>
                </div>
                
                    <div class="row r1">
                
                

                        <div class="col-sm-12 col-lg-3" >
                            
                          
                           <a class="m1" href="courses.php" style="text-decoration: none;"><b>COURSES OFFERED</b></a></div>
                           <div class="col-sm-12 col-lg-3" >
                        
                           <a  class="m1" href="search.php" style="text-decoration: none;"><b>AUTOMATION</b></a></div>
                           <!-- <li><a href="mission.html" style="text-decoration: none;">Bookigs</a></li> -->
                           <div class="col-sm-12 col-lg-3" >
                           <a  class="m1" href="view.php" style="text-decoration: none;"><b>VIEW</b></a>  
                              </div>
                              <div class="col-sm-12 col-lg-3" >
                              <a class="m1" href="logout.php" style="text-decoration: none;"><b>LOGOUT</b></a></div>
                              </div>

                            
                        
                       
             <!-- <div class="row r1">
                
                

                <div class="col-sm-12 col-lg-3" >
                <button class="btn btn-primary">Information</button>
            </div>
            <div class="col-sm-12 col-lg-3">
                <button class="btn btn-info">courses</button>
            </div>
            <div class="col-sm-12 col-lg-3">
                <button class="btn btn-success">academyinfo</button>
            </div>
            <div class="col-sm-12 col-lg-3">
                <button class="btn btn-warning">oops!!!</button>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="text-primary text-center" >Hello everyone Hurry up!!!</div>
            </div>
        </div>-->

        
       
        <h1 class="aa"><center><marquee>SPECIAL TRENDING COURSES OFFERED BY ACADEMY</marquee></center></h1>
         
            <center><h2 style=background-color:purple;font-style:italic>LOGIN THEN FILLUP THE FORM FOR REGISTRATION OF CERTIFICATE COURSE!!!</h2></center>
            <h6 id="a1">Note:Once you submit can't edit the changes</h6>

            <form method="POST" >
           
            <center><table border="1" >
                <tr><td colspan="2"><center><b>REGISTRATION FORM</b></center></td></tr>
                <tr>
                    <td>
                        Firstname*</td>
                        <td><input type="text" name="fname" placeholder="firstname" required ></td>
                        </tr>
                        <tr><td>Lastname*</td>
                        <td><input type="text" name="lname" placeholder="lastname" required ></td></tr>
                        <tr><td>Address</td>
                            <td><textarea rows="5" cols="22" name="ad" required></textarea></td></tr>
                                <tr>
                                    <td>
                                        Gender
                                    </td>
                                    <td><input type="radio" name="g" value="Female">Female
                                        <input type="radio" name="g" value="Male">Male</td>
                                </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td><input type="text" name="em" placeholder="aaa@gmail.com" required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="pwd" required></td>
                        </tr>
                        <tr>
                            <td>PhoneNo</td>
                            <td><input type="number" name="no" required></td>
                        </tr>
                        <tr>
                            <td>Course Type</td>
                            <td><select name="ctype">
                                <option>Ds using python</option>
                                <option>AZURE</option>
                                <option>Power BI</option>
                                <option>IOT</option>

                            </select></td>
                        </tr>
                         <tr>
                            <td colspan="2">
                            <input type="checkbox" name="chk">Details true according to my Knowledge</td>
                         </tr>
                         <tr align="center"><td>&nbsp;&nbsp;&nbsp;<input type="submit" value="SUBMIT" name="submit"></td>
                        <td><input type="reset" value="RESET"></td></tr>
                        
                    
                
            </table>
        </center>
        </form>
        <?php
        include 'conn.php';
        if(isset($_POST['submit']))
        {
            //$id=$_POST['id'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $address=$_POST['ad'];
            $gender=$_POST['g'];
            $email=$_POST['em'];
            $paswd=$_POST['pwd'];
            $phno=$_POST['no'];
            $ctype=$_POST['ctype'];
        
        
        
        $sql="insert into registry(firstname,lastname,address,gender,email,password,phoneno,ctype)values('$fname','$lname','".$address."','$gender','".$email."','".$paswd."','$phno','".$ctype."')";
        
             mysqli_query($con,$sql) or die(mysqli_error($con))  ;
        
            echo "<script>alert('new record inserted')</script>";
        }
        ?> 
    </body>
</html>