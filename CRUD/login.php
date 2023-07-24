<?php
session_start();

// Check if the user is already logged in
if ($_SESSION['email']) {
    //header("Location: http://localhost/Netscholar/signIn.html"); // Redirect to index page
}else{
    //header("Location: http://localhost/Netscholar/index.html");
}

$server = "localhost";
$user = "root";
$password = "";
$database = "netscholar_db";
$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("Connection failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Login successful
    $_SESSION['email'] = $email;
    header("Location: http://localhost/Netscholar/crud/dashboard.php"); // Redirect to index page
} else {
    // Invalid username or password
    echo "<script>alert('Invalid username or password');</script>";
    echo "<script>window.location.href = 'http://localhost/Netscholar/crud/index.html';</script>";
}

mysqli_close($conn);
?>