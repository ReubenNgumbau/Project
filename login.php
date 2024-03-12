<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cloudsMediflow</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #007BFF;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .container {
                max-width: 90%;
                padding: 10px;
            }
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
        img {
    display: block; /* Ensures the image is displayed as a block element */
    margin: 0 auto; /* Centers the image horizontally within the container */
    width: 100%; /* Ensures the image does not exceed the container width */
    height: 100px; /* Maintains the aspect ratio of the image */
    border-radius: 10px; /* Adds rounded corners to the image */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow to the image */
}

    </style>
</head>
<body>
<div class="container">
<img src="CL.png" alt="Description of the image">
        <h2>Hi, Welcome back!</h2>
        <h2>Please enter your details to Login.</h2>
        <form action="process_login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Consultant/Doctor" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="checkbox text-start mn-2 remembertext">
                <input type="checkbox" data-val="true" data-val-required="The RememberMe field is required." id="RememberMe" name="RememberMe" value="true" class="shadow-none border">
                <label class="text-black fw-semibold small">Remember me</label>
            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            Have no account? <a href="register.php">Register</a>
        </div>
        <p>&copy; 2023 cloudsMediflow. All rights reserved.</p>
    </div>
</body>
</html>

