<?php
    session_start();
    $link = mysqli_connect('localhost','root','08061646761','xfinance');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xfinace</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="plugins/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="plugins/animate/animate.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugins/wow/wow.min.js">

</head>
<body>
    <header>
        <nav class="nava">
            <ul class="navbar container">
                <img  src="img/logo (1).png" class="logo nav-brand" alt="">
                <li class="item"><a href="" class="nav">About</a></li>
                <li class="item"><a href="" class="nav">Packages</a></li>
                <li class="item"><a href="" class="nav">Testimonial</a></li>
                <li class="item"><a href="" class="nav">Contact</a></li>
                <li class="item account"><a href="" class="nav">WELCOME</a>
                    <div class="sub-menu">
                        <ul>
                            <li><a href="#" class="">Dashboard</a></li>
                            <li><a href="login.php" class="">Log Out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-6 ">
                    <div class="join">
                        Join Us Today and Earn Huge
                    </div>
                    <br><br>
                    <a href="" class="get">Get Started</a>
                </div>
                <div class="col-6">
                    <img src="img/slide2 (1).png" width="110%" alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mt-5">
            <div class="row justify-content-center ">
                <div class="col-md-3 shadow sections">
                    <center>
                        
                        <img src="img/icons8-wallet-50.png" class="svg">
                        <div class="text1">
                            QUICK AND EASY <br> DEPOSIT
                        </div>
                        <div class="text2 text-muted">
                            We offer the best ways to make payment into the system covering all standard payment methods.
                        </div>
                        
                    </center>
                </div>
                <div class="col-md-3 shadow sections mx-5">
                    <center>
                        <img src="img/icons8-money-64.png" class="svg" alt="">
                        <div class="text1">
                            MAKE MONEY TODAY USING <br> XFINANCE
                        </div>
                        <div class="text2 text-muted">
                            You will get Maximum profit on your Investment as we have Legit strategies in the trading market
                        </div>
                    </center>
                </div>
                <div class="col-md-3 shadow  sections">
                    <center>
                        <img src="img/icons8-bank-64.png" class="svg" alt="">
                        <div class="text1">
                        FAST AND EASY <br> WITHDRAWAL
                        </div>
                        <div class="text2 text-muted">
                            We provide you with an easy way to withdraw your money on the system after you have completed your investment.
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </section>

    <script src="plugins/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script>
        new WOW().init()
    </script>
</body>
</html>