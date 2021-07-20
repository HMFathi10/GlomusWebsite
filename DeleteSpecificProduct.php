<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = $_COOKIE["Id"];
        $localhost = "localhost";
        $dbconnection = "root";
        $dbpassword = "rootroot";
        $dbname = "Glomus";
        $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
        $sql = "call DeleteFromProduct('" . $a . "')";
        $results = mysqli_query($conn, $sql);
        header("Location: http://localhost/Glomus/AddNewCategory.php");
        die();
        ?>
    </body>
</html>
