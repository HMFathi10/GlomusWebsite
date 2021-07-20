<?php

$localhost = "localhost";
$dbconnection = "root";
$dbpassword = "rootroot";
$dbname = "glomus";
$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ExpensesId = $_POST['ExpensesId'];
$sql = "call DeleteExpenses('" . $ExpensesId . "')";
$results = mysqli_query($conn, $sql);
?>