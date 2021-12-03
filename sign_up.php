<?php
    session_start();
    $link = mysqli_connect('localhost', 'root', '08061646761', 'xfinance');
    $check_email = "";
    if (isset($_POST['sign'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $confirm_passowrd = $_POST['confirm_passowrd'];
        $_SESSION['echo'] = "<script>Welcome $user_name</script>"; 
        $sql_check = "SELECT * FROM register WHERE email = '$email'";
        $check = mysqli_query($link, $sql_check);
        while ($row = mysqli_fetch_assoc($check)) {
            $check_email = $row['email'];
        }
        printf("Errormessage%s/n", mysqli_error($link));
        if ($check_email == !"") {
            echo "<script>alert('$email already exists')</script>";
        }
        else {
            $sql_insert = "INSERT INTO register (first_name, last_name, email, user_name, password, confirm_passowrd) VALUES ('$first_name','$last_name','$email','$user_name', '$password','$confirm_passowrd')";
            $insert = mysqli_query($link, $sql_insert);
            if ($insert == true) {
                header("location:login.php");
                
            }
            else {
                echo"<script>alert('Sorry An Error Occured. Please Contact 08022533611 for assistance')</script>";
            }
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
        <img  src="img/logo (1).png" class="logo1" width="20%" alt="">
    </nav>
    <section class="mt-5">
        <div class="container">
            
                    <form action="" method="POST" class="login form-controls  mb-5">
                        <h5 class="text-center register">REGISTER</h5>
                        <br><br>
                        <div class="text-center"><i class="fa fa-file fa-2x mr-3 icon"></i><input type="text" class="text-muted input1" required maxlength="20" name="first_name" placeholder="First Name" ></div>
                        <br><br>
                        <div class="text-center"><i class="fa fa-file fa-2x mr-3 icon"></i><input type="text" class="text-muted input1" required maxlength="20" name="last_name" placeholder="Last Name" ></div>
                        <br><br>
                        <div class="text-center"><i class="fa fa-envelope fa-2x mr-3 icon"></i><input type="email" class="text-muted input1" maxlength="50" required name="email" placeholder="Email" ></div>
                        <br><br>
                        <div class="text-center"><i class="fa fa-user fa-2x mr-3 icon"></i><input type="text" class="text-muted input1" required maxlength="20" name="user_name" placeholder="User Name" ></div>
                        <br><br>
                        <div class="text-center"><i class="fa fa-lock fa-2x mr-3 icon"></i><input type="password" class="text-muted input1" required maxlength="20" name="password" placeholder="Password" ></div>
                        <br><br>
                        <div class="text-center"><i class="fa fa-lock fa-2x mr-3 icon"></i><input type="password" class="text-muted input1" required maxlength="20" name="confirm_passowrd" placeholder="Confirm Password" ></div>
                        <br><br>
                        <input type="submit" value="SIGN UP" name="sign" class="col-md-6 allign-items-center sign_button">
                        <br><br>
                        <div class="account1">Already Have An Account? <a href="login.php" class="sign">Sign In</a> </div>
                    </form>
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