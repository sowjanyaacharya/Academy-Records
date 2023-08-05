<?php
session_start();
include 'conn.php';
$per_page = 05;

if(isset($_GET["page"]))
{
    $page = $_GET['page'];
}
else
{
    $page = 1;
   
}
$start_from = ($page-1)* 05;

$query4 = "select * from registry limit $start_from,$per_page";
$queryrun = mysqli_query($con,$query4);
    
    ?>
    <!DOCTYPE html>
<html>
    <title>SEARCHING</title>
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
        /*table,td,th
        {
          border: 1px solid black;
          width: 1100px;
          background-color: pink;
        }*/
        
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
            <h1><center>REPORT OF THE STUDENTS</center></h1>
</div>
<form action=" " method="post">
<div class="container">
  
    
   <center> <button type="submit" class="btn btn-success" name="view">VIEW</button>
  <a class="m1" href="form.php" style="text-decoration: none;" >BACK</a>
    </center>
    

</div>
<center><table class="table table-bordered table-hover">
        <tr>
           <th>Id</th>&nbsp;&nbsp;
           <th>Firstname</th>&nbsp;&nbsp;
            <th>Lastname</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phoneno</th>
            <th>ctype</th>
            <th>Action</th>
            
    </tr>
   
    

</form>
<?php
include 'conn.php';
if(isset($_POST['view']))
{
    $query4 = "select * from registry";
    $queryrun = mysqli_query($con,$query4);
 

   while($row = mysqli_fetch_array($queryrun))
    {
      ?>
        <tr><td><?php echo $row['id']; ?> </td>
        <td><?php echo $row['firstname']; ?> </td> 
        <td><?php echo $row['lastname']; ?> </td> 
        <td><?php echo $row['address']; ?> </td> 
        <td><?php echo $row['gender']; ?> </td> 
        <td><?php echo $row['email']; ?> </td> 
        <td><?php echo $row['password']; ?> </td> 
        <td><?php echo $row['phoneno']; ?> </td> 
        <td><?php echo $row['ctype']; ?> </td> 
        <td><a href="edit1.php?id=<?=$row['id'];?>" class="btn btn-info btn-sm">View</a>
        <a href="edit.php?id=<?=$row['id'];?>" class="btn btn-success btn-sm">edit</a>
        <button type="submit" name="delete" value="<?=$row['id'];?>" class="btn btn-danger btn-sm">Delete</a></td>
       
        </tr>
      <?php
      
    }
}

 ?>
 </table>
</center>
<?php
include 'conn.php';

if(isset($_POST['delete']))
{
  if(isset($_POST['delete']))
  {
  $id = $_POST['delete'];
  $query4 = "delete from registry where id = '$id'";
  $queryrun2 = mysqli_query($con,$query4);
  if($queryrun2)
            {
                
                echo "Successfully deleted";
            }
            else
            {
                echo "Not deleted successfully";
            }
} 
}



?>
<?php 
include 'conn.php';
$query4 = "select * from registry";
$queryrun2 = mysqli_query($con,$query4);
$total = mysqli_num_rows($queryrun2);

$total_pages = ceil($total/$per_page);
//echo " $total_pages";

for($i=1;$i<=$total_pages;$i++)
{
  echo "<a href='view.php?page=".$i."'>".$i."</a>";
}
?>

</body>
          


</html>


