<?php
  
// Server name must be localhost
$servername = "localhost";
  
// In my case, user name will be root
$username = "root";
  
// Password is empty
$password = "";

$dbname = "sessionpractice";
#$dbname = "registration";
  
// Creating a connection
$con = mysqli_connect($servername, $username, $password, $dbname);


// Check connection

if(mysqli_connect_errno())
{
echo "failed";
}?>
<!---else
{
echo "success";
}--->

