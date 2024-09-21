<!DOCTYPE html>
<?php
    session_start();
?>
<head>
    <title>Event Organisers</title>
</head>
<style>
    .xyz img{
        width: 100px;
        display: flex;
    }
    .logo {
      width: 100px;
      height: 100px;
    }
    .logo img{
      width: 250px;
      height: 70px;
      padding-left: 50px;
    }
</style>
<body style="font-family: Arial, sans-serif;">
    <link rel="stylesheet" href="sks2.css">
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
    <img src="logo-text.jpg" align="left" alt="Logo"></div>
    <br>
    <center>
    <div class="xyz">
        <img src="image.jpg" alt="image" > 
    </div>
    <div>
        <h2>ORGANISERS</h2>
        <p>Any organisers you add will have full admin access to all event photos and disposable camera settings.</p>

        <form action="add-organiser.php" method="post">
        <label for="main-org" style="font-weight:bold">Main Organiser:</label><br>
            <input type="text" name="main-org" required style="
                padding: 10px;
                width: 400px;
                margin-bottom: 15px;
                border-radius: 50px;
                font-weight:bold;
                color:#366de3;
                "
                value="<?php 
                if(isset($_SESSION["email"])) {
                    echo $_SESSION['fname']." ".$_SESSION['lname']." - ".$_SESSION["email"];
                }
                ?>"><br>
            <input type="email" name="email" placeholder="Enter email address" required style="
                padding: 10px;
                width: 400px;
                height:37px;
                margin-bottom: 20px;
                border-radius: 50px;
                "><br>
            <button type="submit" style="
                background-color: #5335d8;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 30px;">Add Organiser
            </button>
        </form>
    </div>
</center>
</body>
</html>