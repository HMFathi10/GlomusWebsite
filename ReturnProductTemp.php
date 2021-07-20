<?php

$ModifyId = $_POST['OrderId'];
$ModifyProductId = $_POST['ProductId'];
$ModifyProductName = $_POST['ProductName'];
$Desc = "تم استرجاع " . $ModifyProductName;
$localhost1 = "localhost";
$dbconnection1 = "root";
$dbpassword1 = "rootroot";
$dbname1 = "glomus";
$conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
$sql1 = "call ReturnOrderDescription('" . $ModifyId . "','" . $ModifyProductId . "','" . $ModifyProductName . "','" . $Desc . "')";
$results1 = mysqli_query($conn1, $sql1);
?>