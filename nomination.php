<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cems";

    $con = new mysqli($servername, $username, $password, $database);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $name = $_SESSION['un'];
    $year = $_POST['n_yr'];
    $posting = $_POST['n_post'];
    $rno = $_POST['regno'];
    $des = $_POST['n_desc'];
    $profile = $_FILES['n_profile'];
    
    $fileExt = strtolower(pathinfo($profile['name'], PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    if (in_array($fileExt, $allowedExtensions) && $profile['error'] === 0) {
        $newFileName = $name . '.' . $fileExt;
        $fileDestination = 'nominations/' . $newFileName;

        if (move_uploaded_file($profile['tmp_name'], $fileDestination)) {
            $query = "INSERT INTO nominis (name, stdyr, posting, regno, description, profile) VALUES ('$name', '$year', '$posting', '$rno', '$des', '$fileDestination')";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "<script>alert('Sign-up Successful');</script>";
            } else {
                echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
            }
        } else {
            echo "<script>alert('File upload failed');</script>";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="logo/web_logo.jpg">
    <link rel="stylesheet" href="css/index.css">
    <title>Nomination</title>
    <script src="jsx/jquery-3.7.1.min.js"></script>
    <script src="jsx/index.js"></script>
    <script src="jsx/myscript.js"></script>
</head>
<body class="nomini_body">
    <?php include 'includes/header.php'; ?>
    <center>
        <div class="nominis_form">
            <div class="nominis_head">
            <h2>Nomination Form</h2>
            <hr>
            </div>
            <form method="POST" class="n_form" enctype="multipart/form-data">
                <div class="n_cont">
                    <div class="n_name">
                        <?php 
                       echo '<label for="nominis_name">Candidate Name</label>';
               echo' <input readonly type="text"  name="n_name"  autocomplete="off" class="txt1" id="nominis_name" value="'.$_SESSION['un'].'"><br><br><br><br>';
                ?>
                <label class="n_yr">Year Of Studying</label>
                <select name="n_yr" id="year" class="txt1">
                    <option value="">-</option>
                    <option value="II">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                </select><br><br><br><br>
                <label class="n_post">Posting</label>
                    <select name="n_post" id="posting" class="txt1">
                        
                    </select><br><br><br><br>
                    <?php
                    echo '<label >Candidate Reg No.</label>';
                    echo '<input type="text" readonly class="txt1" name="regno" autocomplete="off" value="'.$_SESSION['regno'].'" required>';
                    ?>
                    <br><br>
                <br><br>
                <label class="n_txt">Description</label>
                <textarea name="n_desc" id="" cols="25" rows="10"></textarea>
            </div>
            <div class="n_image">
                <div class="container">
                <div class="image-container">
                  <img id="uploaded-photo" src="#" alt="Uploaded Photo">
                  <input type="file" name="n_profile" id="photo-upload" accept="image/*" hidden>
                <label for="photo-upload" id="upload-label">+</label>
                </div>
                </div>
                <h3 class="nominis_name1">Upload Your Photo</h3>
            </div>
            </div><br><br>
            <div class="n_sub">
                <input type="submit" value="Register" class="n_btn">
            </div>
                </form>
        </div>
    </center>
    <script>
        const uploadInput = document.getElementById('photo-upload');
const uploadedPhoto = document.getElementById('uploaded-photo');
const uploadLabel = document.getElementById('upload-label');

uploadInput.addEventListener('change', function(e) {
  const file = e.target.files[0];
  const reader = new FileReader();

  reader.onload = function(e) {
    uploadedPhoto.src = e.target.result;
    uploadedPhoto.style.display = 'block';
  }

  reader.readAsDataURL(file);
  uploadLabel.style.display = 'none';

});
    </script>
    <?php include 'includes/footer.php' ; ?>
</body>
</html>