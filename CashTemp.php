<?php

$ProID = $_POST['id'];
$ProName = $_POST['name'];
$ProDest = $_POST['ProDest'];
$ProType = $_POST['ProType'];

$ProQty = $_POST['qty'];
$ProCost = $_POST['Cost'];
$ProTotalCost = $_POST['TotalCost'];
$localhost = "localhost";
$dbconnection = "root";
$dbpassword = "rootroot";
$dbname = "glomus";
$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "call InsertIntoTemp('" . $ProID . "','" . $ProName . "','" . $ProDest . "','" . $ProType . "','" . $ProQty . "','" . $ProCost . "','" . $ProTotalCost . "')";
$results = mysqli_query($conn, $sql);
print_r($_POST);
?>
