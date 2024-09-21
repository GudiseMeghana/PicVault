<?php
session_start();

$conn = new mysqli("localhost", "root","", "photonest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$eventName = $_POST["event_name"];
$_SESSION['EVENT_NAME']= $eventName;
$startDate = $_POST["start_date"];
$endDate = $_POST["end_date"];
$email = $_SESSION['email'];
if(isset($_SESSION['email'])){
    $query1="insert into events(username,event_name,start_date, end_date) values('$email','$eventName','$startDate','$endDate') ";
    $query2= "select id_no from events where event_name='".$eventName."' AND username='".$email."' AND start_date='".$startDate."' AND end_date='".$endDate."'";

    if($conn->query($query1)==TRUE)
    {
        $result = $conn->query($query2);
        if ($result) {
            $row = $result->fetch_assoc();
            $_SESSION["table_name"] = "event".$row["id_no"];
            if($conn->query("create table event".$row['id_no']."(img longblob NOT NULL)")==TRUE){
                $conn->close();
                header("location: mainpage.php");
                exit();
            }
        }
    }
}
?>
