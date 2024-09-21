<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>

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
    .logo {
        width: 75px;
        height: 75px;
        margin: auto;
        margin-bottom: 20px;
    }
    .logo img {
        width: 130%; 
        height: auto; 
        transform: translate(-12%, -10%);
    }
    body{
        background-color: rgb(255, 255, 255);
        display: flex;
        align-self: center;
    }
    .main{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .logo-text{
        width: 275px;
        height: 80px;
        margin: 5px 5px 0px 0px;
        justify-content: space-around;
    }
    button a{
        color:white;
    }
    .form-control,input[type="text"],input[type="date"]{
        border: none;
        border-style: groove;
        height: 35px;
        width: 300px;
        text-align: center;
        justify-self: center;
        padding: 10px;
        margin: 20px auto;
        display: block;
        border-radius: 30px;
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
            <div class="item"><a href="mainpage.php"><i class="fas fa-home"></i>home</a></div>
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
            <div class="item"><a href="logout.php"><"><i class="fas fa-clock"></i>Logout</a></div>
        </div>
    </div>
    <img class="logo-text" src="logo-text.jpg" alt="Logo" style="padding-left: 50px;margin-right: 70%;">
    <div class="main">
        <div class='logo'>
            <img src="IMAGE.jpg">
        </div>
        <div class="container">
            <h3 style="text-align: center;">
            Enter 
            <?php 
            if(isset($_SESSION["EVENT_NAME"]))
                echo $_SESSION["EVENT_NAME"];
            else
                echo "Event" ;
            ?> Timings</h3><br>
            <p>The Free Disposable Camera App For Your Event Guests</p>
            <form action="date_store.php" method="post">
                <div class="form-content">
                    <input type="text" name="event_name" value="<?php echo $_SESSION['EVENT_NAME']; ?>" placeholder='Enter event name'>
                        <input type="text" id="date" name="start_date" placeholder="Select Start Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                        <input type="text" id="date" name="end_date" placeholder="Select End Date" onfocus="(this.type='date')" onblur="(this.type='text')">
                    </div>
                    <center><button style="background-color: rgba(29, 10, 201, 0.996);">NEXT</button></center>
                </div>
            </form>        
        </div>
    </div>
</body>
</html>