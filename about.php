<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 2.5em;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>
    <main>
        <h2>Our Story</h2>
        <p>Welcome to our website. We are a passionate team dedicated to providing high-quality products and services.</p>
        <h2>Our Team</h2>
        <ul>
            <?php
            $teamMembers = [
                'John' => 'CEO',
                'Jane' => 'Marketing Manager',
                'Mike' => 'Lead Developer',
                'Emily' => 'Designer'
            ];
            foreach ($teamMembers as $name => $position) {
                echo "<li>$name - $position</li>";
            }
            ?>
        </ul>
    </main>
</body>
</html>

