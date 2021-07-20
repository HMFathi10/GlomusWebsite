<!DOCTYPE html>
<html  lang="ar"  dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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


        <title>Receipt example</title>
        <style>
            body{
                background: whitesmoke;
            }
            .page{
                font-size: 11px;
                overflow: auto;
                margin-top: 20px !important;
                margin-bottom: 20px !important;
                height: auto;
                /*                margin: auto;*/
                padding-top: 10px;
                width: 400px;
                box-shadow: 0 0 100px rgba(0,0,0,0.2);
                max-width: 100%;
                padding-left: 30px;
                padding-right: 30px;
                background: white;
                float: left;
                margin-right: 20px;
                padding-bottom: 10px;
                /*                background-color: black;
                                color: white;*/

            }
            .f{
                /*                font-size:3em;*/
                font-family: 'Oswald',sans-serif;
                color: white;
                background-color: #000;
                display: block;
                text-align: center;
                width: 100%;
                margin-right: 10px;
                /* margin: 0; */

            }
            img{



                height: 100px;
                /*                position:absolute;*/
                margin-left: 530px;
                /*                margin-top: 40px;*/
                display: block;
                margin: 0;
                float: inherit;
                margin-right: 38%;
                width: 120px;
            }

            .address{
                margin-top: 60px;
                font-size: 18px;
                font-family: 'oswald', sans-serif;
                text-align: right;
                margin-right: 30px;


            }

            .Price-Head{
                padding: 10px 0 20px 0 ;
                column-count: 2;
            }

            .Price-Head h6{
                /*                font-size: 20px;*/
                margin-top: 0px;
                font-family: 'Teko', sans-serif; 
                float: right;
            }


            .shipping-info-head{
                padding: 10px 0 20px 0 ;
                column-count: 2;
                margin-right: 30px;

            }

            .shipping-info-head h6{
                /*                font-size: 20px;*/
                margin-top: 0px;
                font-family: 'Teko', sans-serif; 
                float: right;
            }
            .shipping-info-head p{
                /*                font-size: 15px;*/
                margin-top: 5px !important;
                font-weight: 100;
                font-family: 'Teko', sans-serif; 
            }
            .main-strip{
                column-count: 3;
                margin-top: 17px;
                margin-bottom: 60px;
                text-align: center;
                margin-right: 25px;
                background-color: black;

            }

            .main-strip-Expenses {
                column-count: 2;
                margin-top: 17px;
                margin-bottom: 60px;
                text-align: center;
                margin-right: 25px;
                background-color: black;

            }

            .main-strip-Expenses h6{
                /*                font-size: 18px;*/
                font-size: 11px;
                font-weight: bold;
                /*                color: #212e59;*/
                margin-top: 0px;
                font-family: 'Teko', sans-serif; 
                color: white;

            }

            .main-strip h6{
                /*                font-size: 18px;*/
                font-size: 11px;
                font-weight: bold;
                /*                color: #212e59;*/
                margin-top: 0px;
                font-family: 'Teko', sans-serif; 
                color: white;

            }
            .top{
                margin-bottom: -15px;
                border-top: 2px solid red;
            }
            .bottom{
                margin-top: -60px;
                border-top: 2px solid red;
            }

            .shipping-1{
                column-count: 3;
                margin-top: 5px;
                margin-right: 30px;
                border-bottom: #fff solid thin;
                border-top: #fff solid thin;
                background-color: #000;
                color: #fff;

            }
            .shipping-1-Expenses{
                column-count: 2;
                margin-top: 5px;
                margin-right: 30px;
                border-bottom: #fff solid thin;
                border-top: #fff solid thin;
                background-color: #000;
                color: #fff;

            }
            .shipping-1-Expenses p{
                font-size: 13px;
                margin-top: 5px !important;
                font-weight: bold;
                font-family: 'Teko', sans-serif; 
                border-left: #fff solid thin;

                text-align: center;
            }


            .shipping-1 p{
                font-size: 13px;
                margin-top: 5px !important;
                font-weight: bold;
                font-family: 'Teko', sans-serif; 
                border-left: #fff solid thin;

                text-align: center;
            }
            .shipping-2{
                column-count: 4;
                margin-top: -10px;
            }


            .shipping-2 p{
                /*                font-size: 17px;*/
                margin-top: 5px !important;
                font-weight: 100;
                font-family: 'Teko', sans-serif; 
            }
            .shipping-3{
                column-count: 4;
                margin-top: -10px;
            }

            .shipping-3 p{
                /*                font-size: 17px;*/
                margin-top: 5px !important;
                font-weight: 100;
                font-family: 'Teko', sans-serif; 
            }

            total{
                float: right;
                margin-right: -5px;
                width: 300px;
            }

            .shipping-total{
                column-count: 2;
                margin-top: 10px;
            }


            .shipping-total p{
                /*                font-size: 17px;*/
                margin-top: 5px !important;
                font-weight: 100;
                font-family: 'Teko', sans-serif; 
            }
            .shipping-total-1{
                column-count: 2;
                margin-top: -10px;
            }


            .shipping-total-1 p{
                /*                font-size: 17px;*/
                margin-top: 5px !important;
                font-weight: 100;
                font-family: 'Teko', sans-serif; 
            }
            .shipping-total-2{
                column-count: 2;
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .shipping-total-2 h6{
                /*                font-size: 23px;*/
                margin-top: 0px;
                font-family: 'Teko', sans-serif; 
                text-align: center;
            }


            .theTitle{
                display: flex;
                align-items: center;
                height: 120px;
                margin-top: 700px;
                position: absolute;
                left: 50%;
                top: 10%;
                transform: translate(-50%, -50%);
                width: 600px;
            }
            .right, .left{
                width: 50%;
                overflow: hidden;
            }
            .theTitle h1{
                margin: 0;
                height: 80px;
                margin-top: 50px;
                line-height: 80px;
                vertical-align: middle;
                font-family: 'Dancing Script', cursive;
                font-weight: 600;
                margin-left: 50px;
                font-size: 3.5rem;
                color: #212e59;
                transform: translateX(100%);
                transition: transform 0.6s ease-out .1s;
            }

            .theTitle .separator{
                background-color: black;
                width: 4px;
                transform: rotate(90deg);
                height: 0;
                display: block;
                margin: 0 6px 0 0;
                transition: height 0.3s ease 0.9s, transform 0.3s ease 0.6s;
            }

            .active .separator{
                height: 100%;
                transform: rotate(0);
                transition: height 0.3s ease, transform 0.3s ease 0.4s;

            }
            .theTitle.active h1{
                transform: translateX(0);
                transition: transform 0.6s ease-out 0.8s;
            }
            .theTitle.active p{
                transform: translateX(0);
                transition: transform 0.5s ease-out 0.7s;
            }
            .theTitle .right{
                display: flex;
                align-items: center;
                width: 50%;
            }
            .theTitle p{
                margin: 0;
                padding: 0;
                font-family: 'Teko';
                /*                font-size: 1.3rem;*/
                font-weight: 400;
                line-height: 200px;
                margin-top: 0px;
                vertical-align: middle;
                display: flex;
                align-items: center;
                text-transform: uppercase;
                color: red;
                transform: translateX(-100%);
                transition: transform 0.5s ease-out;
            }

            @media(max-width: 750px){
                img{
                    height: 70px;
                    position:absolute;
                    margin-left: 430px;
                    margin-top: 40px;
                }

            }
            h6{
                width: 100%;text-align: right;margin-right: 30px;
            }
            ul.a {
                list-style-type: circle;
                float: right;
                font-size: 17px;
                margin-right: 40px;
            }h4{
                text-align: right;
                margin-right: 40px;
            } 

        </style>
    </head>
    <body onafterprint="AfterPrint()"  onload="PrintLoad()">
        <script src="Boot/bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


        <div class="page">
    <!--            <img src="Images/Logo1.jpg" ALIGN="right">-->
            <h1 class="f">Glomus</h1>
            <h6><?php
                date_default_timezone_set('Africa/Cairo');
                echo date("Y/m/d") . "  " . date("h:i:sa");
                ?></h6>
            <?php
            $localhost2 = "localhost";
            $dbconnection2 = "root";
            $dbpassword2 = "rootroot";
            $dbname2 = "glomus";
            $conn2 = new mysqli($localhost2, $dbconnection2, $dbpassword2, $dbname2);
            if ($conn2->connect_error) {
                die("Connection failed: " . $conn2->connect_error);
            }

            $localhost = "localhost";
            $dbconnection = "root";
            $dbpassword = "rootroot";
            $dbname = "glomus";
            $conn = new mysqli($localhost, $dbconnection, $dbpassword, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            ?>
            <?php
            $sql = "select sum(QtyInStock*SellingPrice) as TotalPrice from Product";
            $results = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($results);
            $TotalSellPrice = $row['TotalPrice'];
            ?>
            <h6>سـعـر الـبـضـاعـة :    <?php echo $TotalSellPrice; ?></h6>
            <?php
            $sql = "select sum(ExpRevTotalPrice) as TotalPrice from ExpensesReview";
            $results = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($results);
            $TotalSellPrice = $row['TotalPrice'];
            ?>
            <h6>الـمـبـيـعـات :  <?php echo $TotalSellPrice; ?></h6>
            <?php
            $sql = "select * from ReviewData where ReviewDataId = 1";
            $results = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($results);
            $TotalDisPrice = $row['ReviewDataCost'];
            ?>
            <h6>الـخـصـومـات :  <?php echo $TotalDisPrice; ?></h6>
            <?php
            $sql = "select sum(RealExpCost) as TotalExpenses from RealExpenses where RealExpIsDeleted = 0 and RealExpType = 1";
            $results = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($results);
            $TotalExpenses = $row['TotalExpenses'];
            ?>
            <h6> الـمـصـروفـات: <?php echo $TotalExpenses; ?> </h6>
            <h6>الـمـبـلـغ الـكـلـي : <?php echo $TotalSellPrice - $TotalDisPrice - $TotalExpenses; ?> </h6>
            <?php
            $sql = "select sum(RealExpCost) as TotalExpenses from RealExpenses where RealExpIsDeleted = 0 and RealExpType = 1";
            $results = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($results);
            $TotalUsageExpenses = $row['TotalExpenses'];
            ?>
            <h6> الـمـسـتـهـلـكـات: <?php echo $TotalUsageExpenses; ?> </h6>


            <?php
            $sql = "select * from ReviewData where ReviewDataId = 4";
            $results = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($results);
            $TotalDelivery = $row['ReviewDataCost'];
            ?>
            <h6>الـدلـيـفـري : <?php echo $TotalDelivery; ?> </h6>

            <h6 style="margin-top: 20px;">الـمـبـيـعـات </h6>

            <hr class="top">
            <div class="main-strip">
                <h6>الـوصـف</h6>
                <h6>الـكـمـيـة</h6>
                <h6>الـسـعـر الـكـلـي</h6>
            </div>
            <hr class="bottom">
            <?php
            $sql2 = "select * from ExpensesReview";
            $results2 = mysqli_query($conn2, $sql2);
            ?>
            <?php while ($row2 = mysqli_fetch_assoc($results2)): ?>
                <div class="shipping-1">
                    <p><?php echo $row2['ExpRevProName']; ?></p>
                    <p><?php echo $row2['ExpRevQty']; ?></p>
                    <p><?php echo $row2['ExpRevTotalPrice']; ?></p>

                </div>
            <?php endwhile; ?>

            <h6 style="margin-top: 20px;">الـمـصـروفـات </h6>
            <hr class="top">
            <div class="main-strip-Expenses">
                <h6>الـصـنـف</h6>
                <h6>الـمـبـلـغ</h6>
            </div>
            <hr class="bottom">
            <?php
            $sql2 = "select * from RealExpenses where RealExpType=1 and RealExpIsDeleted=0";
            $results2 = mysqli_query($conn2, $sql2);
            ?>
            <?php while ($row2 = mysqli_fetch_assoc($results2)): ?>
                <?php if ($row2['RealExpIsDeleted'] == 0) : ?>
                    <div class="shipping-1-Expenses">
                        <p><?php echo $row2['RealExpProName']; ?></p>
                        <p><?php echo $row2['RealExpCost']; ?></p>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>

            <h6 style="margin-top: 20px;">الـمـسـتـهـلـكـات </h6>
            <hr class="top">
            <div class="main-strip-Expenses">
                <h6>الـصـنـف</h6>
                <h6>الـكـمـيـة</h6>
            </div>
            <hr class="bottom">
            <?php
            $sql2 = "select * from RealExpenses where RealExpType=2 and RealExpIsDeleted = 0 ORDER BY RealExpProId DESC";
            $results2 = mysqli_query($conn2, $sql2);
            ?>
            <?php while ($row2 = mysqli_fetch_assoc($results2)): ?>
                <div class="shipping-1-Expenses">
                    <p><?php echo $row2['RealExpProName']; ?></p>
                    <p><?php echo $row2['RealExpQty']; ?></p>
                </div>
            <?php endwhile; ?>

            <?php
            $sql = "select * from ReviewData";
            $results = mysqli_query($conn, $sql);
            ?>
            <?php while ($row = mysqli_fetch_assoc($results)): ?>
                <?php if ($row['ReviewDataId'] == 1): ?>
                    <div style="overflow: auto;">
                        <h4>الـخـصـومـات</h4>
                        <ul class="a">
                            <li>عــددها: <?php echo $row['ReviewDataQty']; ?></li>

                            <li>الـمـبـلـغ :  <?php echo $row['ReviewDataCost']; ?></li>
                        </ul>
                    </div>
                <?php elseif ($row['ReviewDataId'] == 2): ?>
                    <div style="overflow: auto;">
                        <h4>اوردارات كــاش</h4>
                        <ul class="a">
                            <li>عــددها: <?php echo $row['ReviewDataQty']; ?></li>

                            <li>الـمـبـلـغ :  <?php echo $row['ReviewDataCost']; ?></li>
                        </ul>
                    </div>

                <?php elseif ($row['ReviewDataId'] == 3): ?>
                    <div style="overflow: auto;">
                        <h4>اوردارات دلـيـفـري</h4>
                        <ul class="a">
                            <li>عــددها: <?php echo $row['ReviewDataQty']; ?></li>

                            <li>الـمـبـلـغ :  <?php echo $row['ReviewDataCost']; ?></li>
                        </ul>
                    </div>
                <?php elseif ($row['ReviewDataId'] == 4): ?>
                    <div style="overflow: auto;">

                        <h4>الـدلـيـفـري</h4>
                        <ul class="a">
                            <li>عــددها: <?php echo $row['ReviewDataQty']; ?></li>

                            <li>الـمـبـلـغ :  <?php echo $row['ReviewDataCost']; ?></li>
                        </ul>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>

        </div>

        <script>
        function DoThis() {
            const $btnPrint = document.querySelector("#btnPrint");
            $btnPrint.addEventListener("click", () => {
                window.print();
                window.onafterprint = function () {
                    alert('Done');
                };
            });
        }
        function PrintLoad() {
            window.print();
        }
        function AfterPrint() {
            window.location.replace("http://localhost/Glomus/EndWholeReviewProccess.php");
        }
        </script>
    </body>
</html>
