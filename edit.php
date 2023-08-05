<!DOCTYPE html>
<html>
    <title>EDIT</title>
    <head>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <style>
        .a2
        {
            padding-top: 2%;
            padding-bottom: 2%;
            background-color: palevioletred;
            font-style: inherit;
            margin-top: 1px;
            margin-bottom: 1px;
            border-style: dashed;
            border-left-width: 15px;
            border-right-width: 15px;
            border-top: 5px dashed darkblue;
            border-left-style: groove;
            border-left-color: black;
            border-right-style: groove;
            border-right-color: black;
            border-bottom: 5px dashed darkblue;
            border-radius: 12px;
            /*outline-color:gray;*/
        }
        body
        {
            background-color: aqua;
        }
        table
        {
          
          background-color: pink;
        }
        
        .m1
        {
            color: black;
            
        }
        
      </style>  
    </head>
     <div class="r2">
        <div class="container_12">
         <div class="a2 ">
             <h1><center><abbr title="software solutions">SSS</abbr>ACADEMY</center></h1>
         </div>
         </div>
        </div>
    <body>
        <div class="container">
        
            <h1><center>UPDATING THE STUDENT DETAILS</center></h1>
</div>
<?php
   //using session to keep the person logged in 
session_start();
include 'conn.php';

if(isset($_GET['id']))
{
    $id = mysqli_real_escape_string($con,$_GET['id']);
    //echo " $stud_id";
    $query = "select * from registry where id = '$id'";

    $queryrun = mysqli_query($con,$query);
    if($rows1 = mysqli_num_rows($queryrun)>0)
    {
            $student = mysqli_fetch_array($queryrun);
           //print_r($student);
            ?>
            
                <form action="" method="POST">
                          
                            <center><table border="1">
                            
                                <tr><td colspan="2"><center><b>MODIFICATION FORM</b></center></td></tr>
                                <tr>
                                    <td>Student id</td>
                                    <td><input type="number" name="stud_id" value="<?=$student['id'];?>"></td>
                                    <td></tr>
                                    <tr>
                                        <td>
                                        Firstname*</td>
                                        <td><input type="text" name="fname"  value="<?= $student['firstname']; ?>" required ></td>
                                        </tr>
                                        <tr><td>Lastname*</td>
                                        <td><input type="text" name="lname" value="<?= $student['lastname']; ?>"  ></td></tr>
                                        <tr><td>Address</td>
                                            <td><input type="textarea" rows="5" cols="22" name="ad" value="<?= $student['address']; ?>"></textarea></td></tr>
                                                <tr>
                                                    <td>
                                                        Gender
                                                    </td>
                                                    <td><input type="text" name="g" value="<?= $student['gender']; ?>"></td>
                                                        
                                                </tr>
                                        <tr>
                                            <td>
                                                Email
                                            </td>
                                            <td><input type="text" name="em" value="<?= $student['email']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" name="pwd" value="<?= $student['password']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>PhoneNo</td>
                                            <td><input type="number" name="no" value="<?= $student['phoneno']; ?>"</td>
                                        </tr>
                                        <tr>
                                            <td>Course Type</td>
                                            <td><input type="text" name="ctype" value="<?= $student['ctype']; ?>"></td>
                                            
                                        </tr>
                                        
                                        <tr align="center"><td>&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="UPDATE"></td>
                                        <td><a href="view.php" class="btn btn-alert btn-md">BACK</a></td
               
                                    </tr>
                                        
                                    
                                
                            </table>
                        </center>
                        </form>
        <?php
    }
    else
    {
        echo "<h1>NO SUCH DATA FOUND</h1>";
    }

}
?>
<?php
include 'conn.php';

if(isset($_POST['update']))
{
   if(isset($_POST['stud_id']))
   {

   
            $id=$_POST['stud_id'];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $address=$_POST['ad'];
            $gender=$_POST['g'];
            $email=$_POST['em'];
            $paswd=$_POST['pwd'];
            $phno=$_POST['no'];
            $ctype=$_POST['ctype'];

            $query = "update registry set firstname = '$fname' , lastname = '$lname', address = '$address', gender = '$gender', email = '$email', password = '$paswd', phoneno = '$phno', ctype = '$ctype' where id = '$id'";
            
            $queryrun = mysqli_query($con,$query);
            if($queryrun)
            {
                
                echo "Updated successfully";
            }
            else
            {
                echo "Not updated successfully";
            }
   }
    }

