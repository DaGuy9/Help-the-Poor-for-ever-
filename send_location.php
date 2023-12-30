<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the POST request
    $latitude = $_POST['latitude'] ?? null;
    $longitude = $_POST['longitude'] ?? null;
    
    // Example: Check if latitude and longitude exist, then send an email
    if ($latitude !== null && $longitude !== null) {
        // Construct the email message
        $to = "testimony1201@gmail.com"; // Update this with your email address
        $subject = "Received Location Data";
        $message = "Latitude: " . $latitude . "\nLongitude: " . $longitude;
        
        // Send the email
        if (mail($to, $subject, $message)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Latitude or longitude data is missing.";
    }
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Only POST requests are allowed.";
    exit;
}
?>
