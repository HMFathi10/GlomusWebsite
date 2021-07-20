<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Product</title>
        <!--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="stylesheet.css" >
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        -->
        <link href="Boot/bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="Boot/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="Boot/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
        <script src="Boot/Jquery.js"></script>
        <link href="stylesheet.css" rel="stylesheet">


        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            /* Style inputs, select elements and textareas */
            input[type=text], select, textarea{
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                resize: vertical;
            }

            /* Style the label to display next to the inputs */
            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            /* Style the submit button */
            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            /* Style the container */
            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            /* Floating column for labels: 25% width */
            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            /* Floating column for inputs: 75% width */
            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }
        </style>
    </head>
    <body>
        <script src="Boot/bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

        <div>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2978b5">
                <div class="container-fluid" style="float: right;background-color: #2978b5;">
                    <a class="navbar-brand" href="Home.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">Glomus</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link "  href="MakeNewOrder.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">عمل اوردر</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="OrdersSection.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">الأوردرات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Expenses.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">الـمـصـروفـات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="EndShiftSection.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">تقفيل ورديه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ReviewWhole.php" onclick="document.getElementById('exampleInputPassword2').value = '';" data-toggle="modal" data-target="#myModal1"  style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">الجرد</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="AddNewCategory.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">الأصناف</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Notifications.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">التنبيهات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Occasions.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">المناسبات</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <script>
            function getPassword1() {
                var pass = document.getElementById('exampleInputPassword2').value;
                if (pass == "asd") {
                    window.location = 'http://localhost/Glomus/ReviewWhole.php';
                } else {
                    alert("Wrong");
                }
            }
        </script>
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal1">&times;</button>
                        <h4 class="modal-title">Log in</h4>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  onclick="getPassword1()">Log in</button>
                    </div>
                </div>

            </div>
        </div>
        <div style="text-align: center; margin: 20px 0;">
            <h3>تعديل الأصناف</h3>
        </div>
        <script>
            function IFDelete() {
                if (confirm("هل تريد حذف هذا الصنف ؟؟")) {
                    window.location = 'http://localhost/Glomus/DeleteSpecificProduct.php';
                }
            }
        </script>
        <?php
        $localhost2 = "localhost";
        $dbconnection2 = "root";
        $dbpassword2 = "rootroot";
        $dbname2 = "glomus";
        $conn2 = new mysqli($localhost2, $dbconnection2, $dbpassword2, $dbname2);
        if ($conn2->connect_error) {
            die("Connection failed: " . $conn2->connect_error);
        }
        $sql2 = "call CheckIsReviewed()";
        $results2 = mysqli_query($conn2, $sql2);

        $row2 = mysqli_fetch_assoc($results2);


        $localhost = "localhost";
        $dbconnection = "root";
        $dbpassword = "rootroot";
        $dbname = "glomus";
        $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $a = $_COOKIE["Id"];
        $sql1 = "select * from Product where ProCode = '" . $a . "'";
        $results1 = mysqli_query($conn, $sql1);
        if (!$results1) {
            die("Error");
        }
        $row = mysqli_fetch_assoc($results1);
        ?>
        <?php
        $sql = "select * from ProductCategory";
        $results = mysqli_query($conn, $sql);
        if (!$results) {
            die("Error");
        }
        ?>
        <div class="container">
            <form method="get" action="SecTemp.php" style="padding: 30px;font-size: 23px;text-align: right">
                <?php if ($row2['result'] == 1): ?>
                    <div class="row">
                        <div class="col-25">
                            <label for="country">الفئة</label>
                        </div>
                        <div class="col-75">
                            <select id="Category" name="Category">
                                <option value=""></option>
                                <?php while ($row1 = mysqli_fetch_assoc($results)): ?>
                                    <?php if ($row["CategoryId"] == $row1["CatId"]): ?>
                                        <option value="<?php echo $row1['CatName']; ?>" selected><?php echo $row1['CatName']; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $row1['CatName']; ?>"><?php echo $row1['CatName']; ?></option>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="fname">أسم الصنف </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="ProName" name="ProductName" value="<?php echo $row["ProName"]; ?>">
                        </div>
                    </div>

                    <?php if ($row["ProDest"] == 1) : ?>
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">مكان التجهيز</label>
                            </div>
                            <div class="col-75">
                                <div style="float: right;" >
                                    <input type="radio"   name="ProDest" value="1" checked="true">
                                    <label for="Normal">بــار</label><br>
                                </div>
                                <div style="float: right;margin-right: 10px;">
                                    <input type="radio"  name="ProDest" value="2" >
                                    <label for="Normal">مـطـبـخ</label><br>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">مكان التجهيز</label>
                            </div>
                            <div class="col-75">
                                <div style="float: right;" >
                                    <input type="radio"   name="ProDest" value="1" >
                                    <label for="Normal">بــار</label><br>
                                </div>
                                <div style="float: right;margin-right: 10px;">
                                    <input type="radio"  name="ProDest" value="2" checked="true">
                                    <label for="Normal">مـطـبـخ</label><br>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">الـنـوع</label>
                        </div>
                        <div class="col-75">
                            <?php if ($row["ProType"] == 1) : ?>
                                <div style="float: right;" >
                                    <input type="radio"  onclick="EnableQty()" name="ProTypeQty" value="1" checked="true" disabled="true">
                                    <label for="Normal">عدد</label><br>
                                </div>
                                <div style="float: right;margin-right: 10px;">
                                    <input type="radio" onclick="DisableQty()"  name="ProTypeQty" value="2"  disabled="true">
                                    <label for="Normal">كمية</label><br>
                                </div>
                            <?php else : ?>
                                <div style="float: right;" >
                                    <input type="radio"  onclick="EnableQty()" name="ProTypeQty" value="1"  disabled="true">
                                    <label for="Normal">عدد</label><br>
                                </div>
                                <div style="float: right;margin-right: 10px;">
                                    <input type="radio" onclick="DisableQty()"  name="ProTypeQty" value="2" checked="true" disabled="true">
                                    <label for="Normal">كمية</label><br>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">السعر</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="ProPrice" value="<?php echo $row["SellingPrice"]; ?>" min="1" style="width: 50%;text-align: -webkit-center;float: right" >
                        </div>
                    </div>
                <?php else: ?>

                    <div class="row">
                        <div class="col-25">
                            <label for="country">الفئة</label>
                        </div>
                        <div class="col-75">
                            <select id="Category" name="Category" disabled="true">
                                <option value=""></option>
                                <?php while ($row1 = mysqli_fetch_assoc($results)): ?>
                                    <?php if ($row["CategoryId"] == $row1["CatId"]): ?>
                                        <option value="<?php echo $row1['CatName']; ?>" selected><?php echo $row1['CatName']; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $row1['CatName']; ?>"><?php echo $row1['CatName']; ?></option>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="fname">أسم الصنف </label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="ProName" name="ProductName" disabled="true" value="<?php echo $row["ProName"]; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname">الـنـوع</label>
                        </div>
                        <div class="col-75">
                            <?php if ($row["ProType"] == 1) : ?>
                                <div style="float: right;" >
                                    <input type="radio"  onclick="EnableQty()" name="ProTypeQty" value="1" checked="true" disabled="true">
                                    <label for="Normal">عدد</label><br>
                                </div>
                                <div style="float: right;margin-right: 10px;">
                                    <input type="radio" onclick="DisableQty()"  name="ProTypeQty" value="2"  disabled="true">
                                    <label for="Normal">كمية</label><br>
                                </div>
                            <?php else : ?>
                                <div style="float: right;" >
                                    <input type="radio"  onclick="EnableQty()" name="ProTypeQty" value="1" disabled="true">
                                    <label for="Normal">عدد</label><br>
                                </div>
                                <div style="float: right;margin-right: 10px;">
                                    <input type="radio" onclick="DisableQty()"  name="ProTypeQty" value="2" checked="true" disabled="true">
                                    <label for="Normal">كمية</label><br>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">السعر</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="ProPrice" disabled="true" value="<?php echo $row["SellingPrice"]; ?>" min="1" style="width: 50%;text-align: -webkit-center;float: right" >
                        </div>
                    </div>


                <?php endif; ?>
                <?php if ($row["ProType"] == 1): ?>
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">الكيمة</label>
                        </div>
                        <div class="col-75">
                            <input type="number"name="ProQty" min="1" value="<?php echo $row["QtyInStock"]; ?>" style="width: 50%;text-align: -webkit-center;float: right" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">الكمية المطلوبه</label>
                        </div>
                        <div class="col-75">
                            <input type="number"name="AlarmProQty"  min="1" value="<?php echo $row["AlarmQty"]; ?>" style="width: 50%;text-align: -webkit-center;float: right" >
                        </div>
                    </div>

                <?php else : ?>
                    <div class="row">
                        <div class="col-25">
                            <label for="subject">الكيمة</label>
                        </div>
                        <div class="col-75">
                            <input type="number"name="ProQty" disabled="true" min="1" value="<?php echo $row["QtyInStock"]; ?>" style="width: 50%;text-align: -webkit-center;float: right" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">الكمية المطلوبه</label>
                        </div>
                        <div class="col-75">
                            <input type="number"name="AlarmProQty"  disabled="true"  min="1" value="<?php echo $row["AlarmQty"]; ?>" style="width: 50%;text-align: -webkit-center;float: right" >
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row" style="padding-right: 90%">
                    <input type="submit" value="Submit">
                </div>
                <?php if ($row2['result'] == 1): ?>

                    <div class="row" style="padding-right: 90%">
                        <button type="button" class="btn btn-danger" onclick="IFDelete()" style="background-color: red;margin-top: 15px;width: 110px;height: 50px;font-size: 25px;">حذف</button>
                    </div>
                <?php else : ?>
                    <div class="row" style="padding-right: 90%">
                        <button type="button" class="btn btn-danger" disabled="true" onclick="IFDelete()" style="background-color: red;margin-top: 15px;width: 110px;height: 50px;font-size: 25px;">حذف</button>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </body>
</html>
