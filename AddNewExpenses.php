<?php

$localhost = "localhost";
$dbconnection = "root";
$dbpassword = "rootroot";
$dbname = "glomus";
$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$type = 1;
$ExpensesName = $_POST['ExpensesName'];
$ExpensesCost = $_POST['ExpensesCost'];

$sql = "call InsertIntoExpenses('" . $type . "','" . null . "','" . $ExpensesName . "','" . $ExpensesCost . "')";
$results = mysqli_query($conn, $sql);
?>