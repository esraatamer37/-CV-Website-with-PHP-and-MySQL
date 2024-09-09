<?php

$conn = new mysqli("localhost", "root", "", "my_cv_web");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Message saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    
    }

    if ($stmt->execute()) {
        header("Location: success.html");
        exit(); 
    } else {
        echo "Error: " . $stmt->error;
    }
    

    $stmt->close();
}

$conn->close();
?>
