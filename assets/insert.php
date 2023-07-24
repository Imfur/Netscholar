<?php

// Connect to the database
$db = new mysqli('localhost', 'username', 'password', 'database_name');

// Check for errors
if ($db->connect_error) {
  die('Connection failed: ' . $db->connect_error);
}

// Get the values from the form
$name = $_POST['name'];
$agent = $_POST['agent'];
$price = $_POST['price'];
$size = $_POST['size'];
$bedrooms = $_POST['bedrooms'];
$bathrooms = $_POST['bathrooms'];

// Handle the image upload
$image_name = $_FILES['image']['name'];
$image_size = $_FILES['image']['size'];
$image_tmp = $_FILES['image']['tmp_name'];
$image_type = $_FILES['image']['type'];
$image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
$allowed_exts = array('jpg', 'jpeg', 'png', 'gif');

if (in_array($image_ext, $allowed_exts) && $image_size < 2000000) {
  $image_path = 'uploads/' . $image_name;
  move_uploaded_file($image_tmp, $image_path);
} else {
  echo "Error: Invalid file type or size";
  exit;
}

// Insert the data into the database
$query = "INSERT INTO properties (name, agent, price, size, bedrooms, bathrooms, image_path) VALUES ('$name', '$agent', '$price', '$size', '$bedrooms', '$bathrooms', '$image_path')";

if ($db->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $db->error;
}

// Close the database connection
$db->close();

?>
