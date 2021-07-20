<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Expenses</title>
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

        <!--
                <script src="LabIncludeJQuery.js"></script>
                <link rel="stylesheet" href="BootStrapFile.css">
                <link rel="stylesheet" href="BootStrapFile1.css">
                <link rel="stylesheet" href="BootStrapFile2.css">
                <link rel="stylesheet" href="BootStrapFile3.css">
                <script src="JQueryFile.js"></script>
                <script src="JQueryFile1.js"></script>
                <script src="JQueryFile2.js"></script>
                <script src="JQueryFile3.js"></script>-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .form {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                width: 45%;
                display: inline-block;
                float: right;
                margin: 5px 5px 5px 20px;
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
                <h1 style="font-family: Arial, Helvetica, sans-serif;margin-top: 20px;margin-bottom: 0;">الـمـصـروفـات</h1>
            </div>
            <script>
                function GetSpecificExpenses(Id) {
                    var element = Id;
                    document.cookie = "SpecificExpenses=" + element;
                    window.location = "http://localhost/Glomus/OpenSpecificExpenses.php";
                }

                function AddNewExpenses() {
                    var r = confirm("هل تريد أضافة هذه المصروفات ؟");
                    if (r == true) {
                        var Name = document.getElementById("ExpensesName").value;
                        var Cost = document.getElementById("ExpensesCost").value;
                        var emp3 = {};
                        emp3.ExpensesName = Name;
                        emp3.ExpensesCost = Cost;
                        $.ajax({
                            url: "AddNewExpenses.php",
                            method: "POST",
                            data: emp3,
                            success: function (res) {
                                console.log(res);
                                alert("تم أضافة هذه المصروفات");
                                window.location.reload();
                            }
                        })
                    } else {
                        alert("لم يتم أضافة هذه المصروفات");
                    }
                }

                function AddUsageProduct() {
                    var r = confirm("هل تريد أضافة هذه المستهلكات ؟");
                    if (r == true) {
                        var Name = document.getElementById("UsageProName").value;
                        var Qty = document.getElementById("UsageProQty").value;
                        var emp3 = {};
                        emp3.UsageName = Name;
                        emp3.UsageQty = Qty;
                        $.ajax({
                            url: "AddNewUsage.php",
                            method: "POST",
                            data: emp3,
                            success: function (res) {
                                console.log(res);
                                alert("تم أضافة هذه المستهلكات");
                                window.location.reload();
                            }
                        })
                    } else {
                        alert("لم يتم أضافة هذه المستهلكات");
                    }
                }
            </script>
            <div class="form">
                <label for="ExpensesName" style="float: right;">الـنـوع</label>
                <input type="text"  id="ExpensesName" name="ExpensesName" >

                <label for="ExpensesCost" style="float: right;">الـمـبـلـغ</label>
                <input type="text" id="ExpensesCost" name="ExpensesCost">
                <input type="submit" value="Submit" onclick="AddNewExpenses()">
            </div>

            <div class="form">
                <h4 style="float: right;display: block;width: 100%;text-align: right;">مـسـتـهـلـكـات</h4>
                <label for="UsageProName" style="float: right;display: block;">الـصـنـف</label>
                <?php
                $localhost1 = "localhost";
                $dbconnection1 = "root";
                $dbpassword1 = "rootroot";
                $dbname1 = "glomus";
                $conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
                if ($conn1->connect_error) {
                    die("Connection failed: " . $conn1->connect_error);
                }
                $UsageProduct = 'مستهلكات';

                $sql1 = "select * from Product where CategoryId=1 and Category = '" . $UsageProduct . "'";
                $results1 = mysqli_query($conn1, $sql1);
                ?>
                <div class="col-75">
                    <select id="UsageProName" name="UsageProName">
                        <option value=""></option>
                        <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>
                            <option value="<?php echo $row1['ProName']; ?>"><?php echo $row1['ProName']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <label for="UsageProQty" style="float: right;">الـكـمـيـة</label>
                <input type="number" id="UsageProQty"name="UsageProQty" min="1" value="1" style="width: 40%;text-align: -webkit-center;float: right;margin-right: 10px;" >
                <input type="submit" value="Submit" onclick="AddUsageProduct()">
            </div>
            <?php
            $localhost = "localhost";
            $dbconnection = "root";
            $dbpassword = "rootroot";
            $dbname = "glomus";
            $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "select * from Expenses ORDER BY ExpID DESC";
            $results = mysqli_query($conn, $sql);
            ?>
            <?php while ($row = mysqli_fetch_assoc($results)): ?>
                <?php if ($row['ExpIsDeleted'] == 0) : ?>
                    <?php if ($row['ExpType'] == 1): ?>
                        <div class="chip1" ondblclick="GetSpecificExpenses(<?php echo $row['ExpID']; ?>)">
                            <h6 > الـنـوع : <small style="font-size: 20px;"><?php echo $row['ExpProName']; ?></small></h6>
                            <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['ExpDateTime']; ?></small></h6>
                            <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['ExpCost']; ?></small></h6>
                        </div>
                    <?php else: ?>
                        <div class="chip1" ondblclick="GetSpecificExpenses(<?php echo $row['ExpID']; ?>)">
                            <h6 > الـنـوع : <small style="font-size: 20px;"><?php echo $row['ExpProName']; ?></small></h6>
                            <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['ExpDateTime']; ?></small></h6>
                            <h6 > الكمية : <small style="font-size: 20px;"><?php echo $row['ExpQty']; ?></small></h6>
                            <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['ExpCost']; ?></small></h6>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if ($row['ExpType'] == 1): ?>
                        <div class="chip2" ondblclick="GetSpecificExpenses(<?php echo $row['ExpID']; ?>)">
                            <h6 > الـنـوع : <small style="font-size: 20px;"><?php echo $row['ExpProName']; ?></small></h6>
                            <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['ExpDateTime']; ?></small></h6>
                            <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['ExpCost']; ?></small></h6>
                        </div>
                    <?php else: ?>
                        <div class="chip2" ondblclick="GetSpecificExpenses(<?php echo $row['ExpID']; ?>)">
                            <h6 > الـنـوع : <small style="font-size: 20px;"><?php echo $row['ExpProName']; ?></small></h6>
                            <h6 > الوقت : <small  style="font-size: 20px;"><?php echo $row['ExpDateTime']; ?></small></h6>
                            <h6 > الكمية : <small style="font-size: 20px;"><?php echo $row['ExpQty']; ?></small></h6>
                            <h6 > المبلغ : <small style="font-size: 20px;"><?php echo $row['ExpCost']; ?></small></h6>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </body>
</html>
