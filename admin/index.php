<?php
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['uname'];
    $password = $_POST['password'];
    
    // Connect to database (Assuming MySQL)
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "cems";
    
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare SQL statement to retrieve user data
    $sql = "SELECT * FROM admin WHERE name='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row=mysqli_fetch_assoc($result);
        // Login successful
        
        // Store username in session for future use
        $_SESSION['un'] = $username;
        echo "<script>alert('Log In successfully');</script>";
        // Redirect user to welcome page
        header("Location: http://localhost/demopro/admin/home.php");
        exit(); // Ensure that script execution stops after redirection
    } else {
        // Login failed
        echo "<script>alert('Invalid username or password')</script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../logo/web_logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CEMS-Admin-Login</title>
</head>
<body class="a-login">
<div class="main-cont">
    <h3 class="text1">College Election Management System - Admin</h3>
    <center>
<form method="POST" class="a-form">
    <h3 class="text">Admin Log-In</h3>
    <input type="text" class="txt1" placeholder="Username" id="user" name="uname" autocomplete = "off"><br><br><br>
    <input type="password" class="txt1" placeholder="Password" id="pass" name="password" autocomplete = "off"><br><br><br><br>
    <button class="sbt-btn" type="submit">Login</button>
</form>
</center>
</div>
</body>
</html>