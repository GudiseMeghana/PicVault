<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background:white;
  }
  .settings-form {
    background: rgba(242, 244, 243, 0.834);
    padding:20px;
    border-radius: 10px;
    width: 400px;
    margin-left:40%;
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
  }
  .input-group {
    margin-bottom: 15px;
  }
  .input-group label {
    display: block;
    margin-bottom: 5px;
  }
  .input-group input {
    width: 95%;
    padding: 10px;
    border-radius: 5px;
    border: solid 1px #ccc;
  }
  .x{
    width:0.5cm;
  }
  .agree-button {
    background-color: #2e31e9;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 95%;
  }
  .agree-button:hover {
    background-color: #0ba6f9;
  }
  .logo {
    width: 100px;
    height: 100px;
  }
  .form-control {
    width: 95%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  .logo img{
    width: 375px;
    height: 100px;
    padding-left: 40px;
  }
</style>
</head>
<body>
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
    <img src="logo.jpg" align="left" alt="Logo"></div>
  <div class="settings-form">
    <h1>Settings</h1>
    <p>You will hear from us at the earliest!</p>
    <div class="input-group">
      <label for="full-name">Edit Event Name</label>
      <input type="text" id="full-name" placeholder="Enter your event name">
    </div>
    
    <div class="input-group">
      <label for="language" >Language</label>
      <select class="form-control" id="language">
        <option value="en">English</option>
        <option value="hi">Hindi</option>
        <option value="te">Telugu</option>
      </select>
    </div>
    <div class="input-group">
      <label for="email">Event starts on</label>
      <input type="date" class="form-control" id="eventdate" placeholder="Select date" min="2022-10-01">
    </div>
    <div class="input-group">
      <label for="phone">Event ends on</label>
      <input type="date" class="form-control" id="eventdate" placeholder="Select date" min="2022-10-01">
    </div><br>
    <div>
      <input class="x" type="checkbox">Enable Notifications</input>
    </div>
        <div class="input-group">
          <p><a href="sett.html">&nbsp;Security notifications</a></p>
        </div>
        <center><button class="agree-button" >I Agree</button></center>
  </div>
</body>
</html>