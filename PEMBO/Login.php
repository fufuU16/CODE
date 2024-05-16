<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Signup.css">

    <title>Containers Example</title>
   
</head>
<body>
    <div class="top-image">
        <img src="picture/Imagetop.png" alt="Header Image">
    
    </div>
    <div class="navbar">
        <a href="Homepage.php" >Home</a>
        <a href="BarangayUp.php">BARANGAY UPDATES</a>
        <a href="Entertainment.php">ENTERTAINMENT</a>
        <a href="Helpdesk.php">HELP DESK</a>
        <a href="#"class="login" >LOGIN</a>
    </div>
   
    <div class="Login">
    <div class="login-container">
    <div class="half-left">
        <div class="centered">
          
        </div>
    </div>
    <div class="half-right">
        <div class="centered">
          
        </div>
    </div>
</div>

<div class="overlay-container">
<div class="centered">
            <h2>You don’t have an account?</h2>
            <button class="signup-button" id="Signup-button" style="display: flex; justify-content: center;">Signup</button>
        </div>
<div class="overlay-left">
      
    </div>
    <div class="overlay-right">
    <h2>Login</h2>
<input type="email" placeholder="Email">
<input type="password" placeholder="Password">
<button class="login-button">Login</button>
<a href="forgot_password.html">Forgot Password?</a>
    </div>
</div>
</div>
   <script src="Login.js"></script>

</body>
</html>
