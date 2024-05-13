<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<div class="header">
<div class="cont1">
    <a href="home.php" ><div class="ref_head"><img src="../logo/logo.jpg" class="logo1"><a href="home.php" class="logo_txt">CEMS-Admin</a></div></a>
</div>
<div class="cont2">
        <input type="button" value="Home" class="header-btn" id="home">&nbsp;&nbsp;&nbsp;&nbsp;
        
        </div>
        <div class="cont3"> 
        <button class="header_btn1" id="profile"><img src="../user_profile/Navaneethan.jpg" class="profile_img"><?php

// Check if the image path is stored in session
echo '<div class="pro_img">';
if (isset($_SESSION['img'])) {
    // Display image from session variable
} else {
    echo '';
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
   ?></button>
   </div>
   </div>