<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $OccCode = $_COOKIE['OccId'];
        $localhost1 = "localhost";
        $dbconnection1 = "root";
        $dbpassword1 = "rootroot";
        $dbname1 = "glomus";
        $conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
        if ($conn1->connect_error) {
            die("Connection failed: " . $conn1->connect_error);
        }
        $sql1 = "call DeleteFromOccasions('" . $OccCode . "')";
        $results1 = mysqli_query($conn1, $sql1);
        if (!$results1) {
            die("Error");
        }
        header("Location: http://localhost/Glomus/Occasions.php");
        die();
        ?>
    </body>
</html>
