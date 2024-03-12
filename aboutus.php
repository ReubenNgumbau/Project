<?php
// Include the database connection parameters
include 'connection.php';
// include 'session.php';
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cloudsMediflow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-GLhlTQ8iN17EtXgVM46aP7FmL8ppctT+tBE5TcF86jBakFgqnE945d7NVoPFIVPj" crossorigin="anonymous">
    <style>
               body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }


        section {
            background-color: #fff;
            padding: 2em;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        section h2 {
            color: #007BFF;
        }

        section h3 {
            color: #007BFF;
        }
        .container {
            width: 80%;
            margin: auto;
            margin-top: 20px;
            margin-left: 280px;
        }

        h2 {
            color: #007bff;
        }

        h3 {
            color: #007bff;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            margin: 0 10px;
        }

        .footer-bottom {
            margin-top: 20px;
        }

        .social-media a {
            color: #fff;
            margin-right: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    

    <section id="about-us">
        <div class="container">
            <h2>About Us</h2>
            <p>Welcome to cloudsMediflow, where we are dedicated to providing accessible and quality healthcare services online. Our mission is to revolutionize the way healthcare is delivered, making it convenient and efficient for everyone.</p>

            <h3>Our Vision</h3>
            <p>At cloudsMediflow, we envision a future where healthcare is accessible to anyone, anywhere. We strive to create a platform that bridges the gap between patients and healthcare providers, ensuring timely and effective medical care for all.</p>

            <h3>Key Features</h3>
            <ul>
                <li>Secure and Confidential Consultations</li>
                <li>24/7 Access to Healthcare Professionals</li>
                <li>Virtual Appointments with Specialists</li>
                <li>Easy-to-Use Interface for Patients and Providers</li>
                <li>Integrated Electronic Health Records (EHR)</li>
            </ul>

            <h3>Meet Our Team</h3>
            <p>Our team consists of dedicated professionals with diverse backgrounds in healthcare, technology, and customer service. Together, we are committed to making a positive impact on the healthcare industry.</p>
            <!-- You can include team member profiles here -->

            <h3>Awards and Recognitions</h3>
            <p>Over the years, cloudsMediflow has received several accolades for innovation and excellence in telehealth. These recognitions motivate us to continue our journey toward improving healthcare accessibility.</p>

            <h3>Contact Us</h3>
            <p>If you have any questions or feedback, feel free to reach out to us. We are here to assist you in any way we can.</p>
            <!-- Include your contact details here -->
        </div>
    </section>

    <?php include 'footer.php'; // Include your footer file ?>
</body>
</html>
