<?php

// Get the id parameter from the URL
$id = $_GET['id'];

$conn = new mysqli("localhost","root", "", "photonest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT img FROM event1 LIMIT 1 OFFSET " . $id;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imgData = base64_decode($row["img"]);

    // Send the headers
    header('Content-Type: image/jpeg');
    header('Content-Disposition: attachment; filename="image.jpg"');

    // Send the image data
    echo $imgData;
} else {
    echo "No image found";
}
$conn->close();
?>
