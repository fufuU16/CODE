<?php
require_once "database.php";
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="common.js"></script>
        <script  src="Loginn.js"></script>
</head>
<body>
    <div class="nav-links">
            <a href="Signup.php" class="login">Signup</a>
            <a href="Login.php" class="login">Login</a>
            <a href="#" class="about-us">About Us</a>
        </div>
    <div class="outer-container">
        <div class="search">
        <div class="logo">
            <a href="Homepage.php">
                <img src="images/Natashalogo.png" alt="natasha">
            </a>
            </div>
            <input type="text" class="search-bar" placeholder="Search...">
            <button class="search-button">Search</button>
        </div> 
    </div>  
    <div class="banner">
        <img src="images/banner1.png" alt="Image 1" class="slide">
        <img src="images/banner2.png" alt="Image 2" class="slide">
        <img src="images/banner3.png" alt="Image 3" class="slide">
        <img src="images/banner4.png" alt="Image 3" class="slide">
      </div>

      <?php
       if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
           $sql = "SELECT * FROM user WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
           if ($user) {
            if (password_verify($password, $user["password"])) {
                   header("Location: Homepage.php");
                   die();
               }else{
                  echo "<div class='alert-danger'>Password does not match</div>";
               }
           }else{
              echo "<div class='alert alert-danger'>Email does not match</div>";
           }
       }

      ?>
    <div class="container" id="main">
        <div class="sign-in">
            <form action="" method="POST">
            <h1>Sign in</h1>
                
                <p>or use your account</p>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="#">Forget your Password?</a>

                <div class="sign-in-button">
        
                    <input type="submit" name="login" value="SIGN IN" id="signin-button-form">
                </div>

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-right">
                    <h1>Hello, Friend</h1>
                    <p>Enter your personal details and start the journey with us</p>
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
