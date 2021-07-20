<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $CheckedRadioDest = $_GET['ProDest'];
        $Quentity = $_GET["ProQty"];
        $Category = $_GET["Category"];
        $ProName = $_GET["ProductName"];
        $ProPrice = $_GET["ProPrice"];
        $AlarmProQty = $_GET["AlarmProQty"];
        $a = $_COOKIE["Id"];
        print_r($_GET);
        echo $a;

        $localhost1 = "localhost";
        $dbconnection1 = "root";
        $dbpassword1 = "rootroot";
        $dbname1 = "Glomus";
        $conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);

        $sql1 = "call CheckIsReviewed()";
        $results1 = mysqli_query($conn1, $sql1);
        $row1 = mysqli_fetch_assoc($results1);
        if ($row1['result'] == true) {
            $localhost = "localhost";
            $dbconnection = "root";
            $dbpassword = "rootroot";
            $dbname = "Glomus";
            $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);

            $sql = "call UpdateProduct('" . $a . "','" . $ProName . "','" . $CheckedRadioDest . "','" . $Category . "','" . $Quentity . "','" . $AlarmProQty . "','" . $ProPrice . "')";
            $results = mysqli_query($conn, $sql);
        } else {
            $localhost = "localhost";
            $dbconnection = "root";
            $dbpassword = "rootroot";
            $dbname = "Glomus";
            $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);

            $sql = "call UpdateQtyProduct('" . $a . "','" . $Quentity . "','" . $AlarmProQty . "')";
            $results = mysqli_query($conn, $sql);
        }

//            $row = mysqli_fetch_assoc($results);
//            $sql = "call InsertIntoTemp('" . $Code . "','" . $Quentity . "')";
//            $results = mysqli_query($conn, $sql);
//            if (!$results) {
//                die("Error");
//            }
        header("Location: http://localhost/Glomus/AddNewCategory.php");
        die();
        ?>
    </body>
</html>
