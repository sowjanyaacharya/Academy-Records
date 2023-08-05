
<!DOCTYPE html> 
<html>
    <title>AUTOMATION</title>
    <head>
        <link rel="stylesheet" href="#">
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
            .row
                {
                    padding-top: 1%;
                padding-bottom: 1%;
                background-color: goldenrod;
                font-style: inherit;
                margin-top: 1px;
                margin-bottom: 1px;
                border-left-width: 20px;
                border-right-width: 20px;
                border-top: 5px dotted purple;
                border-bottom: 5px dotted purple;
                
                    
                }
            body
            {
                background-color: aqua;
            }
            table,td,th
        {
          border: 1px solid black;
          width: 1100px;
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
        <form action=" " method="post">
<div class="container">
  
<center><input type="number" name="id" placeholder="Enter Your ID">
    <button type="submit" class="btn btn-success" name="search">SEARCH</button>
  <a class="m1" href="form.php" style="text-decoration: none;" >BACK</a>
    </center>
    

</div>
<center><table>
        <tr>
           <th>ID</th>
           <th>Firstname</th>&nbsp;&nbsp;
            <th>Lastname</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phoneno</th>
            <th>ctype</th>
       
    </tr>
   
    </center>

</form>
<?php
session_start();
include 'conn.php';
if(isset($_POST['search']))
{
    if(isset($_POST['id']))
    {
    $id = $_POST['id'];
    $query5 = "select * from registry where id = '$id'";
    $queryrun2 = mysqli_query($con,$query5);

   while($row = mysqli_fetch_array($queryrun2))
    {
      ?>
        <tr>
            <td><?php echo $row['id'];?></td>
        <td><?php echo $row['firstname']; ?> </td> 
        <td><?php echo $row['lastname']; ?> </td> 
        <td><?php echo $row['address']; ?> </td> 
        <td><?php echo $row['gender']; ?> </td> 
        <td><?php echo $row['email']; ?> </td> 
        <td><?php echo $row['password']; ?> </td> 
        <td><?php echo $row['phoneno']; ?> </td> 
        <td><?php echo $row['ctype']; ?> </td> 
       
        </tr>
      <?php
    }
}
}

?>
   
        </body>
    
</html>