<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Glomus</title>
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
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            .btn-1 {
                font-family: Hack, monospace;
                background: #bbff00;
                color: #1d1d1d;
                cursor: pointer;
                padding: 1.5rem;
                border: 0;
                transition: all 0.5s;
                border-radius: 10px;
                width: 150px;
                position: relative;
            }
            .container {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            /* Hide the browser's default radio button */
            .container input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
            }

            /* Create a custom radio button */
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
                border-radius: 50%;
            }

            /* On mouse-over, add a grey background color */
            .container:hover input ~ .checkmark {
                background-color: #ccc;
            }

            /* When the radio button is checked, add a blue background */
            .container input:checked ~ .checkmark {
                background-color: #2196F3;
            }

            /* Create the indicator (the dot/circle - hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the indicator (dot/circle) when checked */
            .container input:checked ~ .checkmark:after {
                display: block;
            }

            /* Style the indicator (dot/circle) */
            .container .checkmark:after {
                top: 9px;
                left: 9px;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: white;
            }
            .button {
                border-radius: 4px;
                background-color: #f3bda1;
                border: none;
                color: #000;
                text-align: center;
                font-size: 15px;
                padding: 5px;
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
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }

            th, td {
                text-align: left;
                padding: 16px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            .collapsible {
                background-color: #393e46;
                color: #fff;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border-color: #fff;
                text-align: center;
                outline: none;
                font-size: 20px;
                margin-bottom: 2px;
            }

            /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
            .active, .collapsible:hover {
                background-color: #ccc;
            }

            /* Style the collapsible content. Note: hidden by default */
            .content {
                padding: 0 18px;
                display: none;
                overflow: hidden;
                background-color: #f1f1f1;
            }
            #DeliveryCost{
                width: 40%; /* Full-width */
                font-size: 16px; /* Increase font-size */
                border: 1px solid #ddd; /* Add a grey border */
                margin-bottom: 12px; /* Add some space below the input */
                margin-right: 0px;
                text-align: center;
                height: 50px;
            }
            #myInput {
                background-position: 10px 12px; /* Position the search icon */
                background-repeat: no-repeat; /* Do not repeat the icon image */
                width: 80%; /* Full-width */
                font-size: 16px; /* Increase font-size */
                padding: 12px 20px 12px 40px; /* Add some padding */
                border: 1px solid #ddd; /* Add a grey border */
                margin-bottom: 12px; /* Add some space below the input */
            }
            #CustomerName {
                background-position: 10px 12px; /* Position the search icon */
                background-repeat: no-repeat; /* Do not repeat the icon image */
                width: 80%; /* Full-width */
                font-size: 16px; /* Increase font-size */
                padding: 12px 20px 12px 40px; /* Add some padding */
                border: 1px solid #ddd; /* Add a grey border */
                margin-bottom: 12px; /* Add some space below the input */
            }
            #CustomerAddress {
                width: 80%; /* Full-width */
                font-size: 16px; /* Increase font-size */
                padding: 12px 20px 12px 20px; /* Add some padding */
                border: 1px solid #ddd; /* Add a grey border */
                margin-bottom: 12px; /* Add some space below the input */
                margin-left: 0px;
            }

            #myUL {
                /* Remove default list styling */
                list-style-type: none;
                padding: 0;
                margin: 0;
            }

            #myUL li a {
                border: 1px solid #ddd; /* Add a border to all links */
                margin-top: -1px; /* Prevent double borders */
                background-color: #f6f6f6; /* Grey background color */
                padding: 12px; /* Add some padding */
                text-decoration: none; /* Remove default text underline */
                font-size: 18px; /* Increase the font-size */
                color: black; /* Add a black text color */
                display: block; /* Make it into a block element to fill the whole list */
            }

            #myUL li a:hover:not(.header) {
                background-color: #eee; /* Add a hover effect to all links, except for headers */
            }
        </style>
        <script type='text/javascript'>

            (function ()
            {
                if (window.localStorage)
                {
                    if (!localStorage.getItem('firstLoad'))
                    {
                        localStorage['firstLoad'] = true;
                        window.location.reload();
                    } else
                        localStorage.removeItem('firstLoad');
                }
            })();
        </script>
    </head>
    <body onload="DisableDelivery()">
        <script src="Boot/bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

        <div>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2978b5;">
                <div class="container-fluid" style="float: right;background-color: #2978b5;">
                    <a class="navbar-brand" href="Home.php" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">Glomus</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link "  aria-current="page" href="MakeNewOrder.php" id="MakeNewOrderBtn" style="display: block;color: #f2f2f2;text-align: center;padding: 14px 16px;text-decoration: none;">عمل اوردر</a>
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
            class UpdateInputValue {
                constructor(Id, ProID, Name, ProDest, ProType, Quantity, MaxQty, CloseId, Price) {
                    this.Id = Id;
                    this.ProID = ProID;
                    this.Name = Name;
                    this.ProDest = ProDest;
                    this.ProType = ProType;
                    this.Quantity = Quantity;
                    this.MaxQty = MaxQty;
                    this.CloseId = CloseId;
                    this.Price = Price;
                }
            }
            var DeliveryPrice = 0;
            var PriceTemp = 0;
            var ValueArr = new Array();
            var DiscountVar = 0;
        </script>
        <?php
        $CashArray = array();
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
        $localhost1 = "localhost";
        $dbconnection1 = "root";
        $dbpassword1 = "rootroot";
        $dbname1 = "glomus";
        $conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
        if ($conn1->connect_error) {
            die("Connection failed: " . $conn1->connect_error);
        }
        ?>
        <div>
            <div style="text-align: center; margin: 20px 0;">
                <h1 style="font-family: Arial, Helvetica, sans-serif;margin-top: 20px;margin-bottom: 0;">عــمــل اوردر</h1>
            </div>
        </div>
        <section style="margin: 5px;height: 550px;display: block;">
            <div style="background-color: white;margin: 29px 15px 30px 5px;height:500px;float: right;width: 40%;border:1px solid rgba(0,0,0,.125);border-radius: 10px;overflow: scroll;">
                <div id="MainDiv" style="margin-top: 10px; height: 95%;">
                    <?php while ($row = mysqli_fetch_assoc($results)): ?>
                        <?php if ($row['CatId'] != 1): ?>
                            <button type="button"  class="collapsible"><?php echo $row['CatName']; ?></button>
                            <div class="content">
                                <?php
                                $sql1 = "select * from Product where CategoryId = '" . $row['CatId'] . "'";
                                $results1 = mysqli_query($conn1, $sql1);
                                ?>
                                <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>    
                                    <button class="button"  id="<?php echo $row1['ProCode']; ?>"onclick="AddForm(<?php echo $row1['ProCode']; ?>, '<?php echo $row1['ProName']; ?>', <?php echo $row1['ProDest']; ?>,<?php echo $row1['ProType']; ?>,<?php echo $row1['SellingPrice']; ?>,<?php echo $row1['QtyInStock']; ?>)"  style="display: block;width: 100%;padding: 5px;font-size: 30px;background-color: #f3bda1;color: #000;">
                                        <span  onclick="AddForm(<?php echo $row1['ProCode']; ?>, '<?php echo $row1['ProName']; ?>', <?php echo $row1['ProDest']; ?>,<?php echo $row1['ProType']; ?>,<?php echo $row1['SellingPrice']; ?>,<?php echo $row1['QtyInStock']; ?>)" ><?php echo $row1['ProName']; ?></span>
            <!--                                    <div  id="<?php echo $row1['ProCode'] . 'ID'; ?>"  class="<?php echo $row1['SellingPrice']; ?>"></div>
                                                <div  id="<?php echo $row1['ProCode'] . 'QTY'; ?>"  class="<?php echo $row1['QtyInStock']; ?>"></div>-->
                                    </button>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <script>
                    var coll = document.getElementsByClassName("collapsible");
                    var i;
                    for (i = 0; i < coll.length; i++) {
                        coll[i].addEventListener("click", function () {
                            this.classList.toggle("active");
                            var content = this.nextElementSibling;
                            if (content.style.display === "block") {
                                content.style.display = "none";
                            } else {
                                content.style.display = "block";
                            }
                        });
                    }
                    function AddForm(Id, ProName, ProDest, ProType, ProPrice, ProQty) {
                        var IsTrue = true;
                        var ProID = Id;
//                        var Name = document.getElementById(ProID).name;
                        for (var i = 0; i < ValueArr.length; i++) {
                            if (ValueArr[i].Name == ProName) {
                                IsTrue = false;
                            }
                        }
                        if (IsTrue) {
                            document.getElementById('FormsDiv').innerHTML += '<form style="float: right;border-radius: 10px;border:1px solid rgba(0,0,0,.125);width: 30%;height: 200px;margin: 10px 5px 10px 14px;display: inline-table;"><i id="CloseElement" class="fa fa-close" style="background-color: #fdca40;border-radius: 4px;padding: 10px;cursor: pointer;"onclick="DeleteElement(event.target.id)"></i><h5 id="NewName" style="font-family: Arial, Helvetica, sans-serif;text-align: -webkit-center;"></h5><input type="number" onKeyUp="GetInput(event.target.id)" onclick="GetInput(event.target.id)" id="InputId" required="true" value="1" min="1" style="width: 50%;margin-right: 50px;margin-left: 50px;text-align: -webkit-center;float: right" ><p id="PriceSection" style="font-family: Arial, Helvetica, sans-serif;padding: 3px;margin: 3px;text-align: -webkit-center;font-size: 20px;margin-top: 30px;"></p></from>'
                            for (var i = 0; i < ValueArr.length; i++) {
                                document.getElementById(ValueArr[i].Id).value = ValueArr[i].Quantity;
                            }
                            var closeId = ProID + "CloseElement";
                            document.getElementById("CloseElement").id = closeId;
                            var newId = ProID + "H2Name";
                            document.getElementById("NewName").innerHTML = ProName;
                            document.getElementById("NewName").id = newId;
                            var NewInputId = Id + "InputId";
//                            var MaxQty = ProID + "QTY";
//                            var MQty = document.getElementById(MaxQty).className;
                            if (ProType == 1) {
                                document.getElementById("InputId").setAttribute("max", ProQty);
                            }
//                            document.getElementById("InputId").setAttribute("max", MQty);
                            document.getElementById("InputId").id = NewInputId;
                            var PriceInput = ProID + "ID";
//                            var NewElement = document.getElementById(PriceInput).className;
                            document.getElementById("PriceSection").innerHTML = ' السعر: ' + ProPrice;
                            document.getElementById("PriceSection").id = PriceInput;
                            ValueArr.push(new UpdateInputValue(NewInputId, Id, ProName, ProDest, ProType, 1, ProQty, closeId, ProPrice));
                            CalcPrice();
                        }
                    }
                    function GetInput(ID) {
                        var tempValue = document.getElementById(ID).value;
                        for (var i = 0; i < ValueArr.length; i++) {
                            if (ValueArr[i].Id == ID) {
                                ValueArr[i].Quantity = tempValue;
                            }
                        }
                        CalcPrice();
                    }
                    function DeleteElement(ID) {
                        for (var i = 0; i < ValueArr.length; i++) {
                            if (ValueArr[i].CloseId == ID) {
                                document.getElementById(ID).parentNode.remove();
                                ValueArr.splice(i, 1);
                                break;
                            }
                        }
                        CalcPrice();
                    }

                    function DisableDelivery() {
                        document.getElementById('Discountbox').disabled = false;
                        document.getElementById('Discountbox').checked = false;
                        document.getElementById('Delivery').checked = false;
                        var DeliveryFrom = document.getElementById('DeliveryDiv');
                        DeliveryFrom.style.display = 'none';
                        document.cookie = "CustomerName=";
                        document.cookie = "CustomerAdd=";
                        DeliveryPrice = 0;
                        CalcPrice();
                    }

                    function ableDelivery() {
                        document.getElementById('Discountbox').checked = false;
                        document.getElementById('Discountbox').disabled = true;
                        document.getElementById('Normal').checked = false;
                        var DeliveryFrom = document.getElementById('DeliveryDiv');
                        DeliveryFrom.style.display = 'block';
                        UpdateCostLbl();
                        CalcPrice();
                    }
                    function CalcPrice() {
                        PriceTemp = 0;
                        DiscountVar = 0;
                        for (var i = 0; i < ValueArr.length; i++) {
                            PriceTemp += ValueArr[i].Quantity * ValueArr[i].Price;
                        }
                        if (document.getElementById('Discountbox').checked) {
                            DiscountVar = (parseFloat(PriceTemp * 20) / 100);
                            PriceTemp = Math.ceil(PriceTemp - DiscountVar);
                        }
                        document.getElementById("PriceLable").innerHTML = PriceTemp + parseInt(DeliveryPrice);
                    }
                </script>
            </div>
            <div id ="FormsDiv" style="background-color: white;margin: 29px 25px 20px 10px;height:500px;float: right;width: 50%;border:1px solid rgba(0,0,0,.125);border-radius: 10px;overflow: scroll;">
            </div>
        </section>
        <div id="SecSection" style="margin: 10px 20px 10px 20px;overflow: auto;display: flex;background-color: #f1f1f1;height: 400px;">
            <div style="width: fit-content;">
                <form style="font-size: 20px;">
                    <h4>نوع الاوردر</h4>
                    <div style="margin: 5px;float: right;display: block;">
                        <input type="radio" checked="true" id="Normal" name="Normal" onclick="DisableDelivery()"  value="كاش">
                        <label for="Normal">كاش</label><br>
                    </div>
                    <div style="margin: 5px;float: right;display: block;">
                        <input type="radio" id="Delivery" name="Delivery" onclick="ableDelivery()" value="دليفري">
                        <label for="Delivery">دليفري</label><br>
                    </div>
                </form>
            </div>
            <?php
            $localhost5 = "localhost";
            $dbconnection5 = "root";
            $dbpassword5 = "rootroot";
            $dbname5 = "glomus";
            $conn5 = new mysqli($localhost5, $dbconnection5, $dbpassword5, $dbname5);
            if ($conn5->connect_error) {
                die("Connection failed: " . $conn5->connect_error);
            }
            $sql5 = "select * from CustomerData";
            $results5 = mysqli_query($conn5, $sql5);
            ?>
            <div id = "DeliveryDiv" style="width: 440px;margin-right: 20px;">
                <form style="font-size: 20px;overflow: auto;width: 490px;">
                    <div style="margin: 20px;overflow: auto;">
                        <div style="margin: 5px;float: right;display: inline-block;">
                            <label for="CustomerName" style="float: right;">الأســـم</label>
                            <input type="text" id="CustomerName" name="CustomerName">
                            <br>
                        </div>
                        <div style="margin: 5px;float: right;display: inline-block;">
                            <label for="CustomerPhoneNumber" style="float: right;">رقــم الموبايل</label>
                            <input type="text" onkeyup="myFunction()" id="myInput" name="myInput">
                            <br>

                        </div>
                    </div>
                    <div style="margin: 10px 20px 10px 10px;overflow: auto;">
                        <div style="margin: 5px;float: right;display: inline-block;">
                            <label for="CustomerAddress" style="float: right;margin:20px 0 0 5px;">العنوان</label>
                            <textarea id="CustomerAddress" name="CustomerAddress" style="width: 400px;overflow: scroll;"></textarea>
                            <br>
                        </div>
                        <div style="margin: 5px;float: right;display: inline-block;">
                            <label for="DeliveryCost" style="float: right;margin:5px 0 0 5px;">مبلغ التوصيل</label>
                            <input type="number" value="1" min="1" onmouseup="UpdateCostLbl()" onkeyup="UpdateCostLbl()" id="DeliveryCost" name="DeliveryCost" style="float: right;">
                            <br>
                        </div>
                    </div>

                </form>
            </div>
            <div style="width: fit-content;margin-right: 80px;margin-top: 20px;">
                <div style="margin: 20px 10px;">
                    <input type="checkbox" id="Discountbox" onclick="CalcPrice()">
                    <label  style="font-size: 20px;">خـصـم  20%.</label>
                </div>
            </div>
            <div style="width: fit-content;margin-right: 80px;">
                <div style="margin: 30px 10px;">
                    <label style="font-size: 30px;"> الـسـعـر : </label>
                    <label id="PriceLable" style="font-size: 30px;">0</label>
                </div>
            </div>
            <div style="width: fit-content;margin: 80px 80px 10px 10px;">
                <div style="margin: 20px 10px;">
                    <div>
                        <button class="btn-1" onclick="OnClickCashBuuton()">Cash</button>
                    </div>
                </div>
            </div>

            <script>

                function UpdateCostLbl() {
                    DeliveryPrice = document.getElementById("DeliveryCost").value;
                    document.getElementById("PriceLable").innerHTML = parseInt(DeliveryPrice) + PriceTemp;
                }
                function readCookie(name) {
                    var nameEQ = name + "=";
                    var ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ')
                            c = c.substring(1, c.length);
                        if (c.indexOf(nameEQ) == 0)
                            return c.substring(nameEQ.length, c.length);
                    }
                    return null;
                }

                function myFunction() {
                    var InputText = document.getElementById('myInput').value;
                    var emp3 = {};
                    emp3.PhoneNumber = InputText + "%";
                    console.log(emp3);
                    $.ajax({
                        url: "SearchForPhone.php",
                        method: "POST",
                        data: emp3,
                        success: function (res) {
                            document.getElementById('CustomerName').value = readCookie('CustomerName');
                            document.getElementById('CustomerAddress').value = readCookie('CustomerAdd');
                            console.log(document.cookie + "///" + readCookie('CustomerAddress'));
                        }
                    })
                }
                function GetDetails() {
                    var InputText = document.getElementById('myInput').value;
                    var emp3 = {};
                    emp3.PhoneNumber = InputText;
                    console.log(emp3);
                    $.ajax({
                        url: "EndCashTemp.php",
                        method: "POST",
                        data: emp3,
                        success: function (res) {
                            console.log(res);
                        }
                    })
                }
                function OnClickCashBuuton() {
                    var IsTrue = true;
                    if (ValueArr.length > 0) {
                        for (var i = 0; i < ValueArr.length; i++) {
                            if (ValueArr[i].ProType == 2) {
                                if (ValueArr[i].Quantity == "") {
                                    console.log(ValueArr[i].MaxQty);
                                    alert("خطأ في الكمية (" + ValueArr[i].Name + ")");
                                    IsTrue = false;
                                }

                            } else {
                                if (parseInt(ValueArr[i].Quantity) > parseInt(ValueArr[i].MaxQty) || ValueArr[i].Quantity == "") {
                                    console.log(ValueArr[i].MaxQty);
                                    alert("خطأ في الكمية (" + ValueArr[i].Name + ")");
                                    IsTrue = false;
                                }
                            }

                        }
                        if (IsTrue) {
                            var emp1 = {};
                            for (var i = 0; i < ValueArr.length; i++) {
                                emp1.id = ValueArr[i].ProID;
                                emp1.name = ValueArr[i].Name;
                                emp1.ProDest = ValueArr[i].ProDest;
                                emp1.ProType = ValueArr[i].ProType;
                                emp1.qty = ValueArr[i].Quantity;
                                emp1.Cost = ValueArr[i].Price;
                                emp1.TotalCost = parseInt(ValueArr[i].Quantity) * parseFloat(ValueArr[i].Price);
                                console.log(emp1);
                                $.ajax({
                                    url: "CashTemp.php",
                                    method: "POST",
                                    data: emp1,
                                    success: function (res) {
                                        console.log(res);
                                    }
                                })
                                if (ValueArr[i].ProType == 1) {
                                    ValueArr[i].MQty -= ValueArr[i].Quantity;
                                }

                            }
                            if (document.getElementById('Delivery').checked) {
                                var emp2 = {};
                                emp2.Type = 2;
                                emp2.CustName = document.getElementById('CustomerName').value;
                                emp2.CustPhoneNumber = document.getElementById('myInput').value;
                                emp2.CustAddress = document.getElementById('CustomerAddress').value;
                                emp2.DeliveryCost = DeliveryPrice;
                                emp2.Cost = parseInt(document.getElementById('PriceLable').innerHTML) - DeliveryPrice;
                                console.log(emp2);
                                $.ajax({
                                    url: "EndCashTemp.php",
                                    method: "POST",
                                    data: emp2,
                                    success: function (res) {
                                        console.log(res);
                                    }
                                })

                            } else {
                                var check = 0;
                                if (document.getElementById('Discountbox').checked) {
                                    check = 1;
                                }
                                var emp2 = {};
                                emp2.Type = 1;
                                emp2.DiscountCheck = check;
                                emp2.DiscountCost = Math.floor(DiscountVar);
                                emp2.Cost = parseInt(document.getElementById('PriceLable').innerHTML);
                                console.log(emp2);
                                $.ajax({
                                    url: "EndCashTemp.php",
                                    method: "POST",
                                    data: emp2,
                                    success: function (res) {
                                        console.log(res);
                                    }
                                })
                            }
                            alert('Yes');
                            window.location.replace("http://localhost/Glomus/PrintSubNormalOrder.php");
//                            window.location.reload();
//                            location.replace("http://localhost/Glomus/ReloadMakeOrderPage.php");
                        }
                    }
                }
            </script>
        </div>

    </body>
</html>
