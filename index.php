<?php
include './db.php';

function show() {
    global $con;
    $sql = "SELECT * FROM `rent`";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['rent'] . "</td>";
        echo "<td>" . $row['details'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="bs/bootstrap.min.css">
        <script type="text/javascript" src="bs/bootstrap.min.js"></script>
    </head>
    <body>
        <h1 class="text-center">House Rent</h1>

        <table class=" table table-bordered center-block" style="width: 400px">
            <thead>
            <h2 class="text-center">Post</h2>
            <tr>
                <td>ID</td>
                <td>Type</td>
                <td>Rent</td>
                <td>Details</td>
                <td>Contact</td>
                <td>Address</td>
                <td>Date</td>

            </tr>


        </thead>
        <tbody>
            
            
                <?php
                
                show();
                
                ?>
            

        </tbody>

    </table>


</body>
</html>

