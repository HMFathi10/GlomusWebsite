<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $CusName = $_GET["CusName"];
        $PhoneNumber = $_GET["PhoneNumber"];
        $Address = $_GET["Address"];
        $OccasionDes = $_GET["OccasionDes"];
        $OccasionDate = $_GET["OccasionDate"];
        print_r($_GET);
        $localhost = "localhost";
        $dbconnection = "root";
        $dbpassword = "rootroot";
        $dbname = "Glomus";
        $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
        $sql = "call InsertIntoOccasions('" . $CusName . "','" . $PhoneNumber . "','" . $Address . "','" . $OccasionDes . "','" . $OccasionDate . "')";
        $results = mysqli_query($conn, $sql);
//            $row = mysqli_fetch_assoc($results);
//            $sql = "call InsertIntoTemp('" . $Code . "','" . $Quentity . "')";
//            $results = mysqli_query($conn, $sql);
//            if (!$results) {
//                die("Error");
//            }
        header("Location: http://localhost/Glomus/Occasions.php");
        die();
        ?>
    </body>
</html>
