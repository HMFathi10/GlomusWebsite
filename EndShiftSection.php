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


        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            .login-btn {
                font-family: Hack, monospace;
                background: #bbff00;
                color: #1d1d1d;
                cursor: pointer;
                font-size: 2em;
                padding: 1.5rem;
                border: 0;
                transition: all 0.5s;
                border-radius: 10px;
                width: auto;
                position: relative;
                min-width: 250px;
                display: block;


            }
            .login-btn::after {
                content: "\f2f6";
                font-family: "Font Awesome 5 Pro";
                font-weight: 400;
                position: absolute;
                left: 80%;
                top: 54%;
                right: 0;
                bottom: 0;
                opacity: 0;
                transform: translate(-50%, -50%);

            }
            .login-btn:hover {
                background: #2b2bff;
                transition: all 0.5s;
                border-radius: 10px;
                box-shadow: 0px 6px 15px #0000ff61;
                padding: 1.5rem 3rem 1.5rem 1.5rem;
                color: #ffffff;
            }
            &::after {
                opacity: 1;
                transition: all 0.5s;
                color: #ffffff;

            }
            .Section1{
                border: 2px solid #92a8d1;
                overflow: auto;
                width: 32%;
                display: inline-block;
                padding: 5px;
                margin: 5px;
                border-radius: 5px;
                float: right;

            }
            hr.style14 { 
                border: 0;
                height: 1px;
                background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
            }
            h6{
                text-align: center;
                padding: 5px;
                font-size: 20px;
                font-weight: bold;
            }

            .Header{
                float: right;
                padding: 5px 10px;
                overflow: auto;
                width: 100%;
                background-color: #583d72;
                border-radius: 5px;
                color: white;
                margin: 5px 0;
            }

            .Head{
                float: right;
                width: 33%;
                text-align: center;
            }
            .Head1{
                float: right;
                width: 50%;
                text-align: center;
            }
            ul.a {
                list-style-type: circle;
                float: right;
                font-size: 17px;
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
            function EndShiftProccess() {
                var r = confirm("هل تريد أنهاء الوردية  ؟");
                if (r == true) {
                    var emp1 = {};
                    $.ajax({
                        url: "EndShiftProccessTemp.php",
                        method: "POST",
                        data: emp1,
                        success: function (res) {
                            alert("Done");
                            window.location.replace("http://localhost/Glomus/PrintEndShift.php");
                        }
                    })
                }

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
        ?>
        <div class="container">
            <div style="text-align: center; margin: 20px 0;">
                <h1 style="font-family: Arial, Helvetica, sans-serif;margin-top: 20px;margin-bottom: 0;">تـقـفـيـل الـورديـة</h1>
            </div>
            <div style="width: 100%;overflow: auto;">
                <ul class="a">
                    <?php
                    $sql = "select sum(CalcTotalPrice) as TotalPrice from Calc";
                    $results = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($results);
                    $TotalSellPrice = $row['TotalPrice'];
                    ?>
                    <li>الـمـبـيـعـات :  <?php echo $TotalSellPrice; ?></li>
                    <?php
                    $sql = "select sum(OrderDiscountCost) as TotalDisPrice from Orders where IfCancled = 0";
                    $results = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($results);
                    $TotalDisPrice = $row['TotalDisPrice'];
                    ?>
                    <li>الـخـصـومـات :  <?php echo $TotalDisPrice; ?></li>
                    <?php
                    $sql = "select sum(ExpCost) as TotalExpenses from Expenses where ExpIsDeleted = 0 and ExpType = 1";
                    $results = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($results);
                    $TotalExpenses = $row['TotalExpenses'];
                    ?>
                    <li> الـمـصـروفـات: <?php echo $TotalExpenses; ?> </li>
                    <li>الـمـبـلـغ الـكـلـي : <?php echo $TotalSellPrice - $TotalDisPrice - $TotalExpenses; ?> </li>
                    <?php
                    $sql = "select sum(ExpCost) as TotalExpenses from Expenses where ExpIsDeleted = 0 and ExpType = 2";
                    $results = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($results);
                    $TotalUsageExpenses = $row['TotalExpenses'];
                    ?>
                    <li> الـمـسـتـهـلـكـات: <?php echo $TotalUsageExpenses; ?> </li>


                    <?php
                    $sql = "select sum(OrderDeliveryCost) as TotalDelivery from Orders where OrderType = 2 and IfCancled = 0";
                    $results = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($results);
                    $TotalDelivery = $row['TotalDelivery'];
                    ?>
                    <li>الـدلـيـفـري : <?php echo $TotalDelivery; ?> </li>

                </ul>
            </div>
            <div style="overflow: auto;">
                <div class="Section1">
                    <h6> الـمـبـيـعات</h6>
                    <hr class="style14">
                    <?php
                    $sql = "select * from Calc";
                    $results = mysqli_query($conn, $sql);
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($results)): ?>
                        <?php if ($row['CalcQty'] > 0): ?>
                            <div class="Header">
                                <p class="Head">الـصـنـف</p>
                                <p class="Head">الـكـمـيـة</p>
                                <p class="Head">الـمـبـلـغ</p>
                                <div class="Content">
                                    <p class="Head"><?php echo $row['CalcProName']; ?> </p>
                                    <p class="Head"><?php echo $row['CalcQty']; ?></p>
                                    <p class="Head"><?php echo $row['CalcTotalPrice']; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>

                </div>
                <div class="Section1">
                    <h6> الـمـصـروفـات</h6>
                    <hr class="style14">
                    <?php
                    $sql = "select * from Expenses where ExpType=1 and ExpIsDeleted=0 ";
                    $results = mysqli_query($conn, $sql);
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($results)): ?>
                        <?php if ($row['ExpIsDeleted'] == 0) : ?>
                            <div class="Header">
                                <p class="Head1">الـصـنـف</p>
                                <p class="Head1">الـمـبـلـغ</p>
                                <div class="Content">
                                    <p class="Head1"><?php echo $row['ExpProName']; ?> </p>
                                    <p class="Head1"><?php echo $row['ExpCost']; ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <div class="Section1">
                    <h6> الـمـسـتـهـلـكـات</h6>
                    <hr class="style14">
                    <?php
                    $sql = "select * from Expenses where ExpType=2 and ExpIsDeleted = 0 ";
                    $results = mysqli_query($conn, $sql);
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($results)): ?>
                        <div class="Header">
                            <p class="Head1">الـصـنـف</p>
                            <p class="Head1">الـكـمـيـة</p>
                            <div class="Content">
                                <p class="Head1"><?php echo $row['ExpProName']; ?> </p>
                                <p class="Head1"><?php echo $row['ExpQty']; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
                <div class="Section1">
                    <h6> الـتـنـبـيـهـات</h6>
                    <hr class="style14">
                    <?php
                    $sql = "select * from Product where AlarmQty>QtyInStock ";
                    $results = mysqli_query($conn, $sql);
                    ?>
                    <?php while ($row = mysqli_fetch_assoc($results)): ?>
                        <div class="Header">
                            <p class="Head1">الـصـنـف</p>
                            <p class="Head1">الـكـمـيـة</p>
                            <div class="Content">
                                <p class="Head1"><?php echo $row['ProName']; ?> </p>
                                <p class="Head1"><?php echo $row['QtyInStock']; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
            <div style="display: block;float: left;">
                <button onclick="EndShiftProccess()" class="login-btn">أنــهــاء</button>
            </div>
        </div>
    </body>
</html>
