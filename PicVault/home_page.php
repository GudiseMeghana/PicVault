<!DOCTYPE html>
<html>
<head>
    <title>Photonest</title>
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
        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin-top: 10px;
            color: black;
            text-align: center;
        }
        .header-container {
            justify-content: left;
            align-items: left;
            display: flex;
        }
        .header-container img{
            width: 275px;
            height: 80px;
            margin: 5px 5px 0px 0px;
            justify-content: space-around;
        }
        .header-container a{
            justify-self:flex-end;
            margin-top: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
        }
        .logo {
            width: 75px;
            height: 75px;
            margin: auto;
        }
        .logo img {
            width: 130%; 
            height: auto; 
            transform: translate(-12%, -10%);
            mix-blend-mode: multiply;
        }
        .steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        
        }
        .step {
            border-collapse: collapse;
            width: calc(33% - 20px);
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 5px;
            border: None;
        }
        .step h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .step p {
            line-height: 1.5;
        }
        .step:hover{
            transform: scale(1.1);
        }
        .step img{
            border-radius: 38px;
        }
        .main-content a{
            color: aliceblue;
        }
        .btns{
            position: fixed;
            top: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
    <div class="menu-btn">
        <i class="fas fa-bars mn"></i>
    </div>
    <div class="side-bar" position: fixed
    left: 1110px
    top: 30px >
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
    <div class="main-content">
        <header>
            <div class="header-container">
                <img src="logo-text.jpg" alt="Logo" style="padding-left: 50px;margin-right: 70%;">
                <div class='btns'>
                    <a href="login_page.php"><button>Login</button></a>
                    <a href="sign-up.php"><button style="margin-right: 5px; margin-left: 5px;">Sign in</button></a>
                </div>
            </div>
            <br><br><br><br>
            <br><br><br><br>
            <br><br>
            <div class="logo">
                <img src="image.jpg" alt="Logo">
            </div>
            <p>The Free Disposable Camera App For Your Event Guests</p>
            <form action="user_logged.php" method="post">
                <input type="text" placeholder="Enter your event name" name="eventname" required>
                <center><button style="background-color: rgba(29, 10, 201, 0.996);">CREATE</button></center>
            </form>
        </header>
    </div>
    <div class="container">
        <br><br><br><br>  <br><br><br><br>  
        <h1 style="color: black;">How It Works</h1>
        <div class="steps">
            <div class="step">
                <h2 style="color: black;">1. Scan</h2>
                <img src="Pasted Graphic 3.png"height="400px" width="200px" alt="scan">
            </div>
            <div class="step">
                <h2 style="color: black;">2. Snap</h2>
                <img src="Pasted Graphic.png"height="400px" width="200px" alt="snap">
            </div>
            <div class="step">
                <h2 style="color: black;">3. Dispose</h2>
                <img src="PhotoNest.png"height="400px" width="200px" alt="dispose">
            </div>
        </div>
    </div>
</body>
</html>