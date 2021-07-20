<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8">
        <title>Glomus</title>
        <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        </style>
    </head>
    <body>
        <script src="Boot/bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

        <div >
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2978b5">
                <div class="container-fluid" style="float: right;background-color: #2978b5;">
                    <a class="navbar-brand" href="Home.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">Glomus</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link "  aria-current="page" href="MakeNewOrder.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">عمل اوردر</a>
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
                                <a class="nav-link " aria-current="page" href="AddNewCategory.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">الأصناف</a>
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
        <div>
            <div style="text-align: center; margin: 20px 0;">
                <h3>الأصــنــاف</h3>
            </div>
            <script>
                var temp1 = 0;
                function ContTemp1(x, val) {
                    ClearInput();
                    temp1 = x;
                    document.cookie = "Id=" + val;
                }
                function getPassword() {
                    if (temp1 == 1) {
                        var pass = document.getElementById('exampleInputPassword1').value;
                        if (pass == "asd") {
                            window.location = 'http://localhost/Glomus/AddProduct.php';
                        } else {
                            alert("Wrong");
                        }
                    } else if (temp1 == 2) {
                        var pass = document.getElementById('exampleInputPassword1').value;
                        if (pass == "asd") {
                            window.location = 'http://localhost/Glomus/SepProductEdit.php';

                        } else {
                            alert("Wrong");
                        }
                    }
                }
                function ClearInput() {
                    document.getElementById('exampleInputPassword1').value = "";
                }
            </script>
            <div>
                <div class="container">
                    <!-- Button trigger modal -->
                    <button type="button" class="fa fa-plus-circle" style="font-size: 20px;background-color: #fdca40;border-radius: 4px;margin-bottom: 10px;padding: 10px;cursor: pointer;" data-toggle="modal" data-target="#myModal" onclick="ContTemp1(1)"> أضافة صنف جديد </button>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Log in</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default"  onclick="getPassword()">Log in</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div>
                        <?php
                        $localhost = "localhost";
                        $dbconnection = "root";
                        $dbpassword = "rootroot";
                        $dbname = "glomus";
                        $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "select * from ProductCategory";
                        $results = mysqli_query($conn, $sql);
                        if (!$results) {
                            die("Error");
                        }
                        ?>
                        <?php while ($row = mysqli_fetch_assoc($results)): ?>
                            <div style="background-color: #000;text-align: right; padding: 20px 10px;border-radius: 5px;">
                                <h5 style="color: #fff"><?php echo $row['CatName']; ?></h5>
                            </div>
                            <?php
                            $Cato = $row['CatId'];
                            $sql1 = "select * from Product where CategoryId = $Cato";
                            $results1 = mysqli_query($conn, $sql1);
                            if (!$results1) {
                                die("Error");
                            }
                            ?>
                            <div class="row" style="background-color: #f0e3ca;margin: 0 0 30px 0;border-radius: 5px;">
                                <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>
                                    <form method = "post" style="width: 20%;margin:5px; height: 200px;">
                                        <div class="col-md-4" style="max-width: 100%;align-items: flex-end;">
                                            <div class="card" style="border: none; height:200px;align-items: inherit;">
                                                <i class="fa  fa-pencil" id="<?php echo $row1['ProCode']; ?>" style="background-color: #fdca40;border-radius: 4px;margin-bottom: 10px;padding: 10px;cursor: pointer;" data-target="#myModal" data-toggle="modal" onclick="ContTemp1(2, event.target.id)"></i>
                                                <div class="card-body" style="padding: 5px;width: -webkit-fill-available;">
                                                    <h5 class="card-title" style="text-align: center"><?php echo $row1['ProName']; ?></h5>
                                                    <p style="text-align: center;color: grey;font-size: 22px;">السعر: <?php echo $row1['SellingPrice']; ?></p>
                                                    <input type="number" name="<?php echo $row1['ProCode']; ?>" style="width: 50%;margin-right: 50px;margin-left: 50px;text-align: -webkit-center;float: right" value=<?php echo $row1['QtyInStock']; ?> disabled="true">
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </form>
                                <?php endwhile; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
