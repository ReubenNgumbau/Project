<?php
// Include the database connection parameters
include 'connection.php';
include 'sidebar.php';
$patient_name = $_SESSION['name'];

// Initialize variables for notification and result
$notification = "";
$result = false;

// Query to retrieve user appointments from the database
$sql = "SELECT * FROM appointments WHERE patient_name = '$patient_name'";
$result = $conn->query($sql);

// Initialize an array to store the appointments
$appointments = [];

if ($result) {
    if ($result->num_rows > 0) {
        // Fetch each appointment's data and store it in the $appointments array
        while ($row = $result->fetch_assoc()) {
            $appointments[] = $row;
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Your Appointments</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            background-color: black;
            color: #fff;
            padding: 20px;
            margin: 0;
            padding-left: 300px;
            margin-top: 60px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-left: 280px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: black;
            color: #fff;
        }

        /* Add your CSS styling for appointment status here */
        .unapproved {
            color: #FF0000;
            /* Red color for unapproved status */
        }

        .approved {
            color: #00FF00;
            /* Green color for approved status */
        }

        p {
            margin-left: 280px;
            font-size: 18px;
            color: #333;
            /* Change the text color */
            background-color: #f9f9f9;
            /* Add a background color */
            padding: 10px;
            /* Add some padding */
            border-radius: 5px;
            /* Add rounded corners */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Add a subtle shadow */
        }
    </style>
</head>

<body>
    <h1>Your Appointments</h1>

    <?php if (!empty($appointments)): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Doctor Name</th>
                <th>Appointment Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
            </tr>
            <?php foreach ($appointments as $appointment): ?>
                <tr>
                    <td>
                        <?= $appointment['id']; ?>
                    </td>
                    <td>
                        <?= $appointment['doctor_name']; ?>
                    </td>
                    <td>
                        <?= $appointment['appointment_date']; ?>
                    </td>
                    <td>
                        <?= $appointment['start_time']; ?>
                    </td>
                    <td>
                        <?= $appointment['end_time']; ?>
                    </td>
                    <td class="<?= $appointment['status'] === 'Approved' ? 'approved' : 'unapproved'; ?>">
                        <?= $appointment['status']; ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No appointments found.</p>
    <?php endif; ?>

    <!-- Display the notification -->
    <div id="notification">
        <?php echo $notification; ?>
    </div>

    <!-- Add your JavaScript for displaying the notification here -->
    <script>
        <?php if (!empty($notification)): ?>
            // JavaScript code to show a notification when there is a notification
            window.onload = function () {
                var notificationDiv = document.getElementById("notification");
                notificationDiv.style.display = "block";
                setTimeout(function () {
                    notificationDiv.style.display = "none";
                }, 3000); // Display the notification for 3 seconds
            }
        <?php endif; ?>
    </script>
</body>

</html>