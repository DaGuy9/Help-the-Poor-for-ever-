<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Email details
    $to = "testimony1201@gmail.com";
    $subject = "User Location";
    $message = "Latitude: $latitude\nLongitude: $longitude";
    $headers = "From: testimony1201@gmail.com "; // Change this to your email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Location sent successfully!</h2>";
    } else {
        echo "<h2>Failed to send location. Please try again.</h2>";
    }
}
?>
