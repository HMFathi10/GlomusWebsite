<?php

$localhost = "localhost";
$dbconnection = "root";
$dbpassword = "rootroot";
$dbname = "glomus";
$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$type = 2;
$UsageName = $_POST['UsageName'];
$UsageQty = $_POST['UsageQty'];

$sql = "call ProductUsage('" . $type . "','" . $UsageName . "','" . $UsageQty . "')";
$results = mysqli_query($conn, $sql);
?>