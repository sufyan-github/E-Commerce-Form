<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO orders (name, address, product_code, quantity) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $name, $address, $product_code, $quantity);

// Set parameters and execute
$name = $_POST['name'];
$address = $_POST['address'];
$product_code = $_POST['product_code'];
$quantity = $_POST['quantity'];

if ($stmt->execute()) {
    echo "Order submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
