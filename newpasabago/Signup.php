<?php
require_once "database.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="Signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="common.js"></script>
</head>
<body>
<div class="nav-links">
    <a href="Signup.php" class="signup">Signup</a>
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
require_once "database.php";

if (isset($_POST["submit"])) {
    $fullname = $_POST["txt"];
    $email = $_POST["email"];
    $password = $_POST["pswd"];
$phonenumber = $_POST["phone"];
$address = $_POST["address"];


    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($fullname) || empty($email) || empty($password) || empty($phonenumber) || empty($address)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }
    // Phone number validation
    if (!preg_match("/^[0-9]{10}$/", $phonenumber)) {
        array_push($errors, "Phone number is not valid. Please enter a 10-digit number.");
    }
    if (strlen($address) < 5) {
        array_push($errors, "Home Address must be at least 5 characters long");
    }

    if (count($errors) === 0) {
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowCount = mysqli_num_rows($result);

        if ($rowCount > 0) {
            array_push($errors, "Email already exists");
        } else {
            // Attempt to insert the user into the database
            $insert_sql = "INSERT INTO user (full_name, email, password, phone_number, address) VALUES (?, ?, ?, ?, ?)";
            $insert_stmt = mysqli_prepare($conn, $insert_sql);

            if ($insert_stmt) {
                mysqli_stmt_bind_param($insert_stmt, "sssss", $fullname, $email, $passwordHash, $phonenumber, $address);
                if (mysqli_stmt_execute($insert_stmt)) {
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
                }
            }
        }
    }
}
?>

    <div class="container" id="main">
        <div class="sign-in">
            <form action="" method="POST">
                <h1>Create Account</h1>
                <p>or use your email for registration</p>
                <input type="text" name="txt" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="pswd" placeholder="Password">
                <input type="text" name="phone" placeholder="Phone Number">
                <input type="text" name="address" placeholder="Address">
                <div class="sign-up-button">
                    <input type="submit" name="submit" value="SIGN UP" id="signup-button-form">
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-right"> <!-- Modified class to overlay-left -->
                    <p>To keep connected with us please login with your personal info</p>
                    <button id="signIn">Sign In</button>
                </div>
            </div>
        </div>
    </div>

<script src="Signup.js"></script>
</body>
</html>
