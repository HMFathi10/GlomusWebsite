<?php
$CustomerPhone = $_POST['PhoneNumber'];
$localhost = "localhost";
$dbconnection = "root";
$dbpassword = "rootroot";
$dbname = "glomus";
$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "call SearchInCustomerData('" . $CustomerPhone . "')";
$results = mysqli_query($conn, $sql);
if (!$results) {
    die("Error");
}
$row = mysqli_fetch_assoc($results);
setcookie('CustomerName', $row['CustomerName']);
setcookie('CustomerAdd', $row['CustomerAddress']);
?>
