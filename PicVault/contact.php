<!DOCTYPE html>
<head>
<title>Contact Us Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background:white;
  }
  .contact-form {
    background: rgba(242, 244, 243, 0.834);
    padding:20px;
    border-radius: 10px;
    width: 350px;
    margin-left:40%;
  }
  body .contact-form{
    justify-content:end;
  }
  .input-group {
    margin-bottom: 15px;
  }
  .input-group label {
    display: block;
    margin-bottom: 5px;
  }
  .input-group input {
    width: 90%;
    padding: 10px;
    border: none;
    border-radius: 5px;
  }
  .input-group textarea {
    width: 90%;
    padding: 10px;
    border: none;
    border-radius: 5px;
  }
  .send-button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
  }
  .send-button:hover {
    background-color: #45a049;
  }
  .logo {
    width: 100px;
    height: 100px;
  }
  .logo img{
    width: 350px;
    height: 100px;
    padding-left: 35px;
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
            <div class="item"><a href="#"><i class="fas fa-home"></i>home</a></div>
            <div class="item">
                <a class="sub-btn"><i class='bx bx-calendar-event'></i>events<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                  <a href="home_page.php" class="sub-item"><img src="dancing.png" height="25px" width="25px"alt="new event">New Event</a>
                  <a href="event_names.php"><i class='bx bx-calendar-event'></i>All Events</a>
                </div>
            </div>
            <div class="item"><a href="#"><img src="q-and-a.png"height="30px" width="30px" alt=""></i>faq</a></div>
            <div class="item"><a href="#"><img src="telephone.png" height="20px" width="20px"alt="">  contacts</a></div>
            <div class="item"><a href="#"><i class="fas fa-clock"></i>date</a></div>
            
            <div class="item"><a href="#"><i class="fas fa-info-circle"></i>About</a></div>
        </div>
    </div>
  <div class="logo">
    <img src="logo.jpg" align="left" alt="Logo"></div><br>
  <div class="contact-form">
    <h2>Contact Us</h2>
    <p>You will hear from us at the earliest!</p>
    <div class="input-group">
      <label for="full-name">Full Name</label>
      <input type="text" id="full-name" placeholder="Enter your full name">
    </div>
    <div class="input-group">
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Enter your email">
    </div>
    <div class="input-group">
      <label for="phone">Phone</label>
      <input type="tel" id="phone" placeholder="Enter your phone number">
    </div>
    <div class="input-group">
      <label for="comment">Any comment or your query</label>
      <textarea id="comment" rows="4" placeholder="Enter your comment or query"></textarea>
    </div>
    <button class="send-button">Send</button>
    <p>You can also contact us at 630-8631-124</p>
  </div>
</body>
</html>