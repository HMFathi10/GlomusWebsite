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
            .Details{
                padding: 25px;
                margin: 10px;
                border-radius: 25px;
                border: 2px solid #73AD21;
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
            h4{
                display: inline-block;
                float: right;
                overflow: auto;
            }
            h6{
                overflow: auto;
                display: inline-block;
                float: right;
                font-size: 20px;
                font-weight: bold;
            }
            .coupon {
                border: 5px dotted #bbb; /* Dotted border */
                width: 100%;
                border-radius: 15px; /* Rounded border */
                margin: 0 auto; /* Center the coupon */
                /*                max-width: 600px;*/
                background-color: #f7ea00;
                overflow: auto;
            }
            .coupon1 {
                border: 5px dotted #bbb; /* Dotted border */
                width: 100%;
                border-radius: 15px; /* Rounded border */
                margin: 0 auto; /* Center the coupon */
                /*                max-width: 600px;*/
                background-color: #3d84b8;
                overflow: auto;
                color: white;
            }
            .coupon2 {
                border: 5px dotted #bbb; /* Dotted border */
                width: 100%;
                border-radius: 15px; /* Rounded border */
                margin: 0 auto; /* Center the coupon */
                /*                max-width: 600px;*/
                background-color: #8e9775;
                overflow: auto;
                color: white;
            }
            .coupon3 {
                border: 5px dotted #bbb; /* Dotted border */
                width: 100%;
                border-radius: 15px; /* Rounded border */
                margin: 0 auto; /* Center the coupon */
                /*                max-width: 600px;*/
                background-color: #e1701a;
                overflow: auto;
                color: white;
            }
            .container {
                padding: 2px 16px;
                /*                background-color: #f1f1f1;*/
            }

            .promo {
                background: #ccc;
                padding: 3px;
            }
            h6{
                float: right;
                padding: 10px 25px 0px 0px;
                font-size: 20px;
                font-weight: bold;
            }
            .button {
                display: inline-block;
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 28px;
                padding: 20px;
                width: 200px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }

            .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }
            .expire {
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
        <script>
            function DeleteWholeOrderBtn1() {
                alert("تم حذف هذا الاوردر مسبقا.");
            }
            function DeleteWholeOrderBtn(OrderId, OrderType, OrderName, OrderPhone, OrderAddress, OrderDateTime, OrderDiscountCheck, OrderDiscountCost, OrderCost, OrderDeliveryCost, OrderDone, IfCancled) {
                var r = confirm("هل تريد الغاء الطلب ؟");
                if (r == true) {
                    var emp3 = {};
                    emp3.OrderId = OrderId;
                    emp3.OrderType = OrderType;
                    emp3.OrderName = OrderName;
                    emp3.OrderPhone = OrderPhone;
                    emp3.OrderAddress = OrderAddress;
                    emp3.OrderDateTime = OrderDateTime;
                    emp3.OrderDiscountCheck = OrderDiscountCheck;
                    emp3.OrderDiscountCost = OrderDiscountCost;
                    emp3.OrderCost = OrderCost;
                    emp3.OrderDeliveryCost = OrderDeliveryCost;
                    emp3.OrderDone = OrderDone;
                    emp3.IfCancled = IfCancled;
                    $.ajax({
                        url: "DeleteWholeOrder.php",
                        method: "POST",
                        data: emp3,
                        success: function (res) {
                            console.log(res);
                            alert("تم الغاء الطلب");
                            window.location.reload();
                        }
                    })
                } else {
                    alert("لم يتم الغاء الطلب");
                }

            }
            function ModifyProQty(OrderId, ProductId, ProductName, PastQty) {
                var NewQty = prompt("Please enter your name", PastQty);
                if (NewQty != null) {
                    var emp3 = {};
                    emp3.OrderId = OrderId;
                    emp3.ProductId = ProductId;
                    emp3.ProductName = ProductName;
                    emp3.OldQty = PastQty;
                    emp3.NewQty = NewQty;
                    console.log(emp3);
                    $.ajax({
                        url: "ModifyProductTemp.php",
                        method: "POST",
                        data: emp3,
                        success: function (res) {
                            console.log(res);
                            alert('Done');
                            window.location.reload();
                        }
                    })
                }

            }

            function DeleteProduct(OrderId, ProductId, ProductName) {
                var r = confirm("هل تريد الغاء الطلب ؟");
                if (r == true) {
                    var emp3 = {};
                    emp3.OrderId = OrderId;
                    emp3.ProductId = ProductId;
                    emp3.ProductName = ProductName;
                    console.log(emp3);
                    $.ajax({
                        url: "DeleteProductTemp.php",
                        method: "POST",
                        data: emp3,
                        success: function (res) {
                            console.log(res);
                            alert("تم الغاء الطلب");
                            window.location.reload();
                        }
                    })
                } else {
                    alert("لم يتم الغاء الطلب");
                }
            }

            function UnDeleteOrder(OrderId, ProductId, ProductName) {
                var r = confirm("هل تريد استرجاع الطلب؟ ");
                if (r == true) {
                    var emp3 = {};
                    emp3.OrderId = OrderId;
                    emp3.ProductId = ProductId;
                    emp3.ProductName = ProductName;
                    console.log(emp3);
                    $.ajax({
                        url: "ReturnProductTemp.php",
                        method: "POST",
                        data: emp3,
                        success: function (res) {
                            console.log(res);
                            alert("تم استرجاع الطلب");
                            window.location.reload();
                        }
                    })
                } else {
                    alert("لم يتم استرجاع الطلب");
                }
            }
        </script>
        <div class="container" style="background-color: white;">
            <div style="text-align: center; margin: 20px 0;">
                <h1 style="font-family: Arial, Helvetica, sans-serif;margin-top: 20px;margin-bottom: 0;">الأوردرات</h1>
            </div>

            <?php
            $OrderId = $_COOKIE['SpecificOrder'];
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

            $sql = "select * from Orders where OrderID = '" . $OrderId . "'";
            $results = mysqli_query($conn, $sql);
            ?>
            <?php while ($row = mysqli_fetch_assoc($results)): ?>
                <?php if ($row['IfCancled'] == 0) : ?>
                    <button class="button"   style="vertical-align:middle" onclick="DeleteWholeOrderBtn(<?php echo $OrderId; ?>,<?php echo $row['OrderType']; ?>, '<?php echo $row['OrderName']; ?>', '<?php echo $row['OrderPhone']; ?>', '<?php echo $row['OrderAddress']; ?>', '<?php echo $row['OrderDateTime']; ?>',<?php echo $row['OrderDiscountCheck']; ?>,<?php echo $row['OrderDiscountCost']; ?>,<?php echo $row['OrderCost']; ?>, '<?php echo $row['OrderDeliveryCost']; ?>',<?php echo $row['OrderDone']; ?>,<?php echo 1; ?>)">
                        <span>حذف </span>
                    </button>
                    <?php if ($row['OrderType'] == 1): ?>
                        <?php if ($row['OrderDone'] == 1): ?>
                            <div class="coupon1">
                                <div class="container">
                                    <h3 style="text-align: center;"> رقم الاوردر : <?php echo $row['OrderID']; ?></h3>
                                    <div class="container">
                                        <h6 > النوع : <small style="font-size: 20px;">كــــاش</small></h6>
                                        <h6 > الوقت : <small style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                        <h6 > خصم : <small style="font-size: 20px;"><?php echo $row['OrderDiscountCost']; ?></small></h6>
                                        <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                                        <hr style="height:2px;border-width:0;color:gray;background-color:white;margin-top: 8%;">
                                    </div>

                                </div>
                                <?php
                                $sql1 = "select * from OrderDescription where OrderMainID = '" . $OrderId . "'";
                                $results1 = mysqli_query($conn1, $sql1);
                                ?>
                                <h4 style="width: 30%;text-align: initial;padding-right: 24px;">الـنـوع</h4>
                                <h4 style="width: 20%;text-align: center;">الـسـعـر</h4>
                                <h4 style="width: 20%;text-align: center;">الـكـمـيـة</h4>
                                <h4 style="width: 30%;text-align: center;">الـسـعـر الـكـلـي</h4>
                                <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>
                                    <?php if ($row1['IfDeleted'] == 0): ?>
                                        <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                            <div class="container" >
                                                <h6 style="width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                                <h6 style="width: 12%;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                                <h6 style="width: 12%;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                                <h6 style="width: 20%;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                            <div class="container" >
                                                <!-- هنا لو ملغي ممكن نرجعه-->  
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;width: 12%;text-decoration-style: double;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;width: 12%;text-decoration-style: double;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;width: 20%;text-decoration-style: double;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php else: ?>
                            <div class="coupon3">
                                <div class="container">
                                    <h3 style="text-align: center;"> رقم الاوردر : <?php echo $row['OrderID']; ?></h3>
                                    <div class="container">
                                        <h6 > النوع : <small style="font-size: 20px;">كــــاش</small></h6>
                                        <h6 > الوقت : <small style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                        <h6 > خصم : <small style="font-size: 20px;"><?php echo $row['OrderDiscountCost']; ?></small></h6>
                                        <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                                        <hr style="height:2px;border-width:0;color:gray;background-color:white;margin-top: 8%;">
                                    </div>

                                </div>
                                <?php
                                $sql1 = "select * from OrderDescription where OrderMainID = '" . $OrderId . "'";
                                $results1 = mysqli_query($conn1, $sql1);
                                ?>
                                <h4 style="width: 30%;text-align: initial;padding-right: 24px;">الـنـوع</h4>
                                <h4 style="width: 20%;text-align: center;">الـسـعـر</h4>
                                <h4 style="width: 20%;text-align: center;">الـكـمـيـة</h4>
                                <h4 style="width: 30%;text-align: center;">الـسـعـر الـكـلـي</h4>
                                <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>
                                    <?php if ($row1['IfDeleted'] == 0): ?>
                                        <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                            <div class="container" >
                                                <h6 style="width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                                <h6 style="width: 12%;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                                <h6 style="width: 12%;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                                <h6 style="width: 20%;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                            <div class="container" >
                                                <!-- هنا لو ملغي ممكن نرجعه-->  
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;width: 12%;text-decoration-style: double;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;width: 12%;text-decoration-style: double;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;width: 20%;text-decoration-style: double;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>


                    <?php elseif ($row['OrderType'] == 2): ?>

                        <?php if ($row['OrderDone'] == 1): ?>
                            <div class="coupon">
                                <div class="container">
                                    <h3 style="text-align: center;"> رقم الاوردر : <?php echo $row['OrderID']; ?></h3>
                                    <div class="container">
                                        <h6 > النوع : <small style="font-size: 20px;">دلـيـفـري</small></h6>
                                        <h6 > الوقت : <small style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                        <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                                        <h6 > الاسـم : <small style="font-size: 20px;"><?php echo $row['OrderName']; ?></small></h6>
                                        <h6 > رقم الموبايل : <small style="font-size: 20px;"><?php echo $row['OrderPhone']; ?></small></h6>
                                        <h6 > العنوان : <small style="font-size: 20px;"><?php echo $row['OrderAddress']; ?></small></h6>
                                        <hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-top: 16%;">
                                    </div>

                                </div>
                                <?php
                                $sql1 = "select * from OrderDescription where OrderMainID = '" . $OrderId . "'";
                                $results1 = mysqli_query($conn1, $sql1);
                                ?>
                                <h4 style="width: 30%;text-align: initial;padding-right: 24px;">الـنـوع</h4>
                                <h4 style="width: 20%;text-align: center;">الـسـعـر</h4>
                                <h4 style="width: 20%;text-align: center;">الـكـمـيـة</h4>
                                <h4 style="width: 30%;text-align: center;">الـسـعـر الـكـلـي</h4>
                                <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>
                                    <?php if ($row1['IfDeleted'] == 0): ?>
                                        <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                            <div class="container" >
                                                <h6 style="width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                                <h6 style="width: 12%;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                                <h6 style="width: 12%;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                                <h6 style="width: 20%;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                            <div class="container" >
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 12%;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 12%;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 20%;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php else : ?>
                            <div class="coupon3">
                                <div class="container">
                                    <h3 style="text-align: center;"> رقم الاوردر : <?php echo $row['OrderID']; ?></h3>
                                    <div class="container">
                                        <h6 > النوع : <small style="font-size: 20px;">دلـيـفـري</small></h6>
                                        <h6 > الوقت : <small style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                        <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                                        <h6 > الاسـم : <small style="font-size: 20px;"><?php echo $row['OrderName']; ?></small></h6>
                                        <h6 > رقم الموبايل : <small style="font-size: 20px;"><?php echo $row['OrderPhone']; ?></small></h6>
                                        <h6 > العنوان : <small style="font-size: 20px;"><?php echo $row['OrderAddress']; ?></small></h6>
                                        <hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-top: 16%;">
                                    </div>

                                </div>
                                <?php
                                $sql1 = "select * from OrderDescription where OrderMainID = '" . $OrderId . "'";
                                $results1 = mysqli_query($conn1, $sql1);
                                ?>
                                <h4 style="width: 30%;text-align: initial;padding-right: 24px;">الـنـوع</h4>
                                <h4 style="width: 20%;text-align: center;">الـسـعـر</h4>
                                <h4 style="width: 20%;text-align: center;">الـكـمـيـة</h4>
                                <h4 style="width: 30%;text-align: center;">الـسـعـر الـكـلـي</h4>
                                <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>
                                    <?php if ($row1['IfDeleted'] == 0): ?>
                                        <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                            <div class="container" >
                                                <h6 style="width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                                <h6 style="width: 12%;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                                <h6 style="width: 12%;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                                <h6 style="width: 20%;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                            <div class="container" >
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 12%;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 12%;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                                <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 20%;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php else: ?>
                    <button class="button" onclick="DeleteWholeOrderBtn1()" style="vertical-align:middle"><span>حذف </span></button>
                    <?php if ($row['OrderType'] == 1): ?>
                        <div class="coupon3">
                            <div class="container">
                                <h3 style="text-align: center;"> رقم الاوردر : <?php echo $row['OrderID']; ?></h3>
                                <div class="container">
                                    <h6 > النوع : <small style="font-size: 20px;">كــــاش</small></h6>
                                    <h6 > الوقت : <small style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                    <h6 > خصم : <small style="font-size: 20px;"><?php echo $row['OrderDiscountCost']; ?></small></h6>
                                    <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                                    <hr style="height:2px;border-width:0;color:gray;background-color:white;margin-top: 8%;">
                                </div>

                            </div>
                            <?php
                            $sql1 = "select * from OrderDescription where OrderMainID = '" . $OrderId . "'";
                            $results1 = mysqli_query($conn1, $sql1);
                            ?>
                            <h4 style="width: 30%;text-align: initial;padding-right: 24px;">الـنـوع</h4>
                            <h4 style="width: 20%;text-align: center;">الـسـعـر</h4>
                            <h4 style="width: 20%;text-align: center;">الـكـمـيـة</h4>
                            <h4 style="width: 30%;text-align: center;">الـسـعـر الـكـلـي</h4>
                            <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>
                                <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                    <div class="container" >
                                        <!-- هنا لو ملغي ممكن نرجعه-->  
                                        <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                        <h6 style="text-decoration: line-through;text-decoration-color: black;width: 12%;text-decoration-style: double;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                        <h6 style="text-decoration: line-through;text-decoration-color: black;width: 12%;text-decoration-style: double;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                        <h6 style="text-decoration: line-through;text-decoration-color: black;width: 20%;text-decoration-style: double;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php elseif ($row['OrderType'] == 2): ?>
                        <div class="coupon3">
                            <div class="container">
                                <h3 style="text-align: center;"> رقم الاوردر : <?php echo $row['OrderID']; ?></h3>
                                <div class="container">
                                    <h6 > النوع : <small style="font-size: 20px;">دلـيـفـري</small></h6>
                                    <h6 > الوقت : <small style="font-size: 20px;"><?php echo $row['OrderDateTime']; ?></small></h6>
                                    <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['OrderCost']; ?></small></h6>
                                    <h6 > الاسـم : <small style="font-size: 20px;"><?php echo $row['OrderName']; ?></small></h6>
                                    <h6 > رقم الموبايل : <small style="font-size: 20px;"><?php echo $row['OrderPhone']; ?></small></h6>
                                    <h6 > العنوان : <small style="font-size: 20px;"><?php echo $row['OrderAddress']; ?></small></h6>
                                    <hr style="height:2px;border-width:0;color:gray;background-color:gray;margin-top: 16%;">
                                </div>

                            </div>
                            <?php
                            $sql1 = "select * from OrderDescription where OrderMainID = '" . $OrderId . "'";
                            $results1 = mysqli_query($conn1, $sql1);
                            ?>
                            <h4 style="width: 30%;text-align: initial;padding-right: 24px;">الـنـوع</h4>
                            <h4 style="width: 20%;text-align: center;">الـسـعـر</h4>
                            <h4 style="width: 20%;text-align: center;">الـكـمـيـة</h4>
                            <h4 style="width: 30%;text-align: center;">الـسـعـر الـكـلـي</h4>
                            <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>
                                <div class="container" style="display: block;overflow: auto;padding-right: 0px;">
                                    <div class="container" >
                                        <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 33%;text-align: right;padding-right: 0px;" ><?php echo $row1['ProName']; ?></h6>
                                        <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 12%;margin-left: 100px;text-align: center;padding-right: 0;"><?php echo $row1['ProCost']; ?></h6>
                                        <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 12%;margin-left: 100px;text-align: center;padding-right: 0;" ><?php echo $row1['ProQty']; ?></h6>
                                        <h6 style="text-decoration: line-through;text-decoration-color: black;text-decoration-style: double;width: 20%;text-align: center;padding-right: 0;margin-right: 20px;"><?php echo $row1['ProTotalCost']; ?></h6>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <div class="Details">
                <?php
                $localhost3 = "localhost";
                $dbconnection3 = "root";
                $dbpassword3 = "rootroot";
                $dbname3 = "glomus";
                $conn3 = new mysqli($localhost3, $dbconnection3, $dbpassword3, $dbname3);
                if ($conn3->connect_error) {
                    die("Connection failed: " . $conn3->connect_error);
                }

                $sql3 = "select * from TrackDetails where TrackOrderID = '" . $OrderId . "'";
                $results3 = mysqli_query($conn3, $sql3);
                ?>
                <table>
                    <tr>
                        <th style="font-size: 20px;">الـوقـت</th>
                        <th style="font-size: 20px;">الـوصـف</th>
                    </tr>
                    <?php while ($row3 = mysqli_fetch_assoc($results3)): ?>
                        <tr>
                            <td style="font-size: 20px;"><?php echo $row3['TraCkTime'] ?></td>
                            <td style="font-size: 20px;"><?php echo $row3['TrackDesc'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </body>
</html>
