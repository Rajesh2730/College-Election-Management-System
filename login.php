<?php
//Start The Session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['uname'];
    $password = md5($_POST['password']);
    
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
    $sql = "SELECT * FROM user_info WHERE name='$username' AND password='$password'";
    $result = $conn->query($sql);
   ?>
    <?php
// After successful login
$_SESSION['logged_in'] = true;
    
    if ($result->num_rows == 1) {
        $row=mysqli_fetch_assoc($result);
        // Login successful
        
        // Store username in session for future use
        $_SESSION['un'] = $username;
        $_SESSION['mob'] = $row['mob'];
        $_SESSION['regno'] = $row['regno'];
        $_SESSION['img'] = $row['profile'];
        echo "<script>alert('Log In successfully');</script>";
        // Redirect user to welcome page
        header("Location: http://localhost/demopro/");
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
    <title>Log-In</title>
    <link rel="icon" href="logo/web_logo.jpg">
    <link rel="stylesheet" href="css/index.css">
    <script src="jsx/jquery-3.7.1.min.js"></script>
    <script src="jsx/index.js"></script>
</head>
<body class="body">
    <?php include 'includes/header.php' ?>
    <center>
    <div class="sign-up">
        <center>
            <h1>LOG - IN</h1>
            <hr width="46%">
            <br>
        <div class="signup">
            <form method="POST">
                <table cellpadding="10">
                <tr><td><input type="text" placeholder="Username" name="uname" autocomplete="off" class="txt1"></td></tr> 
                <tr><td><input type="password" placeholder="Password" class="txt1" autocomplete="off" name="password" id="input2"></td></tr> 
                <tr><td><a href="changepass.php">Forgot Password?</a></td></tr>
                <tr><td><input type="submit" value="Register" class="btn1"></td></tr>
                <tr><td>Don't Have An Account? <a class="signin" href="signup.php">Sign-up</a></td></tr>
                </table>
                </form>
    </div>
    </center>
    </div>
    </center>
    <?php include 'includes/footer.php' ; ?>
</body>
</html>