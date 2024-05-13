<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/web_logo.jpg">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>College Election Management System</title>
    <script src="jsx/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="jsx/index.js"></script>
</head>
<body class="index_body">
    
    <?php include 'includes/header.php';?>
<div class="nominis_display">
    <?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cems";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from MySQL table
$sql = "SELECT * FROM nominis";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<div class="index_post">';
       echo '<div class="banner">';
       echo '<div class="post_img">'.'<img src="' . $row['profile'] . '" class="post_img1" alt="Profile">'.'</div>';
       echo '<h3>'.$row['name'].'</h3>';
       echo '<h3 class="display_post">'.$row['posting'].'</h3>';
       //echo '<h3>'.$row['description'].'<h3>';
       echo '<h4 class="votetxt">Vote For Me!!</h4>';
       echo '</div>';
       echo '</div>';
    }
} else {
    echo '<div class="nodata">';
    echo '<img src="banners/nodata.jpg" class="nodata1">';
    echo '</div>';
}
?>    
</div>
</body>
<div class="foot">
<?php include 'includes/footer.php' ; ?>
</div>
</html>


