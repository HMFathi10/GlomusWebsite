<?php

$ModifyId = $_POST['OrderId'];
$ModifyProductId = $_POST['ProductId'];
$ModifyProductName = $_POST['ProductName'];
$ModifyOldQty = $_POST['OldQty'];
$ModifyNewOty = $_POST['NewQty'];

$localhost1 = "localhost";
$dbconnection1 = "root";
$dbpassword1 = "rootroot";
$dbname1 = "glomus";
$conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}

$Desc = "تم تغير كمية " . $ModifyProductName . " مـــن:  " . $ModifyOldQty . "الــــي :  " . $ModifyNewOty . ".";
$sql1 = "call UpdateOrderDescription('" . $ModifyId . "','" . $ModifyProductId . "','" . $ModifyProductName . "','" . $ModifyOldQty . "','" . $ModifyNewOty . "','" . $Desc . "')";
$results1 = mysqli_query($conn1, $sql1);
//
//
//$localhost = "localhost";
//$dbconnection = "root";
//$dbpassword = "rootroot";
//$dbname = "glomus";
//$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//$sql = "call UpdateOrder('" . $ModifyId . "','" . false . "')";
//$results = mysqli_query($conn, $sql);
//
//$localhost2 = "localhost";
//$dbconnection2 = "root";
//$dbpassword2 = "rootroot";
//$dbname2 = "glomus";
//$conn2 = new mysqli($localhost2, $dbconnection2, $dbpassword2, $dbname2);
//if ($conn2->connect_error) {
//    die("Connection failed: " . $conn2->connect_error);
//}
//$Desc = "تم تغير كمية " . $ModifyProductName . "مـــن:  " . $ModifyOldQty . "الــــي:  " . $ModifyNewOty . ".";
//$sql2 = "call InsertIntoTrack('" . $ModifyId . "','" . $ModifyProductId . "','" . $ModifyProductName . "','" . $Desc . "')";
//$results2 = mysqli_query($conn2, $sql2);
//?>