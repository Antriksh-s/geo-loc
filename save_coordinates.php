<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data sent from JavaScript
    $jsonData = file_get_contents('php://input');
    
    // Decode the JSON data into an associative array
    $data = json_decode($jsonData, true);
    
    // Extract latitude and longitude
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];
    
    // Define the file path where you want to save the coordinates
    $filePath = '/path/to/your/server/directory/coordinates.txt';

    // Write the coordinates to the text file
    file_put_contents($filePath, "Latitude: $latitude\nLongitude: $longitude");
    
    // You can send a response back to JavaScript if needed
    echo 'Coordinates saved successfully.';
} else {
    // Handle other HTTP methods or requests if necessary
    echo 'Invalid request.';
}
?>
