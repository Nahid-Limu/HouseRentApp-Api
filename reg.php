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
        <form style="width: 500px" class="center-block" action=" " method="POST">
            <div class="form-group">
                <label for="email">User Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>
            <div class="form-group">
                <label for="pwd">Phone:</label>
                <input type="text" class="form-control" id="phn" name="phn">
            </div>

            <button type="submit" class="btn btn-default" name="btn" id="btn">Submit</button>
        </form>


    </body>
</html>


<?php

 global $con;


if (isset($_POST['btn'])) {

    $un = $_POST['name'];
    $up = $_POST['pass'];
    $phn = $_POST['phn'];
    
    $query = "INSERT INTO `login` (name, pass, phn) VALUES ('$un','$up','$phn')";

    $insert = mysqli_query($con, $query);
    
    if (isset($insert)) {

                echo "<script>alert('Thank You For Being With Us')</script>";
                
            }
}
?>



