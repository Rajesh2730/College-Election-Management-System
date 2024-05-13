<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $severname="localhost";
    $uname="root";
    $pass="";
    $database="cems";
    
    
    
    $con=new mysqli($severname,$uname,$pass,$database);
    if($con->connect_error){
        die("Failed".$con->connect_error);
    }





    $username = $_POST['un'];
    $password = md5($_POST['pass']);
    $mobile = $_POST['mob'];
    $rno = $_POST['regno'];

    $profile = $_FILES['img'];
    

    // File properties
    $fileName = $profile['name'];
    $fileTmpName = $profile['tmp_name'];
    $fileSize = $profile['size'];
    $fileError = $profile['error'];

    // File extension
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Allowed file types
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($fileExt, $allowedExtensions)) {
        if ($fileError === 0) {
            // Generate unique file name to prevent overwriting existing files
            $newFileName = $username . '.' . $fileExt;
            $fileDestination = 'user_profile/' . $newFileName;
            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                $q="INSERT INTO user_info (name,password,regno,mob,profile) values('$username','$password','$rno','$mobile','$fileDestination')";
                $res=mysqli_query($con,$q);
                $_SESSION['un'] = $username;
                $_SESSION['pass'] = $password;
                $_SESSION['mob'] = $mobile;
                $_SESSION['regno'] = $rno;
                $_SESSION['img'] = $fileDestination;
            if($res){
                echo "<script>alert('Sign-up Successfully');</script>";
                    }
            } 

            else {
                echo "<script>alert('File upload failed');</script>";
            }
        } else {
            echo "<script>alert('Error uploading file');</script>";
        }
    } else {
        echo "<script>alert('Invalid file type');</script>";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
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
            <h1>SIGN-UP</h1>
            <hr width="46%">
            <br>
        <div class="signup">
            
            <form method="POST" enctype="multipart/form-data">
                <table cellpadding="10">
                <tr><td><input type="text" placeholder="Username" name="un" class="txt1" autocomplete="off" required></td></tr> 
                <tr><td><input type="password" placeholder="Password" class="txt1" name="pass" id="input2" autocomplete="off" required></td></tr> 
                <tr><td><input type="password" placeholder="Confirm Password" class="txt1" name="cpass" id="input3" oninput="Password()"></td></tr>   
                <tr><td><label id="msg" class="label"></td></tr>
                <tr><td><input type="text" placeholder="REG.NO" class="txt1" name="regno" autocomplete="off" required></td></tr>
                <tr><td><input type="text" placeholder="MOBILE.NO" class="txt1" name="mob" autocomplete="off" required></td></tr>
                <tr><td><input type="file" class="txt1" name="img" id="img"></td></tr>
                <tr><td><input type="submit" value="Register" class="btn1"></td></tr>
                <br>
                <tr><td>Already Have An Account? <a class="signin" href="login.php">Log-In</a></td></tr>
                </table>
                </form>
    </div>
    </center>
    </div>
    </center>
    <?php include 'includes/footer.php' ; ?>
</body>
</html>