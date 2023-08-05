<!DOCTYPE html>
<html>    
    <title>Login page</title>
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
        body{
            background-color: aqua;
        }
    </style>
    </head>

    <div class="main">
        <div class="container_12">
         <div class="a2 ">
             <h1><center><abbr title="software solutions">SSS</abbr>ACADEMY</center></h1>
         </div>
         </div>
        </div>
        <body>   
   
    <div class="container">
        <div class="row">
        <div class="col-lg-6">
            <form action="validation.php" method="post">
            <div class="form-group">
                <h1>LOGIN FORM</h1>
                <label>USERNAME</label>
                <input type="text" name="usrname" class="form-control" placeholder="ENTER YOUR NAME" required>
                <label>PASSWORD</label>
                <input type="password" name="pswd" class="form-control" placeholder="ENTER YOUR PASSWORD" required>
                <button class="btn btn-primary">LOGIN</button>
            </div>
            </form>
        </div>
        <div class="col-lg-6">
            <form action="signin.php" method="post">
            <div class="form-group">
                <h1>SIGNIN FORM</h1>
                <label>USERNAME</label>
                <input type="text" name="usrname" class="form-control" placeholder="ENTER YOUR NAME" required>
                <label>PASSWORD</label>
                <input type="password" name="pswd" class="form-control" placeholder="ENTER YOUR PASSWORD" required>
                <button class="btn btn-primary">SIGNIN</button>
            </div>
            </form>
        </div>
        </div>
    </div>
   


                
</body>
</html>