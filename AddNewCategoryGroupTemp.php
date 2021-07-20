<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $NewCategoryGroupName = $_GET["NewCatName"];
        $localhost = "localhost";
        $dbconnection = "root";
        $dbpassword = "rootroot";
        $dbname = "Glomus";
        $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
        $sql = "call InsertIntoCategory('" . $NewCategoryGroupName . "')";
        $results = mysqli_query($conn, $sql);
        header("Location: http://localhost/Glomus/AddProduct.php");
        die();
        ?>
    </body>
</html>
