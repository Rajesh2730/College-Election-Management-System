<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/web_logo.jpg">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="jsx/jquery-3.7.1.min.js"></script>
    <script src="jsx/index.js"></script>
</head>
<body>
<?php include 'includes/header.php';?>
<?php


echo '<div class="pro">';
echo '<input type="button" value="Vote!" class="logout_btn3" id="vote">';
echo '<button class="logout_btn1" id="Deact"> Deactivate Account </button>';
echo '<button class="logout_btn" onclick="logout()" id="lout">Log-Out!</button>';
echo '<input type="button" value="Nominations" class="logout_btn2" id="nominate">';
echo '<input type="button" value="Edit Profile" class="logout_btn2" id="profile_edit">';
echo '</div>';
echo '<hr>';
echo '<br>';
echo '<br>';


?>
<?php


$username=$_SESSION['un'];
$profile_img=$_SESSION['img'];
$mobile=$_SESSION['mob'];
$rno=$_SESSION['regno']; 
echo "<center>";
echo '<table class="profile_table">';
echo '<tr><th>NAME <td class="profile_d">'.$username. '<td>';
echo '<tr><th>PROFILE <td class="profile_d">'.'<div class="profile-container">'.'<img src="' . $profile_img . '" class="display_img" alt="Profile">'.'<td>';
echo '<tr><th>REG NO <td class="profile_d">'.$rno.'<td>';
echo '<tr><th>MOBILE <td class="profile_d">'.$mobile.'<td>';
echo "</table>";
echo "</center>";


?>
</body>
</html>