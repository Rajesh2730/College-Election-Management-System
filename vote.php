<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Page</title>
    <link rel="icon" href="logo/web_logo.jpg">
    <link rel="stylesheet" href="css/index.css">
    <script src="jsx/jquery-3.7.1.min.js"></script>
    <script src="jsx/index.js"></script>
</head>
<body>
    <?php include 'includes/header.php' ;?>
    <marquee class="mark">We Value Your Vote Do it Responsible.... "Note: You Can't Change The Vote After Voting And You Are Not Allowed To Go Previous Posting Categorey" Vote With Consciously. Thank You!!</marquee>
    <div class="vote_page">   
        <?php include 'includes/v_navbar.php' ; ?>
<div class="voting_poll">
<marquee class="mark1"> Note: Make Sure That You Done Your Vote If You Click Next You Can't able To Go Previous Categorey Make It Responsible </marquee>
    <center>
        <div class="vote_start">
            <button id="v_start">Start Voting..!</button>
        </div>
    <div class="student_chairman">
    <form>
    <input type="radio" name="S-C" class="v_radio" id="votepoll" value = "Abishek">
    <label class="v_name" for = "Abishek">Abishek</label><br><br>
    <input type="radio" name="S-C" class="v_radio" id="votepoll" value="Rajesh">
    <label class="v_name" for="Rajesh">Rajesh</label><br><br>
    <input type="radio" name="S-C" class="v_radio" id="votepoll" value="Navaneethan">
    <label class="v_name" for="Navaneethan">Navaneethan</label><br><br>
    <input type="radio" name="S-C" class="v_radio" id="votepoll" value="Somu">
    <label class="v_name" for="Somu">Somu</label><br>
    
    
    </form>
    <div>
        <button class="next" id="sc_nxt" type="submit">Next ></button>
    </div>
</div>
<div class="wise_chairman">
    <form>
    <input type="radio" name="W-C" class="v_radio" id="votepoll">
    <label class="v_name">AbisheK</label><br><br>
    <input type="radio" name="W-C" class="v_radio" id="votepoll">
    <label class="v_name">Rajesh</label><br><br>
    <input type="radio" name="W-C" class="v_radio" id="votepoll">
    <label class="v_name">Navaneethan</label><br><br>
    <input type="radio" name="W-C" class="v_radio" id="votepoll">
    <label class="v_name">Somu</label><br>
    
    </form>
    <div>
        <button class="next" id="wc_nxt" type="submit">Next ></button>
    </div>
</div>
<div class="secratory">
    <form>
    <input type="radio" name="Sec" class="v_radio" id="votepoll">
    <label class="v_name">Abishek</label><br><br>
    <input type="radio" name="Sec" class="v_radio" id="votepoll">
    <label class="v_name">rajesh</label><br><br>
    <input type="radio" name="Sec" class="v_radio" id="votepoll">
    <label class="v_name">Navaneethan</label><br><br>
    <input type="radio" name="Sec" class="v_radio" id="votepoll">
    <label class="v_name">Somu</label><br>
    
    </form>
    <div>
        <button class="next" id="sec_nxt" type="submit">Next ></button>
    </div>
</div>
<div class="treasurer">
    <form>
    <input type="radio" name="Tre" class="v_radio" id="votepoll">
    <label class="v_name">Abishek</label><br><br>
    <input type="radio" name="Tre" class="v_radio" id="votepoll">
    <label class="v_name">Rajesh</label><br><br>
    <input type="radio" name="Tre" class="v_radio" id="votepoll">
    <label class="v_name">Naveen</label><br><br>
    <input type="radio" name="Tre" class="v_radio" id="votepoll">
    <label class="v_name">Somu's</label><br>
    
    </form>
    <div>
        <button class="next" id="tre_nxt" type="submit">Next ></button>
    </div>
</div>
<div class="Feed">
    <p class= "tnxfeed">Thanks For Your Valuable Vote.<br><br>Stay Connected For The Election Result. <br><br>Click Below To Go For Homepage</p>
    <button class = "v-h_btn" id="backhome">Back To Home Page!</button>
</div>
</center>
</div>
</div> 
<div>
    <?php include 'includes/footer.php' ;?>
</div>
</body>
</html>