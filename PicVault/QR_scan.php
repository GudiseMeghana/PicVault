<?php
session_start();
$table_name = $_SESSION['table_name'];

include 'C:\xampp\htdocs\phpqrcode\qrlib.php';

$link = 'https://photonest01.000webhostapp.com/capture_img.php?table_name=';

$url = $link . $table_name;

QRcode::png($url, 'QR.png');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	body{
		margin-top: 20px;
	}
	button{
		background-color: rgb(100, 165, 193);
		color: rgb(255, 255, 255);
		height: 50px;
		width: 150px;
		border-radius: 20px;
		vertical-align: middle;
		font-size: 20px;
	}
	a{
		text-decoration:none;
		color: rgb(2, 17, 31);
	}
	p{
		color: white;
		font-size: 30px;
		top: 10px;
		text-align: center;
	}
	.logo {
		width: 100px;
		height: 100px;
		margin-right: 70%;
    }
	.logo img{
		width: 350px;
		height: 100px;
		padding-left: 35px;
	}
	.qr-code{
		border: solid 3px;

	}
</style>
<body>
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
            <div class="item"><a href="mainpage.php"><i class="fas fa-home"></i>home</a></div>
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
</div>
	<CENTER>
		<div>
			<img class='qr-code' src="QR.png" width="300" height="300" alt="QR_Scanner"><br><br><br>
		</div>
		<?php
		if (isset($_SESSION['table_name'])) {
			echo "<a href='{$url}'><b><u>OPEN CAMERA</u></b></a><br><br><br>";
		}
		else{
			echo "Create an Event";
		}
		?>
		<button >
			<a href="QR.png"><img src="share .png" width="20px" height="20px">   SHARE</a>
		</button>
	</CENTER>
</body>
</html>
