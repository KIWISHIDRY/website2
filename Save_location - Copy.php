<?php

if (isset($_GET['lat']) && isset($_GET['long'])) {
    $latitude = $_GET['lat'];
    $longitude = $_GET['long'];

    // Save location to a file
    $data = "Latitude: $latitude, Longitude: $longitude\n";
    $file = 'locations.txt';

    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Location saved successfully!";
} else {
    echo "Error: Latitude and Longitude parameters not provided.";
}

?>
