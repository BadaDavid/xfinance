<?php
    session_start();
    $link = mysqli_connect('localhost','root','08061646761','xfinance');
    $fetch_email = $fetch_password = "";
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
        $check = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_assoc($check)){
            $fetch_email = $row ['email'];
            $fetch_password = $row ['password'];
        }
        if($fetch_email == "" && $fetch_password ==""){
            echo "<script>alert('Incorrect Login Parameters')</script>";
        }
         else {
               header("location:index2.php");
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="plugins/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="plugins/animate/animate.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugins/wow/wow.min.js">
</head>
<body class="">
    <nav>
        <img  src="img/logo (1).png" class="logo1" width="10%" alt="">
    </nav>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/img-login.svg" alt="">
                </div>
                <div class="col-md-6">
                    <form action="" method="POST" class="login form-controls py-5">
                        <h5 class="text-center ">SIGN IN</h5>
                        <br><br>
                        <div class="text-center"><i class="fa fa-user fa-2x mr-3 icon"></i><input type="email" maxlength="50" class="text-muted input1" required name="email" placeholder="Email" ></div>
                        <br><br>
                        <div class="text-center"><i class="fa fa-lock fa-2x mr-3 icon"></i><input type="password" maxlength="20" class="text-muted input1" required name="password" placeholder="Password" ></div>
                        <br><br>
                        <input type="submit" value="LOGIN" name="login" class="login_button">
                        <br><br>
                        <div class="account">Don't Have An Account? <a href="sign_up.php" class="sign">Sign Up</a> </div>
                    </form>
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