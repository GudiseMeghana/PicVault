<?php 
session_start();
$event=$_SESSION['table_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PhotoNest</title>
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
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background:white;
    color: white;
    text-align: center;
    align-items: center;
  }
  
  .main-buttons {
    margin: 10px 10px 10px 10px;
    border-radius: 2000px;
    border: none;
  }
  .main-buttons button {
    background: none;
    border:none;
    cursor: pointer;
  }
  .main-buttons :hover,.icon-row:hover{
    transform: scale(1.05);
  }
  .icon-row {
    display: inline-flex;
    justify-content: center;
    margin-top: 7px;
  }
  .icon {
    padding: 10px;
    width: 108px;
    height: 100px;
    border-radius: 20px;
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
        <div class="item"><a href="faq.php"><img src="q-and-a.png"height="20px" width="20px" alt="FAQ"></i>&nbsp;&nbsp;FAQ</a></div>
        <div class="item"><a href="contact.php"><img src="telephone.png" height="17px" width="17px"alt="CONTACT">  contacts</a></div>
        <div class="item"><a href="about.php"><i class="fas fa-info-circle"></i>About</a></div>
        <div class="item"><a href="Settings.php"><i class="fa-solid fa-gear"></i>Settings</a></div>
        <div class="item"><a href="logout.php"><i class="fas fa-clock"></i>Logout</a></div>
      </div>
  </div>
  <div>
    <img src="logo1.jpg" width="300px" align="left" style="margin-left: 30px;"></img>
  </div>
    <br><br><br><br><br>
    <div class="main-buttons">
      <button><a href="album.php"><img src="photo1.png" width="350px"></a></button>
    </div>
    <div class="main-buttons">
    <button><a href="https://www.canva.com/video-editor/"><img src="photo2.png" width="350px"></a></button>
    </div>
  <div class="icon-row">
    <a href="QR_scan.php"><img src="qr.png" class="icon"></a>
    <a href="https://photonest01.000webhostapp.com/capture_img.php?table_name=<?php echo $event; ?>"><img src="cam.png" class="icon"></a>
    <a href="Settings.php"><img src="settings.png"  class="icon"></a>
  </div>
  <br>
  <div class="icon-row">
    <a href="to-do-list.php"><img src="todo.png" width="175px" height="40px"></a>&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
  <div class="icon-row">
    <a href="organisers.php"><img src="organisers.png" width="155px" height="40px"></a>
  </div>
</body>
</html> 

