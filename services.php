<?php
include 'sidebar.php';
include 'connection.php';
// include 'session.php';

// Function to fetch and display doctors for a specific service


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telemedicine Services</title>
    <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 350px;
        }
        .service {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }
        .service h2 {
            color: #0074a2;
        }
        .service p {
            margin-top: 10px;
        }
        .apply-button {
            background-color: #0074a2;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .apply-button:hover {
            background-color: #005983;
        }
        h1{
            padding-left: 300px;
            margin-top: 60px;
        }
        
    </style>
        <script>
function displayDoctors($service) {
    global $connection;

    $query = "SELECT * FROM doctor WHERE service = '$service'";
    $result = mysqli_query($conn, $query);

    echo "<h3>Doctors for $service:</h3>";

    if (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>{$row['doctor_name']}</li>";
        }
        echo "</ul>";
    } else {
        echo "No doctors available for this service.";
    }
}
    document.addEventListener('DOMContentLoaded', function() {
        // Attach event listeners to the "Apply" buttons
        const applyButtons = document.querySelectorAll('.apply-button');
        applyButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const serviceName = button.parentNode.querySelector('h2').textContent.trim();
                displayDoctors(serviceName);
            });
        });
    });
</script>
</head>
<body>
    <header>
        <h1>Our Services</h1>
    </header>
    <div class="container">
        <div class="service">
            <h2>Mental Health Services</h2>
            <p>We offer Teletherapy and counseling services for mental health issues, such as anxiety, depression, and stress management.</p>
            <button class="apply-button" onclick="displayDoctors('Mental Health Services')">Apply</button>
        </div>
        <div class="service">
            <h2>Chronic Disease Management</h2>
            <p>We cater for remote management and monitoring of chronic conditions like diabetes, hypertension, and asthma to track progress and adjust treatment plans as needed.</p>
            <button class="apply-button" onclick="displayDoctors('Chronic Disease Management')">Apply</button>
        </div>
        <div class="service">
            <h2>Medical Education and Information</h2>
            <p>We allow access to educational resources, health information, and wellness programs to empower patients with knowledge and tools for self-care.</p>
            <button class="apply-button" onclick="displayDoctors('Medical Education and Information')">Apply</button>
        </div>
        <!-- Add more service sections as needed -->
    </div>
</body>
</html>

