<html>
<?php session_start(); ?>
<head><title>Album</title>
<style>
    
    body {
        background-color: #ffffff;
        font-family: Arial, sans-serif;
        display: ruby-text;
    }
    .logo {
        width: 100px;
        height: 100px;
        padding-left: 50px;
        margin-right: 100%;
    }
    .logo img{
        width: 310px;
        height: 100px;
    }
    .top-right {
        position: absolute;
        top: 20px;
        right: 20px;
    }
    .image-container {
        position: relative;
        padding: 10px;
    }
    .image-container img {
        width: 300px;
        height: 300px;
    }
    .image-container a {
        position: absolute;
        top: 0;
        right: 0;
    }
    .image-container a img {
        width: 20px;
        height: 20px;
        border-radius: 50%;
    }
</style>
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
            <div class="item"><a href="faq.php"><img src="q-and-a.png"height="20px" width="20px" alt="FAQ"></i>&nbsp;&nbsp;FAQ</a></div>
            <div class="item"><a href="contact.php"><img src="telephone.png" height="17px" width="17px"alt="CONTACT">  contacts</a></div>
            <div class="item"><a href="about.php"><i class="fas fa-info-circle"></i>About</a></div>
            <div class="item"><a href="Settings.php"><i class="fa-solid fa-gear"></i>Settings</a></div>
            <div class="item"><a href="logout.php"><i class="fas fa-clock"></i>Logout</a></div>
        </div>
    </div>
    <div class="logo">
        <img src="logo.jpg" alt="Logo">
        <div class="top-right">
            <a href="download_all.php"><button>Download All</button></a>
        </div>
    </div>
<?php

$conn = new mysqli("localhost","root", "", "photonest");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT img FROM ".$_SESSION['table_name'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i = 0;
    while($row = $result->fetch_assoc()) {
        echo '<div class="image-container">';
        echo '<img src="data:image/jpeg;base64,' . $row["img"] . '" alt="Image">';
        echo '<a href="download.php?id=' . $i . '"><img src="download.jpeg" alt="Download"></a>';
        echo '</div>';
        $i++;
    }
} else {
    echo "<p>No images found</p>";
}
$conn->close();
?>
</body>
</html>
