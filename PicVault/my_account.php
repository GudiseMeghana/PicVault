<?php
session_start();

$db = new mysqli('localhost', 'root', '', 'photonest');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$userid = $_SESSION['email'];

$result = $db->query("SELECT * FROM users WHERE email='".$userid."'");
$row = $result->fetch_assoc()

?>

<!DOCTYPE html>
<html>
<head>
  <title>My account</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background:white;
  }
  .account-form {
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
    border: none;
    border-radius: 5px;
  }
  .x{
    width:0.5cm;
  }
  .agree-button {
    background-color: green;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 45%;
    margin-right: 10px;
  }
  .agree-button:hover {
    background-color: #0ba6f9;
  }
  .logo {
    width: 100px;
    height: 100px;
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
            <div class="item"><a href="logout.php"><"><i class="fas fa-clock"></i>Logout</a></div>
        </div>
    </div>
  <div class="logo">
    <img src="logo.jpg" align="left" alt="Logo"></div>
  <div class="account-form">
    <h1>My Account</h1><br>
    <form action="update.php" method="post">
    <div class="input-group">
      <label for="First_name">First Name:</label>
      <input type="text" id="First_name" name="First_name" value="<?php echo $row['First_name']; ?>">
    </div>
    <div class="input-group">
      <label for="Last_name">Last Name:</label>
      <input type="text" id="Last_name" name="Last_name" value="<?php echo $row['Last_name']; ?>">
    </div><div class="input-group">
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>">
    </div>
    <div class="input-group">
      <label for="date_of_birth">Date of Birth:</label>
      <input type="text" id="date_of_birth" name="date_of_birth" value="<?php echo $row['date_of_birth']; ?>">
    </div>
    <div>
      <input class="x" type="checkbox">Event Remainder Emails</input>
    </div><br><br>    
    <div>
      <button class="agree-button" type="submit" name="save">Save</button>
      <button class="agree-button" type="submit" name="delete">Delete Account</button></div>
    </form>
</body>
</html>