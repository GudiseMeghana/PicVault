<?php
ob_start(); 

session_start();
$event = $_SESSION['table_name'];
$conn = new mysqli("localhost", "root", "", "photonest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT img FROM " . $event;
$result = $conn->query($sql);

$zip = new ZipArchive();
$zip_name = tempnam(sys_get_temp_dir(), 'zip'); 
$zip->open($zip_name, ZipArchive::CREATE);

if ($result->num_rows > 0) {
    $i = 0;
    while ($row = $result->fetch_assoc()) {
        $zip->addFromString('image' . $i . '.jpg', $row["img"]);
        $i++;
    }
}

$zip->close();

header('Content-Type: application/zip');
header('Content-disposition: attachment; filename=images.zip');
header('Content-Length: ' . filesize($zip_name));
readfile($zip_name);

unlink($zip_name);

ob_end_flush(); 
?>
