<?php
session_start();

// Include the database connection code
include('connection.php'); // You should create this file with database connection details

// Check if the user is logged in, or you can use a session for authentication
if (!isset($_SESSION['name'])) {
    // Redirect to a login page or display an error message
    header("Location: login.php");
    exit;
}

// Check if the form was submitted for updating the profile
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];

    // You should perform proper data validation and sanitation here

    // Update the user's profile information in the database
    $user_id = $_SESSION['name']; // This assumes that 'name' contains the user's ID
    $update_query = "UPDATE consultants SET full_name='$full_name', gender='$gender', email='$email', dob='$dob', phone='$phone' WHERE id=$user_id";
    $result = mysqli_query($conn, $update_query);

    if ($result) {
        echo "Profile updated successfully.";
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
}

// Fetch the user's current profile information
$user_id = $_SESSION['name']; // This assumes that 'name' contains the user's ID
$select_query = "SELECT * FROM consultants WHERE id=$user_id";
$result = mysqli_query($conn, $select_query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>

    <form method="post" action="profile.php">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" value="<?php echo $user['full_name']; ?>"><br>

        <label for="gender">Gender:</label>
        <input type="text" name="gender" value="<?php echo $user['gender']; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>"><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" value="<?php echo $user['dob']; ?>"><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?php echo $user['phone']; ?>"><br>

        <input type="submit" name="update_profile" value="Update Profile">
    </form>

    <a href="logout.php">Logout</a>
</body>
</html>

