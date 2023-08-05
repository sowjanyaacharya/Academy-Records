<?php
session_start();    //using session to keep the person logged in 

$con = mysqli_connect('localhost','root');   //connecting to the xampp mysqldatabase with servername and paswword
if($con)    //checking the database connection
{ echo"connection successfull";
}
else
{ echo "connection lost";
}
mysqli_select_db($con,'sessionpractice');  //connecting the particular databse
$name = $_POST['usrname'];
$pwd = $_POST['pswd'];

$query1 = "select * from signin where nameuser='$name' && password='$pwd' ";   

$result = mysqli_query($con,$query1);  //connecting databse connetion and the above query

$num = mysqli_num_rows($result);   //to track whether in the tables rows isthere or not to go through the entire row in the tabel

if($num==1)
{
    $_SESSION['usrname'] = $name;
 
    header('location:form.php');
}
else
{
    
    header('location:login.php');
}




















?>