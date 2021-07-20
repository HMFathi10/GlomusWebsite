<?php

$Type = $_POST['Type'];
$Cost = $_POST['OfferCost'];
$DiscountCost = $_POST['OfferDis'];
$localhost1 = "localhost";
$dbconnection1 = "root";
$dbpassword1 = "rootroot";
$dbname1 = "glomus";
$conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
if ($Type == 1) {
    $sql1 = "call InsertIntoOrder('" . $Type . "','','','','','" . true . "','" . $DiscountCost . "','" . $Cost . "','0','" . true . "','" . true . "')";
    $results1 = mysqli_query($conn1, $sql1);
} else {
    $CustomerName = $_POST['CustName'];
    $CustomerPhoneNumber = $_POST['CustPhoneNumber'];
    $CustomerAddress = $_POST['CustAddress'];
    $DeliveryCost = $_POST['DeliveryCost'];
    $sql1 = "call InsertIntoOrder('" . $Type . "','" . $CustomerName . "','" . $CustomerPhoneNumber . "','" . $CustomerAddress . "','','" . true . "','" . $DiscountCost . "','" . $Cost . "','" . $DeliveryCost . "','" . true . "','" . false . "')";
    $results1 = mysqli_query($conn1, $sql1);

    $sql1 = "call CheckCustomerData('" . $CustomerName . "','" . $CustomerPhoneNumber . "','" . $CustomerAddress . "')";
    $results1 = mysqli_query($conn1, $sql1);
}
$localhost11 = "localhost";
$dbconnection11 = "root";
$dbpassword11 = "rootroot";
$dbname11 = "glomus";
$conn11 = new mysqli($localhost11, $dbconnection11, $dbpassword11, $dbname11);
$sql11 = "call CopyDataFromTempToOrderDescription()";
$results11 = mysqli_query($conn11, $sql11);

$localhost = "localhost";
$dbconnection = "root";
$dbpassword = "rootroot";
$dbname = "glomus";
$conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select * from Temp";
$results = mysqli_query($conn, $sql);


$localhost4 = "localhost";
$dbconnection4 = "root";
$dbpassword4 = "rootroot";
$dbname4 = "glomus";
$conn4 = new mysqli($localhost4, $dbconnection4, $dbpassword4, $dbname4);


$localhost2 = "localhost";
$dbconnection2 = "root";
$dbpassword2 = "rootroot";
$dbname2 = "glomus";
$conn2 = new mysqli($localhost2, $dbconnection2, $dbpassword2, $dbname2);
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
while ($row = mysqli_fetch_assoc($results)) {
    $sql2 = "call InsertIntoCalc('" . $row['ProID'] . "','" . $row['ProName'] . "','" . $row['ProType'] . "','" . $row['ProQty'] . "','" . $row['ProCost'] . "','" . true . "')";
    $results2 = mysqli_query($conn2, $sql2);
    if ($row['ProType'] == 1) {
        $sql4 = "call UpdateProductQty('" . $row['ProID'] . "','" . $row['ProQty'] . "')";
        $results4 = mysqli_query($conn4, $sql4);
    }
}

$localhost3 = "localhost";
$dbconnection3 = "root";
$dbpassword3 = "rootroot";
$dbname3 = "glomus";
$conn3 = new mysqli($localhost3, $dbconnection3, $dbpassword3, $dbname3);
if ($conn3->connect_error) {
    die("Connection failed: " . $conn3->connect_error);
}

$sql3 = "delete from Temp";
$results3 = mysqli_query($conn3, $sql3);
?>