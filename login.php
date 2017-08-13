<?php
include './db.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="bs/bootstrap.min.css">
        <script type="text/javascript" src="bs/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 class="jumbotron text-center">LogIn</h1>
        
        <form style="width: 500px" class="center-block" action=" " method="POST">
            <div class="form-group">
                <label for="email">User Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>

            <button type="submit" class="btn btn-default" name="btn_login" id="btn">Login</button>
            <button type="submit" class="btn btn-danger" name="btn_reg" id="btn">Reg</button>
        </form>


    </body>
</html>


<?php

 global $con;


if (isset($_POST['btn_login'])) {

    $un = $_POST['name'];
    $up = $_POST['pass'];
    
    $sql = "SELECT * FROM login WHERE name = '$un' AND pass = '$up'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    
    
    if ($row['name']  == $un && $row['pass']  == $up) {
       
        
        
        header ("Location: ./index.php");
    }
 else {
        echo "<script>alert('Reg First')</script>";
    }
    
    
}
?>



