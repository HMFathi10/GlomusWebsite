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
        
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <script src="LabIncludeJQuery.js"></script>
                <link rel="stylesheet" href="BootStrapFile.css">
                <link rel="stylesheet" href="BootStrapFile1.css">
                <link rel="stylesheet" href="BootStrapFile2.css">
                <link rel="stylesheet" href="BootStrapFile3.css">
                <script src="JQueryFile.js"></script>
                <script src="JQueryFile1.js"></script>
                <script src="JQueryFile2.js"></script>
                <script src="JQueryFile3.js"></script>-->


        <link href="Boot/bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="Boot/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="Boot/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
        <script src="Boot/Jquery.js"></script>
        <link href="stylesheet.css" rel="stylesheet">


        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            .coupon {
                border: 5px dotted #bbb; /* Dotted border */
                width: 80%;
                border-radius: 15px; /* Rounded border */
                margin: 20px auto; /* Center the coupon */
                max-width: 600px;
            }

            .container {
                padding: 2px 16px;
                background-color: #f1f1f1;
            }

            .promo {
                background: #ccc;
                padding: 3px;
            }

            .expire {
                color: red;
            }

            .wrapper{
                /*                position: absolute;
                                top:50%;
                                left:50%;*/
                float: left;
                margin: 20px 10px;
                /*                transform: translate(-50%, -50%);*/
                width: fit-content;
                height:auto;
            }
            button{
                width:200px;
                height:70px;
                background: linear-gradient(to left top, #c32c71 50%, #b33771 50%);
                border-style: none;
                color:#fff;
                font-size: 23px;
                letter-spacing: 3px;
                font-family: 'Lato';
                font-weight: 600;
                outline: none;
                cursor: pointer;
                position: relative;
                padding: 0px;
                overflow: hidden;
                transition: all .5s;
                box-shadow: 0px 1px 2px rgba(0,0,0,.2);
            }
            button span{
                position: absolute;
                display: block;
            }
            button span:nth-child(1){
                height: 3px;
                width:200px;
                top:0px;
                left:-200px;
                background: linear-gradient(to right, rgba(0,0,0,0), #f6e58d);
                border-top-right-radius: 1px;
                border-bottom-right-radius: 1px;
                animation: span1 2s linear infinite;
                animation-delay: 1s;
            }

            @keyframes span1{
                0%{
                    left:-200px
                }
                100%{
                    left:200px;
                }
            }
            button span:nth-child(2){
                height: 70px;
                width: 3px;
                top:-70px;
                right:0px;
                background: linear-gradient(to bottom, rgba(0,0,0,0), #f6e58d);
                border-bottom-left-radius: 1px;
                border-bottom-right-radius: 1px;
                animation: span2 2s linear infinite;
                animation-delay: 2s;
            }
            @keyframes span2{
                0%{
                    top:-70px;
                }
                100%{
                    top:70px;
                }
            }
            button span:nth-child(3){
                height:3px;
                width:200px;
                right:-200px;
                bottom: 0px;
                background: linear-gradient(to left, rgba(0,0,0,0), #f6e58d);
                border-top-left-radius: 1px;
                border-bottom-left-radius: 1px;
                animation: span3 2s linear infinite;
                animation-delay: 3s;
            }
            @keyframes span3{
                0%{
                    right:-200px;
                }
                100%{
                    right: 200px;
                }
            }

            button span:nth-child(4){
                height:70px;
                width:3px;
                bottom:-70px;
                left:0px;
                background: linear-gradient(to top, rgba(0,0,0,0), #f6e58d);
                border-top-right-radius: 1px;
                border-top-left-radius: 1px;
                animation: span4 2s linear infinite;
                animation-delay: 4s;
            }
            @keyframes span4{
                0%{
                    bottom: -70px;
                }
                100%{
                    bottom:70px;
                }
            }

            button:hover{
                transition: all .5s;
                transform: rotate(-3deg) scale(1.1);
                box-shadow: 0px 3px 5px rgba(0,0,0,.4);
            }
            button:hover span{
                animation-play-state: paused;
            }

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
            /* footer  */
        </style>
    </head>
    <?php
    $FirstPro = 0;
    $SecondPro = 0;
    $FirstProType = 1;
    $SecondProType = 1;
    $localhost0 = "localhost";
    $dbconnection0 = "root";
    $dbpassword0 = "rootroot";
    $dbname0 = "glomus";
    $conn0 = new mysqli($localhost0, $dbconnection0, $dbpassword0, $dbname0);
    if ($conn0->connect_error) {
        die("Connection failed: " . $conn0->connect_error);
    }

    $sql0 = "select * from Product where ProCode = 3";
    $results0 = mysqli_query($conn0, $sql0);
    while ($row0 = mysqli_fetch_assoc($results0)) {
        $FirstPro = $row0['QtyInStock'];
        $FirstProType = $row0['ProType'];
    }
    $sql0 = "select * from Product where ProCode = 2";
    $results0 = mysqli_query($conn0, $sql0);
    while ($row0 = mysqli_fetch_assoc($results0)) {
        $SecondPro = $row0['QtyInStock'];
        $SecondProType = $row0['ProType'];
    }
    ?>
    <body  onload="CheckOfferQty(<?php echo $FirstPro; ?>,<?php echo $FirstProType; ?>,<?php echo $SecondPro; ?>,<?php echo $SecondProType; ?>)">
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
        <div style="padding: 80px;text-align: center;background-size: cover;height: 400px;color: white;background-repeat: no-repeat;background-attachment: fixed;background-position: center;background-image: url(Images/2020-12-22_Talabat_E_637448648809862495.jpg);">
            <h1 style=" font-size: 60px;">Glomus</h1>
<!--            <p>A website created by me.</p>-->
        </div>

        <script>
            function CheckOfferQty(Fir, FirType, Sec, SecType) {
                DisableDelivery();
                if (FirType == 2) {
                    if (SecType == 2) {
                        document.getElementById('CheckBtn').disabled = false;
                    } else {
                        if (Sec >= 1) {
                            document.getElementById('CheckBtn').disabled = false;
                        } else {
                            document.getElementById('CheckBtn').disabled = true;
                        }
                    }
                } else {
                    if (Fir >= 2) {
                        if (SecType == 2) {
                            document.getElementById('CheckBtn').disabled = false;
                        } else {
                            if (Sec >= 1) {
                                document.getElementById('CheckBtn').disabled = false;
                            } else {
                                document.getElementById('CheckBtn').disabled = true;
                            }
                        }
                    } else {
                        document.getElementById('CheckBtn').disabled = true;

                    }
                }
            }
            function OnClickOfferCash(OfferCost, OfferDis) {
                var r = window.confirm("Yas Or No?!");
                if (r == true) {
                    var emp1 = {};
                    $.ajax({
                        url: "OfferCashTemp.php",
                        method: "POST",
                        data: emp1,
                        success: function (res) {
                            console.log(res);
                        }
                    })
                    if (document.getElementById('Delivery').checked) {
                        var emp2 = {};
                        emp2.Type = 2;
                        emp2.OfferCost = OfferCost - OfferDis;
                        emp2.OfferDis = OfferDis;
                        emp2.CustName = document.getElementById('CustomerName').value;
                        emp2.CustPhoneNumber = document.getElementById('myInput').value;
                        emp2.CustAddress = document.getElementById('CustomerAddress').value;
                        emp2.DeliveryCost = document.getElementById('DeliveryCost').value;
                        console.log(emp2);
                        $.ajax({
                            url: "OfferEndCashTemp.php",
                            method: "POST",
                            data: emp2,
                            success: function (res) {
                                console.log(res);
                            }
                        })

                    } else {
                        var emp2 = {};
                        emp2.OfferCost = OfferCost - OfferDis;
                        emp2.OfferDis = OfferDis;
                        emp2.Type = 1;
                        console.log(emp2);
                        $.ajax({
                            url: "OfferEndCashTemp.php",
                            method: "POST",
                            data: emp2,
                            success: function (res) {
                                console.log(res);
                            }
                        })
                    }
//                    var emp2 = {};
//                    emp2.OfferCost = OfferCost - OfferDis;
//                    emp2.OfferDis = OfferDis;
//                    $.ajax({
//                        url: "OfferEndCashTemp.php",
//                        method: "POST",
//                        data: emp2,
//                        success: function (res) {
//                            console.log(res);
//                        }
//                    })
                    alert("done");
                    window.location.replace("http://localhost/Glomus/PrintSubOrder.php");
                }


            }


            function DisableDelivery() {
                document.getElementById('Delivery').checked = false;
                var DeliveryFrom = document.getElementById('DeliveryDiv');
                DeliveryFrom.style.display = 'none';
                document.cookie = "CustomerName=";
                document.cookie = "CustomerAdd=";
            }

            function ableDelivery() {
                document.getElementById('Normal').checked = false;
                var DeliveryFrom = document.getElementById('DeliveryDiv');
                DeliveryFrom.style.display = 'block';
            }

            function myFunction() {
                // Declare variables
//                    var input, filter, ul, li, a, i, txtValue;
//                    input = document.getElementById('myInput');
//                    filter = input.value.toUpperCase();
//                    ul = document.getElementById("myUL");
//                    li = ul.getElementsByTagName('li');
//
//                    // Loop through all list items, and hide those who don't match the search query
//                    for (i = 0; i < li.length; i++) {
//                        a = li[i].getElementsByTagName("a")[0];
//                        txtValue = a.textContent || a.innerText;
//                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
//                            li[i].style.display = "";
//                        } else {
//                            li[i].style.display = "none";
//                        }
//                    }
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

        $sql = "select * from Temp";
        $results = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($results)) {
            
        }


        $sql = "select * from Offers";
        $results = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($results);


        $localhost1 = "localhost";
        $dbconnection1 = "root";
        $dbpassword1 = "rootroot";
        $dbname1 = "glomus";
        $conn1 = new mysqli($localhost1, $dbconnection1, $dbpassword1, $dbname1);
        if ($conn1->connect_error) {
            die("Connection failed: " . $conn1->connect_error);
        }
        $sql1 = "select * from OfferDescription where OfferMainID = '" . $row['OfferID'] . "'";
        $results1 = mysqli_query($conn1, $sql1);
        ?>

        <div class="coupon">
            <div class="container">
                <h3>Glomus Offer</h3>
            </div>
            <img src="Images/2020-12-22_Talabat_E_637448648830171609.jpg" alt="Avatar" style="width:100%;">
            <div class="container" style="background-color:white">
                <h2><b style="float: right;width: 100%;text-align: right;"><?php echo $row['OfferTitle']; ?></b></h2>
                <?php while ($row1 = mysqli_fetch_assoc($results1)): ?>
                    <p style="float: right;width: 100%;text-align: right;font-size: 28px;"> X <?php echo $row1['OfferProQty']; ?> <?php echo $row1['OfferProName']; ?></p>
                <?php endwhile; ?>

            </div>
            <div class="container" style="overflow: auto;">
        <!--                <input type="number" min="1" value="1" style="display: block;width: 100px;text-align: center;">-->
                <!--                <button type="button">أطــلــب</button>-->

                <p style="color: red;text-align: right;width: 100%;float: right;font-size: 23px;text-decoration: line-through;">الـمـبـلـغ : <?php echo $row['OfferCost']; ?> </p>
                <p style="text-align: right;width: 100%;float: right;font-size: 23px;">الـمـبـلـغ : <?php echo $row['OfferCost'] - $row['OfferDis']; ?> </p>
                <p style="text-align: right;width: 100%;float: right;font-size: 23px;">خــصــم : <?php echo $row['OfferDis']; ?> </p>


                <div id="SecSection" style="width: fit-content;margin: 10px 20px 10px 20px;overflow: auto;display: flex;background-color: #f1f1f1;height: 100%;">
                    <div style="width: fit-content;height: fit-content;">
                        <form style="font-size: 20px;overflow: auto;">
                            <h4>نوع الاوردر</h4>
                            <div style="margin: 5px;float: right;display: block;">
                                <input type="radio" checked="true" id="Normal" name="Normal" onclick="DisableDelivery()"  value="1">
                                <label for="Normal">كاش</label><br>
                            </div>
                            <div style="margin: 5px;float: right;display: block;">
                                <input type="radio" id="Delivery" name="Delivery" onclick="ableDelivery()" value="2">
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

                </div>

                <div id = "DeliveryDiv" style="width: 440px;margin-right: 20px;">
                    <form style="font-size: 20px;overflow: auto;width: 100%;">
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
                                <input type="number" value="1" min="1" id="DeliveryCost" name="DeliveryCost" style="float: right;">
                                <br>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="wrapper">
                    <button onclick="OnClickOfferCash(<?php echo $row['OfferCost']; ?>,<?php echo $row['OfferDis']; ?>)" id="CheckBtn" disabled="false" style="font-family: fantasy, serif;">
                        أطلب الأن!
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>








        <!--                <p>Use Promo Code: <span class="promo">BOH232</span></p>
                        <p class="expire">Expires: Jan 03, 2021</p>-->
            </div>
        </div>



    </body>
</html>
