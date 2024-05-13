<?php session_start();?>
<?php
// Check if the form is submitted
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cems";

// Create connection
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Check connection
if (!$pdo) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_name = $_SESSION['un'];
    $new_name = $_POST['u_name'];
    $new_mobile = $_POST['u_mob'];

    // Handle image upload if a new image is provided
    if ($_FILES['u_img']['size'] > 0) {
        // Upload image code goes here, store the image path in $new_image_path
        $new_image_path = 'user_profile/' . $_FILES['u_img']['name']; // Example path, change as needed
        move_uploaded_file($_FILES['u_img']['tmp_name'], $new_image_path);
    } else {
        // If no new image is provided, retain the existing image path
        $new_image_path = $_SESSION['img'];
    }

    // Prepare and execute SQL statement to update user details
    $stmt = $pdo->prepare("UPDATE user_info SET name = :name, profile = :profile_image, mob = :mobile WHERE name = :user_name");
    $stmt->bindParam(':name', $new_name);
    $stmt->bindParam(':profile_image', $new_image_path);
    $stmt->bindParam(':mobile', $new_mobile);
    $stmt->bindParam(':user_name', $user_name);
    
    // Check if the update was successful
    if ($stmt->execute()) {
        echo "<script>alert('Profile updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating profile.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile-Edit</title>
    <link rel="icon" href="logo/web_logo.jpg">
    <link rel="stylesheet" href="css/index.css">
    <script src="jsx/jquery-3.7.1.min.js"></script>
    <script src="jsx/index.js"></script>
</head>
<body class="Profile-Edit">
<?php include 'includes/header.php';?>
    <center>
        <div class="pro_edit">
            <h1 style="color: black; font-family: 'Times New Roman', Times, serif; font-weight: bold; font-style: italic;">Edit Profile</h1>
    <hr>
<form method="post" class="form_edit" enctype="multipart/form-data">
  <input type="text" name="u_name" placeholder="Name" class="txt2"><br><br>
  <div class="image_edit">
    <img id="uploaded-photo" src="#" alt="Uploaded Photo">
    <input type="file" name="u_img" id="photo-upload" accept="image/*" hidden>
  <label for="photo-upload" id="upload-label_edit">+</label>
  </div><br><br>
  <input type="text" name="u_mob" placeholder="Mobile No." class="txt2"><br><br>
  <input type="submit" value="Update Profile" class="edit_btn" >
</form>
</div>
</center>
<script>
    const uploadInput = document.getElementById('photo-upload');
const uploadedPhoto = document.getElementById('uploaded-photo');
const uploadLabel = document.getElementById('upload-label_edit');

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
<div class="pro_edit-foot">
<?php include 'includes/footer.php' ; ?>
</div>
</body>
</html>