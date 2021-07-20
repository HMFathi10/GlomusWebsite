
<?php

$localhost = "localhost";
$dbconnection = "root";
$dbpassword = "rootroot";
$dbname = "glomus";
$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "delete from OrdersReview";
$results = mysqli_query($conn, $sql);
$sql = "delete from ExpensesReview";
$results = mysqli_query($conn, $sql);
$sql = "call ResetReviewData()";
$results = mysqli_query($conn, $sql);
$sql = "delete from RealExpenses";
$results = mysqli_query($conn, $sql);
header("Location: http://localhost/Glomus/Home.php");
die();
?>

