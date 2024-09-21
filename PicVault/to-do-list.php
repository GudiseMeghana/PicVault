<!DOCTYPE>
<html>
<head>
<title>TO-DO List
  
</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background:white;
    align-items: center;
    justify-content: center;
    justify-self: center;
  }
  .todo-list {
    background: whitesmoke;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 20px;
    width: 470px;
    margin: auto;
    justify-self: center;
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
  }
  .todo-item {
    margin-bottom: 20px;
    
  }
  .todo-item:last-child {
    margin-bottom: 0;
  }
  .title1{
    text-align: center;
    color: rgba(28, 28, 32, 0.83);
    font-style:normal;
    font-size: x-large;
  }
  .title {
    font-size: 18px;
    color: #333;
  }
  .before-event {
    margin-top: 8;
    line-height: 2;
    color: #555;
    font-style: normal;
    font-size:x-small;
    font-weight:700;
  }
  .description {
    margin: 10px 0;
    color: #666;
    font-size: small;
    
  }
  .section {
    padding: 20 ;
    border-bottom: 1px solid #ccc;
  }
  .section:last-child {
    border-bottom: none;
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
  input.check{
    width:0.5cm;
    height:0.5cm;
  }
</style>
</head>
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
<h2 class="title1" >TO-DO LIST</h2><br>
  <div class="todo-list">
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;1. Add All Organisers</p>
      <p class="before-event">BEFORE EVENT</p>
      <p class="description">To ensure you make best use of your event camera app and capture as many memories as possible, add all other event organisers to this event.</p>
      <a href="Add-organisers">Add Organisers -></a>
    </div></div>
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;2. Adjust App Settings</p>
      <p class="before-event">BEFORE EVENT</p>
      <p class="description"> You can control how your guest camera app can be used and how it looks, so be sure to adjust any settings that you wish for the best experience.</p>
      <a href="settings">Open Settings -></a>
    </div></div>
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;3. Print QR Codes</p>
      <p class="before-event">BEFORE EVENT</p>
      <p class="description">We have prepared a variety of QR code designs for your event camera, all ready for print. You can alternatively design your own with the solo QR code image.</p>
      <a href="Qrcode">View QR Codes -></a>
    </div></div>
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;4. Place QR Codes Around Venue</p>
      <p class="before-event">MORNING OF EVENT</p>
      <p class="description"> Remember, guests simply need to scan your QR code to load your event disposable camera, so place them in visible locations around your venue.</p>
      <a href="Qrcode">View QR Codes -></a>
    </div></div>
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;5. Ask Host To Announce App</p>
      <p class="before-event">START OF EVENT</p>
      <p class="description">To ensure you capture the most memories, ask your event host to direct guests to scan the camera QR codes and join you in creating a beautiful event album.</p>
      
    </div></div>
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;6. Review Photo Album</p>
      <p class="before-event">AFTER EVENT</p>
      <p class="description">Once your event is complete, review all photos in the event album and remove any you don't wish to keep.</p>
      <a href="album">View Album -></a>
    </div></div>
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;7. Share Album With Guests</p>
      <p class="before-event">AFTER EVENT</p>
      <p class="description">Your album is private by default, so if and when you wish to share it with guests, simply hit the share icon at the top of your album.</p>
      <a href="album">View Album -></a>
    </div></div>
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;8. Generate & Share Video</p>
      <p class="before-event">AFTER EVENT</p>
      <p class="description">It's the best way to share memories with family and friends on social media. Simply generate a video in 3 steps, download it, and then share it on Instagram, Facebook, TikTok and more.</p>
      <a href="video">Create videos -></a>
    </div></div>
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;9. Review Disposable</p>
      <p class="before-event">AFTER EVENT</p>
      <p class="description">If you can spare a minute, our small team would sincerely appreciate a review of your experience with the Disposable Camera App.</p>
      <a href="review">Write a review-></a>
    </div></div>
    <div class="section">
    <div class="todo-item">
      <p class="title"><input class="check" type="checkbox">&nbsp;&nbsp;&nbsp;10. Share Disposable</p>
      <p class="before-event">AFTER EVENT</p>
      <p class="description">If you loved Disposable, help others capture beautiful memories by sharing www.disposable.app with anyone organising events soon.</p>
      <a href="link">Link-></a>
    </div>

  </div>

</body>
</html>
