<?php
session_start();
$conn = new mysqli("localhost", "root", "", "photonest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email=$_SESSION['email'];
$sql = "SELECT * FROM events where username='$email'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <title>Event Names</title>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="sks1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });   
            $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
                $('.menu-btn').css('visibility',"hidden");
            });
            $('.header-container').click(function(){
                $(this).next('.menu-btn').slideToggle();
                $(this).find('.xii').toggleClass('rotate');
            });
           
            $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');
                $('.menu-btn').css('visibility',"visible");
            });
        });
    </script>
    <style>
        ul {
            list-style-type: none;
            display: ruby-text;
        }
        li {
            margin-bottom: 10px;
            background-color: #f0f0f0;
            padding: 10px;
            width: 500px;
            height:70px;
            border-radius: 5px;
            display: flex;
            justify-self: center;
        }
        .logo-text{
            width: 275px;
            height: 80px;
            margin: 5px 5px 0px 0px;
            padding-left: 50px;
            justify-content: space-around;
        }
        .event-logo{
            width: 40px;
            height: 40px;
        }
        h4{
            color: #036dc06e;
            margin: auto;
        }
        p{
            font-weight: bold;
            margin: auto;
        }
    </style>
</head>
<body>
<div class="menu-btn">
        <i class="fas fa-bars mn"></i>
    </div>
    <div class="side-bar">
        <div class="close-btn">
            <i class="fas fa-times xy"></i>
        </div>
        <div class="menu">
            <div class="item"><a href="my_account.php"><i class="fa-solid fa-user"></i>My Account</a></div>
            <div class="item"><a href="home_page.php"><i class="fas fa-home"></i>home</a></div>
            <div class="item">
                <a class="sub-btn"><i class='bx bx-calendar-event'></i>events<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="home_page.php" class="sub-item"><img src="dancing.png" height="25px" width="25px"alt="new event">New Event</a>
                    <a href="event_names.php"><i class='bx bx-calendar-event'></i>All Events</a>
                </div>
            </div>
            <div class="item"><a href="faq.php"><img src="q-and-a.png"height="20px" width="20px" alt="FAQ"></i>  FAQ</a></div>
            <div class="item"><a href="contact.php"><img src="telephone.png" height="17px" width="17px"alt="CONTACT">  contacts</a></div>
            <div class="item"><a href="about.php"><i class="fas fa-info-circle"></i>About</a></div>
            <div class="item"><a href="Settings.php"><i class="fa-solid fa-gear"></i>Settings</a></div>
            <div class="item"><a href="logout.php"><i class="fas fa-clock"></i>Logout</a></div>
        </div>
    </div>
    <img class="logo-text" src="logo-text.jpg" alt="Logo">
    <h1 style="text-align:center;">Event Names</h1><br>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li><a href='event_album.php?id_no=".$row['id_no']."'><img class='event-logo' src='logo-grey-bg.png'>&nbsp;&nbsp;<p>". $row["event_name"]."</p>"."<br><br>"."<h4>Dates:".$row["start_date"]." to ".$row["end_date"]. "</h4></a></li><br>";
            }
        } else {
            echo "No events found.";
        }
        $conn->close();
        ?>
    </ul>
</body>
</html>
