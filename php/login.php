<?php

if (isset($_POST["submit"])){
    include '../dbconnect.php';
    $email = $_POST["email"];
    $pass =  $_POST["pass"];
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = '$email' AND pass = '$pass'");
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();
    if ($number_of_rows > 0) {
        session_start();
        $_SESSION["sessionid"] = session_id();
        echo "<script>alert('Login Success');</script>";
       echo "<script> window.location.replace('store.php')</script>";
    } else {
        echo "<script>alert('Login Failed');</script>";
        echo "<script> window.location.replace('login.php')</script>";
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>GeraiNo.7</title>
    <meta name="description" content="This is the description">
    <link rel="stylesheet" href="../style/style.css" />
    <script src="../script/store.js" async></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/1dd357b823.js" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/1dd357b823.js" crossorigin="anonymous"></script>
    </head>

    <body onload="loadCookies()">

    <header class="main-header">
        <nav class="main-nav nav">
        <ul>
                <li><a href="register.php">SIGN UP</a></li>
                
            </ul>
        </nav>
      
        <h1 class="band-name band-name-large" id="Home">Kedai Roti Canai Pak Jabar</h1>

    </header>


    

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

       
        <div class="w3-container w3-padding-64 form-container">
            <div class="w3-card-4 w3-round">
                <div class="w3-container w3-text-white" style="background: #6C4A3F">
                    <h2 style="font-weight:500; font-size:xx-large;">Login</h2>
                </div>   

                <form name="loginForm" class="w3-container" action="login.php" method="post">
                    
                
                    <i class=" input-container fa fa-envelope icon"></i>    
                    <label class="w3-text-black"><b>Email</b></label>
                        <input class="w3-input w3-border w3-round" name="email" type="email" id="idemail" required>
                     </p>
                    <p>
                    <i class=" input-container fa fa-key icon"></i>
                        <label class="w3-text-black"><b>Password</b></label>
                        <input class="w3-input w3-border w3-round" name="pass" type="password" id="idpass" required>
                    </p>
                    <p>
                        <input class="w3-check" type="checkbox" id="idremember" name="remember" 
                        onclick="rememberMe()">
                        <label>Remember Me</label>
                    </p>
                    <p>
                        <button class="w3-btn w3-round w3-block w3-text-white" style="font-weight:bolder; font-size:medium; background:#6C4A3F;" name="submit">Login</button>
                    </p>
                    <p>
                        Don't have an account? <a href="register.php" style="font-weight:bolder;">Sign up</a>
                    </p>
                </form>
            </div>
        </div>

   <!-- End page content -->
</div>

   <!-- Footer -->
   <footer class="w3-center w3-dark-grey w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#Home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <p>Copyright: <br> GeraiNo.7@gmail.com</p>
    </footer>
    </body>
</html>