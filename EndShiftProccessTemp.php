<?php

$localhost1 = "localhost";
$dbconnection1 = "root";
$dbpassword1 = "rootroot";
$dbname1 = "glomus";
$conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}

$localhost2 = "localhost";
$dbconnection2 = "root";
$dbpassword2 = "rootroot";
$dbname2 = "glomus";
$conn2 = new mysqli($localhost2, $dbconnection2, $dbpassword2, $dbname2);
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}


$localhost = "localhost";
$dbconnection = "root";
$dbpassword = "rootroot";
$dbname = "glomus";
$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select sum(OrderDiscountCost) as TotalDisPrice from Orders where IfCancled = 0";
$results = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($results);
$sql1 = "select count(*) as TotalDisCount from Orders where OrderDiscountCheck = 1 and IfCancled = 0";
$results1 = mysqli_query($conn1, $sql1);
$row1 = mysqli_fetch_assoc($results1);
$sql2 = "call UpdateReviewData(1,'" . $row1['TotalDisCount'] . "','" . $row['TotalDisPrice'] . "')";
$results2 = mysqli_query($conn2, $sql2);


$sql = "select sum(OrderCost) as TotalDisPrice from Orders where OrderType = 1 and IfCancled = 0";
$results = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($results);
$sql1 = "select count(*) as TotalDisPrice from Orders where OrderType = 1 and IfCancled = 0";
$results1 = mysqli_query($conn1, $sql1);
$row1 = mysqli_fetch_assoc($results1);
$sql2 = "call UpdateReviewData(2,'" . $row1['TotalDisPrice'] . "','" . $row['TotalDisPrice'] . "')";
$results2 = mysqli_query($conn2, $sql2);




$sql = "select sum(OrderCost-OrderDeliveryCost) as TotalDisPrice from Orders where OrderType = 2 and IfCancled = 0";
$results = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($results);
$sql1 = "select count(*) as TotalDisPrice from Orders where OrderType = 2 and IfCancled = 0";
$results1 = mysqli_query($conn1, $sql1);
$row1 = mysqli_fetch_assoc($results1);
$sql2 = "call UpdateReviewData(3,'" . $row1['TotalDisPrice'] . "','" . $row['TotalDisPrice'] . "')";
$results2 = mysqli_query($conn2, $sql2);


$sql = "select sum(OrderDeliveryCost) as TotalDisPrice from Orders where OrderType = 2 and IfCancled = 0";
$results = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($results);
$sql1 = "select count(*) as TotalDisPrice from Orders where OrderType = 2 and IfCancled = 0";
$results1 = mysqli_query($conn1, $sql1);
$row1 = mysqli_fetch_assoc($results1);
$sql2 = "call UpdateReviewData(4,'" . $row1['TotalDisPrice'] . "','" . $row['TotalDisPrice'] . "')";
$results2 = mysqli_query($conn2, $sql2);






$sql = "select * from Calc";
$results = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($results)) {
    if ($row['CalcQty'] > 0) {
        $sql1 = "call InsertIntoExpensesReview('" . $row['CalcProId'] . "','" . $row['CalcProName'] . "','" . $row['CalcProType'] . "','" . $row['CalcQty'] . "','" . $row['CalcPrice'] . "','" . $row['CalcType'] . "')";
        $results1 = mysqli_query($conn1, $sql1);
    }
}

$sql = "select * from Expenses where ExpIsDeleted = 0";
$results = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($results)) {

    $sql1 = "call InsertIntoRealExpenses('" . $row['ExpType'] . "','" . $row['ExpQty'] . "','" . $row['ExpProName'] . "','" . $row['ExpCost'] . "')";
    $results1 = mysqli_query($conn1, $sql1);
}
//$sql = "delete from Expenses";
//$results = mysqli_query($conn, $sql);
//$sql = "delete from Calc";
//$results = mysqli_query($conn, $sql);
//$sql = "delete from Orders";
//$results = mysqli_query($conn, $sql);
//$sql = "delete from OrderDescription";
//$results = mysqli_query($conn, $sql);
//$sql = "call ResetValues()";
//$results = mysqli_query($conn, $sql);
?>