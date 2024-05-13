<?php
// Assuming you've already established a database connection
// Replace 'your_database_host', 'your_database_name', 'your_username', and 'your_password' with your actual database credentials
$host = 'localhost';
$dbname = 'cems';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Assuming you've started the session already
    session_start();

    // Check if the user is logged in
    if (isset($_SESSION['un'])) {
        $name = $_SESSION['un'];

        // Prepare SQL statement to delete the user account
        $sql = "DELETE FROM user_info WHERE name = :un";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':un', $name);
        $stmt->execute();

        // Destroy session after deleting account
        session_destroy();

        echo "Account deleted successfully.";
    } else {
        echo "User is not logged in.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

header("Location: index.php");
exit;

?>
