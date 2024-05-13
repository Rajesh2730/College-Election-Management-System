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

    $username = $_POST['user'];
    $password = $_POST['pass'];


    $q="INSERT INTO admin (name,password) values('$username','$password')";
    $res=mysqli_query($con,$q);
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;
                
    if($res){
        echo "<script>alert('Sign-up Successfully');</script>";
    }
    else {
        echo "<script>alert('Error Occured');</script>";
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
    <title>CEMS-Admin</title>
    <script src="../jsx/jquery-3.7.1.min.js"></script>
    <script src="./js/index.js"></script>
</head>
<body class="a_body">
    <?php include './includes/header.php'; ?>
    <div class=" main">
    <?php include './includes/categories.php';?>
    <div class="contents">
    <div class = "signup">
    <form method="post">
        <input type="text" placeholder="Username" name="user" autocomplete="off" class="s-input"><br><br>
        <input type="password" placeholder="Password" name="pass" autocomplete="off" class="s-input"id="pass"><br><br>
        <input type="password" placeholder="Confirm Paassword"  autocomplete="off" class="s-input"id="cpass" oninput="password()"><br><br>
        <label id="msg"></label><br><br>
        <button type="submit" class="s-btn">SignUp</button>
    </form>    
    </div>
    </div>
    </div>
</body>
</html>