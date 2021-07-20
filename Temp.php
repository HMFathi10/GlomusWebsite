<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $CheckedRadioDest = $_GET['ProDest'];
        $CheckedRadio = $_GET['ProTypeQty'];
        $Category = $_GET["Category"];
        $ProName = $_GET["ProductName"];
        $ProPrice = $_GET["ProPrice"];
        $localhost = "localhost";
        $dbconnection = "root";
        $dbpassword = "rootroot";
        $dbname = "Glomus";
        $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
        print_r($_GET);
        if ($CheckedRadio == 1) {
            $AlarmProQty = $_GET["AlarmProQty"];
            $Quentity = $_GET["ProQty"];
            $sql = "call InsertIntoProduct('" . $ProName . "','" . $CheckedRadioDest . "','" . $Category . "','" . $CheckedRadio . "','" . $Quentity . "','" . $AlarmProQty . "','" . $ProPrice . "')";
            $results = mysqli_query($conn, $sql);
//            $row = mysqli_fetch_assoc($results);
//            $sql = "call InsertIntoTemp('" . $Code . "','" . $Quentity . "')";
//            $results = mysqli_query($conn, $sql);
//            if (!$results) {
//                die("Error");
//            }
            header("Location: http://localhost/Glomus/AddProduct.php");
            die();
        } else {
            $sql = "call InsertIntoProduct('" . $ProName . "','" . $CheckedRadioDest . "','" . $Category . "','" . $CheckedRadio . "','" . null . "','" . null . "','" . $ProPrice . "')";
            $results = mysqli_query($conn, $sql);
            header("Location: http://localhost/Glomus/AddProduct.php");
            die();
        }
        ?>
    </body>
</html>
