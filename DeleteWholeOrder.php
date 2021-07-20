<?php

$Desc = "تم حذف هذا الاوردر";
$localhost = "localhost";
$dbconnection = "root";
$dbpassword = "rootroot";
$dbname = "glomus";
$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ModifyId = $_POST['OrderId'];
$OrderType = $_POST['OrderType'];
$OrderName = $_POST['OrderName'];
$OrderPhone = $_POST['OrderPhone'];
$OrderAddress = $_POST['OrderAddress'];
$OrderDateTime = $_POST['OrderDateTime'];
$OrderDiscountCheck = $_POST['OrderDiscountCheck'];
$OrderDiscountCost = $_POST['OrderDiscountCost'];
$OrderCost = $_POST['OrderCost'];
$OrderDeliveryCost = $_POST['OrderDeliveryCost'];
$OrderDone = $_POST['OrderDone'];
$IfCancled = $_POST['IfCancled'];

$localhost1 = "localhost";
$dbconnection1 = "root";
$dbpassword1 = "rootroot";
$dbname1 = "glomus";
$conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
$sql1 = "select * from OrderDescription where OrderMainID = '" . $ModifyId . "'";
$results1 = mysqli_query($conn1, $sql1);
while ($row1 = mysqli_fetch_assoc($results1)) {
    if ($row1['ProType'] == 1) {
        $sql = "call CancleOrderDescription('" . $ModifyId . "','" . $row1['ProID'] . "')";
        $results = mysqli_query($conn, $sql);
    } else {
        $sql = "call CancleOrderDescriptionSec('" . $ModifyId . "','" . $row1['ProID'] . "')";
        $results = mysqli_query($conn, $sql);
    }
}
$sql = "call InsertIntoOrdersReview('" . $ModifyId . "','" . $OrderType . "','" . $OrderName . "','" . $OrderPhone . "','" . $OrderAddress . "','" . $OrderDiscountCheck . "','" . $OrderDiscountCost . "','" . $OrderCost . "','" . $OrderDeliveryCost . "','" . $IfCancled . "')";
$results = mysqli_query($conn, $sql);

$sql = "call CancleOrder('" . $ModifyId . "','" . true . "','" . $Desc . "')";
$results = mysqli_query($conn, $sql);
print_r($_POST);
?>