<?php
session_start();
$connection =mysqli_connect("localhost","root", "", "photonest");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
if(isset($_FILES['webcam'])){
    $imageData = file_get_contents($_FILES['webcam']['tmp_name']);
    $encodedImageData = base64_encode($imageData);
    $escapedImageData = $connection->real_escape_string($encodedImageData);
    $query = "INSERT INTO ".$_SESSION['table_name']."(img) VALUES ('$escapedImageData')";
    $result = $connection->query($query);
}

$connection->close();
?>
