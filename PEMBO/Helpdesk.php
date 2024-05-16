<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Helpdesk.css">

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
        <a href="#"class="home">HELP DESK</a>
        <a href="Login.php"class="login" >LOGIN</a>
    </div>
   
  
    <div class="titlee">
        <span class="part1">BARANGAY </span>
        <span class="part2">PEMBO</span>
    </div>
    <div class="title">
        <h4>HELP DESK</h4>
    </div>
    <form class="help-desk-form">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="purpose">Purpose:</label>
        <select id="purpose" name="purpose" required>
            <option value="" disabled selected>Select purpose</option>
            <option value="Barangay ID">Barangay ID</option>
            <option value="Certificates">Certificates</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div class="form-group" id="other-purpose-group" style="display: none;">
        <label for="other-purpose">Other Purpose:</label>
        <input type="text" id="other-purpose" name="other-purpose">
    </div>
    <div class="form-group">
        <label for="schedule">Target Schedule:</label>
        <input type="datetime-local" id="schedule" name="schedule" required>
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit">Submit</button>
</form>


   <script src="Helpdesk.js"></script>

</body>
</html>
