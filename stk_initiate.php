<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;

    // Your existing cURL code
    $ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer 3BojKAkfJOogyqNVTdOBYPobgrBv',
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POST, 1);

    // Use an associative array for the JSON payload
    $data = [
        "BusinessShortCode" => 174379,
        "Password" => "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjMxMjAxMTUxNjA5",
        "Timestamp" => "20231201151609",
        "TransactionType" => "CustomerPayBillOnline",
        "Amount" => $amount,
        "PartyA" => $phone,
        "PartyB" => 174379,
        "PhoneNumber" => $phone,
        "CallBackURL" => "https://mydomain.com/path",
        "AccountReference" => "cloudsMediflow",
        "TransactionDesc" => "Payment of X",
    ];

    // Convert the data array to JSON
    $json_data = json_encode($data);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
} else {
    // Handle cases where the script is accessed directly without a POST request
    echo "Invalid access";
}
?>



