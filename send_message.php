<?php include 'sidebar.php';
include'connection.php';
// include'session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Message Sent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Message Sent</h1>
    <div class="container">
    <?php
// include 'sidebar.php';
// include 'connection.php';

// Check if the user is logged in and has a session name
if (isset($_SESSION['name'])) {
    $sender = $_SESSION['name'];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $recipient = $_POST["recipient"];
        $message = $_POST["message"];
        
        // Insert the message into the database
        $sql = "INSERT INTO messages (sender, recipient, message) VALUES ('$sender', '$recipient', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<p><strong>Recipient:</strong> " . htmlspecialchars($recipient) . "</p>";
            echo "<p><strong>Message:</strong> " . htmlspecialchars($message) . "</p>";
            echo "<p>Message sent.</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<p>Invalid request. Please use the message form to send a message.</p>";
    }
} else {
    echo "<p>Please log in to send a message.</p>";
}
?>
