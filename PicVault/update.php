<?php
session_start();

$db = new mysqli('localhost', 'root', '', 'photonest');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if (isset($_POST['save'])) {
    $first_name = $_POST['First_name'];
    $last_name = $_POST['Last_name'];
    $email = $_POST['email'];
    $date_of_birth = $_POST['date_of_birth'];

    $stmt = $db->prepare("UPDATE users SET First_name=?, Last_name=?, email=?, date_of_birth=? WHERE email=?");
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $date_of_birth, $_SESSION['email']);
    $stmt->execute();

    header("Location: my_account.php");
    exit();
} elseif (isset($_POST['delete'])) {
    $stmt = $db->prepare("DELETE FROM users WHERE email=?");
    $stmt->bind_param("s", $_SESSION['email']);
    $stmt->execute();

    session_destroy();
    header("Location: home_page.php");
    exit();
}
?>
