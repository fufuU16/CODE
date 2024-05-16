<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Signup.css">

    <title>Change Password</title>
</head>
<body>
    <div class="top-image">
        <img src="picture/Imagetop.png" alt="Header Image">
    </div>
    <div class="navbar">
        <a href="Homepage.php">Home</a>
        <a href="BarangayUp.php">BARANGAY UPDATES</a>
        <a href="Entertainment.php">ENTERTAINMENT</a>
        <a href="Helpdesk.php">HELP DESK</a>
        <a href="#" class="login">LOGIN</a>
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
            <form method="post" action="Changepass.php">
                    <input type="email" name="email" placeholder="Email" required><br><br>
                    <input type="password" name="oldPassword" placeholder="Old Password" required><br><br>
                    <input type="password" name="newPassword" placeholder="New Password" required><br><br>
                    <button type="submit" name="submit">Change Password</button>
                </form>
            </div>
        </div>
    </div>
<?php
// Include database connection
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $oldPassword = $_POST["oldPassword"];
    $newPassword = $_POST["newPassword"];

    // Check if the email exists in the database
    $check_stmt = $conn->prepare("SELECT * FROM userinfo WHERE Email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();
    if ($result->num_rows > 0) {
        // Email exists, check if old password matches
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password_hash'];
        $salt = $row['salt'];

        // Concatenate old password and salt before hashing
        $oldPasswordWithSalt = $oldPassword . $salt;

        // Verify old password
        if (password_verify($oldPasswordWithSalt, $hashedPassword)) {
            // Old password matches, proceed with changing password
            // Check if the new password is the same as the old password
            if ($oldPassword == $newPassword) {
                echo '<script>alert("New password must be different from the old password.");</script>';
            } else {
                // Check if the new password has been previously used
                $check_previous_stmt = $conn->prepare("SELECT * FROM users WHERE Email = ? AND password_hash = ?");
                $check_previous_stmt->bind_param("ss", $email, $hashedPassword);
                $check_previous_stmt->execute();
                $previous_result = $check_previous_stmt->get_result();

                if ($previous_result->num_rows > 0) {
                    // New password has been previously used
                    echo '<script>alert("New password has been previously used. Please choose a different one.");</script>';
                } else {
                    // Generate new salt
                    $newSalt = bin2hex(random_bytes(32)); // Generate a random 32-byte salt

                    // Concatenate new password and salt before hashing
                    $newPasswordWithSalt = $newPassword . $newSalt;

                    // Hash the new password with salt
                    $newHashedPassword = password_hash($newPasswordWithSalt, PASSWORD_DEFAULT);

                    // Insert old password into the users table
                    $insert_stmt = $conn->prepare("INSERT INTO users (Email, password_hash, salt) VALUES (?, ?, ?)");
                    $insert_stmt->bind_param("sss", $email, $hashedPassword, $salt);
                    $insert_stmt->execute();
                    $insert_stmt->close();

                    // Update password in the userinfo table
                    $update_stmt = $conn->prepare("UPDATE userinfo SET password_hash = ?, salt = ? WHERE Email = ?");
                    $update_stmt->bind_param("sss", $newHashedPassword, $newSalt, $email);
                    if ($update_stmt->execute()) {
                        echo '<script>alert("Password changed successfully.");</script>';
                    } else {
                        echo '<script>alert("Error updating password: ' . $update_stmt->error . '");</script>';
                    }
                    $update_stmt->close();
                }
                $check_previous_stmt->close();
            }
        } else {
            echo '<script>alert("Incorrect old password.");</script>';
        }
    } else {
        echo '<script>alert("Email not found.");</script>';
    }
    $check_stmt->close();
}
?>




    <script src="Login.js"></script>
</body>
</html>
