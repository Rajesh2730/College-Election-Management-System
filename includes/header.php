<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<div class="header">
<div class="cont1">
    <a href="http://localhost/demopro/" ><div class="ref_head"><img src="logo/logo.jpg" class="logo1"><a href="http://localhost/demopro/" class="logo_txt">CEMS</a></div></a>
</div>
<div class="cont2">
    
        
        <input type="button" value="Home" class="header-btn" id="home">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="button" value="Sign-Up" class="header-btn2" id="signup">&nbsp;&nbsp;&nbsp;&nbsp;
        
        </div>
        <div class="cont3"> 
        <button class="header_btn1" id="profile">&nbsp;
<?php
    // Check if session variable is set
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $displayStyle = "block"; // Session started, so show the div
} else {
    $displayStyle = "none"; // Session not started, so hide the div
}
    ?>

<?php

 // Check if the image path is stored in session
 echo '<div class="pro_img">';
 if (isset($_SESSION['img'])) {
     // Display image from session variable
     echo '<img src="' . $_SESSION['img'] . '" class="profile_img">';
 } else {
     echo '<i class="fa-solid fa-user"></i>';
 }
 echo '</div>';
 echo '<div class="pro_name">';
    if(isset($_SESSION['un'])){
        echo "".$_SESSION['un'];
        
    }
    else{
        echo "GuestUser";
    }  
echo '</div>'; 
    ?>
  
    </button>&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="menu-content">
    <a href="./login.php" id="login">Log-In</a>
    <div class="profile">
        <a href="./userprofile.php" name="profile">Profile</a>
</div>
    </div>
    </div>
</div>
</div>
<style>
        .profile{
            display: <?php echo $displayStyle; ?>;
        }
    </style>
