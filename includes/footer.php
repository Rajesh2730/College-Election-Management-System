<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<div class="footer_body">
    <div class="contact">
        <div class="about">
            <h2>About Us...!</h2>
            <p class="f_abt">The company itself is a very successful company. To the laborious architect of pains, those expedient pains are to be repelled, which pains and the like are the result of enduring pains, but at times, in which way. Are they suffering?</p>
        </div>
        <div class="contactus">
            <h2>Contact Us..!</h2>
            <a href="" class="f_alink"><i class="fa-brands fa-whatsapp"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" class="f_alink"><i class="fa-brands fa-instagram"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" class="f_alink"><i class="fa-brands fa-github"></i></a>
        </div>
        <div class="quick_rel">
            <h2>Go To...!</h2>
            <ul class="ul_foot">
            <li class="li-foot"><a href="./index.php" class="f_alink1">Home</a></li>
            <li class="li-foot"><a href="./signup.php" class="f_alink1">Sign-Up</a></li>
            <li class="li-foot"><a href="./login.php" class="f_alink1">Log-In</a></li>
            <span class="profile">
            <li class="li-foot"><a href="./userprofile.php" name="profile" class="f_alink1" >Profile</a></li>
            </ul>    
        </span>
        </div>
    </div>
    <br><br>
    <h4>&copy;All Copyrights-Reserved 2024 </h4>
</div>
<?php
    // Check if session variable is set
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $displayStyle = "block"; // Session started, so show the div
} else {
    $displayStyle = "none"; // Session not started, so hide the div
}
    ?>
<style>
        .profile{
            display: <?php echo $displayStyle; ?>;
        }
    </style>