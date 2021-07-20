<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Orders</title>
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
            .chip{
                overflow: auto;
                width: 100%;
                display: inline-block;
                padding: 0 25px;
                height: 100px;
                font-size: 16px;
                line-height: 50px;
                border-radius: 10px;
                background-color: #f7ea00;
                margin-top: 25px;
                cursor: pointer;
            }
            .chip4{
                overflow: auto;
                width: 100%;
                display: inline-block;
                padding: 0 25px;
                height: 100px;
                font-size: 16px;
                line-height: 50px;
                border-radius: 10px;
                background-color: #e1701a;
                margin-top: 25px;
                cursor: pointer;
                color: white;
            }
            .chip1{
                overflow: auto;
                width: 100%;
                display: inline-block;
                padding: 0 25px;
                height: 100px;
                font-size: 16px;
                line-height: 50px;
                border-radius: 10px;
                background-color: #3d84b8;
                color: white;
                margin-top: 25px;
                cursor: pointer;
            }
            .chip2{
                overflow: auto;
                width: 100%;
                display: inline-block;
                padding: 0 25px;
                height: 100px;
                font-size: 16px;
                line-height: 50px;
                border-radius: 10px;
                background-color: #e1701a;
                color: white;
                margin-top: 25px;
                cursor: pointer;
            }
            h6{
                float: right;
                padding: 10px 25px 0px 0px;
                font-size: 20px;
                font-weight: bold;
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
        <div class="container">
            <div style="text-align: center; margin: 20px 0;">
                <h1 style="font-family: Arial, Helvetica, sans-serif;margin-top: 20px;margin-bottom: 0;">الأوردرات</h1>
            </div>
            <script>
                function GetSpecificOrder(Id) {
                    var element = Id;
                    document.cookie = "SpecificOrder=" + element;
                    window.location = "http://localhost/Glomus/OpenSpecificOrder.php";
                }
            </script>
            <?php
            $localhost = "localhost";
            $dbconnection = "root";
            $dbpassword = "rootroot";
            $dbname = "glomus";
            $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $localhost1 = "localhost";
            $dbconnection1 = "root";
            $dbpassword1 = "rootroot";
            $dbname1 = "glomus";
            $conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
            if ($conn1->connect_error) {
                die("Connection failed: " . $conn1->connect_error);
            }

            $sql = "select * from Orders ORDER BY OrderID DESC";
            $results = mysqli_query($conn, $sql);
            ?>
            <?php while ($row = mysqli_fetch_assoc($results)): ?>

                <?php if ($row['OrderType'] == 1): ?>
                    <?php if ($row['IfCancled'] == 0): ?>
                        <?php if ($row['OrderDone'] == 1): ?>
                            <div class="chip1" id="<?php echo $row['OrderID']; ?>" ondblclick="GetSpecificOrder(<?php echo $row['OrderID']; ?>)">
                                <h6 "> رقم الاوردر : <small style="font-size: 20px;"><?php echo $row['OrderID']; ?></small></h6>
                                <h6 "> النوع : <small style="font-size: 20px;">كــــاش</small></h6>
                                <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                <h6 > خصم : <small style="font-size: 20px;"><?php echo $row['OrderDiscountCost']; ?></small></h6>
                                <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                            </div>
                        <?php else: ?>
                            <div class="chip2" id="<?php echo $row['OrderID']; ?>" ondblclick="GetSpecificOrder(<?php echo $row['OrderID']; ?>)">
                                <h6 "> رقم الاوردر : <small style="font-size: 20px;"><?php echo $row['OrderID']; ?></small></h6>
                                <h6 "> النوع : <small style="font-size: 20px;">كــــاش</small></h6>
                                <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                <h6 > خصم : <small style="font-size: 20px;"><?php echo $row['OrderDiscountCost']; ?></small></h6>
                                <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="chip2" id="<?php echo $row['OrderID']; ?>" ondblclick="GetSpecificOrder(<?php echo $row['OrderID']; ?>)">
                            <h6 "> رقم الاوردر : <small style="font-size: 20px;"><?php echo $row['OrderID']; ?></small></h6>
                            <h6 "> النوع : <small style="font-size: 20px;">كــــاش</small></h6>
                            <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                            <h6 > خصم : <small style="font-size: 20px;"><?php echo $row['OrderDiscountCost']; ?></small></h6>
                            <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                        </div>
                    <?php endif; ?>
                <?php elseif ($row['OrderType'] == 2): ?>
                    <?php if ($row['IfCancled'] == 0): ?>
                        <?php if ($row['OrderDone'] == 1): ?>
                            <div class="chip" id="<?php echo $row['OrderID']; ?>" ondblclick="GetSpecificOrder(<?php echo $row['OrderID']; ?>)">
                                <h6 > رقم الاوردر : <small  style="font-size: 20px;"><?php echo $row['OrderID']; ?></small></h6>
                                <h6 > النوع : <small  style="font-size: 20px;">دلـيـفـري</small></h6>
                                <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                <h6 > مبلغ التوصيل : <small  style="font-size: 20px;"><?php echo $row['OrderDeliveryCost']; ?></small></h6>
                                <h6 > المبلغ : <small  style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                                <h6 > الاسـم : <small  style="font-size: 20px;"><?php echo $row['OrderName']; ?></small></h6>
                                <h6 > رقم الموبايل : <small  style="font-size: 20px;"><?php echo $row['OrderPhone']; ?></small></h6>
                                <h6 > العنوان : <small style="font-size: 20px;"><?php echo $row['OrderAddress']; ?></small></h6>

                            </div>
                        <?php else: ?>
                            <div class="chip4" id="<?php echo $row['OrderID']; ?>" ondblclick="GetSpecificOrder(<?php echo $row['OrderID']; ?>)">
                                <h6 > رقم الاوردر : <small  style="font-size: 20px;"><?php echo $row['OrderID']; ?></small></h6>
                                <h6 > النوع : <small  style="font-size: 20px;">دلـيـفـري</small></h6>
                                <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                <h6 > المبلغ : <small  style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                                <h6 > الاسـم : <small  style="font-size: 20px;"><?php echo $row['OrderName']; ?></small></h6>
                                <h6 > رقم الموبايل : <small  style="font-size: 20px;"><?php echo $row['OrderPhone']; ?></small></h6>
                                <h6 > العنوان : <small style="font-size: 20px;"><?php echo $row['OrderAddress']; ?></small></h6>

                            </div>
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="chip4" id="<?php echo $row['OrderID']; ?>" ondblclick="GetSpecificOrder(<?php echo $row['OrderID']; ?>)">
                            <h6 > رقم الاوردر : <small  style="font-size: 20px;"><?php echo $row['OrderID']; ?></small></h6>
                            <h6 > النوع : <small  style="font-size: 20px;">دلـيـفـري</small></h6>
                            <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                            <h6 > المبلغ : <small  style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                            <h6 > الاسـم : <small  style="font-size: 20px;"><?php echo $row['OrderName']; ?></small></h6>
                            <h6 > رقم الموبايل : <small  style="font-size: 20px;"><?php echo $row['OrderPhone']; ?></small></h6>
                            <h6 > العنوان : <small style="font-size: 20px;"><?php echo $row['OrderAddress']; ?></small></h6>

                        </div>
                    <?php endif; ?>
                <?php endif; ?>

            <?php endwhile; ?>
        </div>
    </body>
</html>
