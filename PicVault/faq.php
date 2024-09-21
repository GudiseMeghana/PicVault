<!DOCTYPE html>
<html>
<head>
<title>FAQ Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: white;
    }
    .faq-container {
        max-width: 540px;
        margin: 0 auto;
    }
    .faq-heading {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .faq-separator {
        width: 50px;
        height: 2px;
        background-color: #333;
        margin: 0 auto 20px;
    }
    .faq-column {
        width: 45%;
        float: left;
        padding: 10px;
    }
    .qna{
        border-radius: 7px;
        border: 2px solid #000000;
        font-weight: normal;
        margin-bottom: 10px;
        width: 500px;
        cursor: pointer;
        padding: 20px;
        background-color: #d3e8f135;
    }
    .faq-question {
        text-align: center;
        font-weight: normal;
        margin-bottom: 10px;
        cursor: pointer;
    }
    .answer {
        display: none;
        padding: 10px;
    }
    .faq-container img {
    max-width: 100%;
    height: auto;
    margin: 0;
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
<script>
    function showAnswer(id) {
        var answer = document.getElementById(id);
        if (answer.style.display === "block") {
            answer.style.display = "none";
        } else {
            answer.style.display = "block";
        }
    }
</script>
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
        <img src="logo.jpg" alt="Logo"></div>
        

    <div class="faq-container">
        <h1 class="faq-heading">FREQUENTLY ASKED QUESTIONS</h1>
        <div class="faq-separator"></div>
        <div class="faq-column">
            <div class="qna">
                <div class="faq-question" onclick="showAnswer('answer1')">Does it work on Android & iOS?</div>
                <div id="answer1" class="answer">
                    Yes, Disposable works on both Android and iOS, and even Windows phones. There's no need to download anything; just go to www.disposable.app to create your event's disposable camera, or if you're an event guest simply scan an event's QR code to load the disposable camera.
                </div>
            </div>
            <div class="qna">
                <div class="faq-question" onclick="showAnswer('answer2')">How do I create a disposable camera for my event?</div>
                <div id="answer2" class="answer">
                    Three simple steps:
                    <br><br>
                    1. Create Event: Create an event at PhotoNest with your event title and dates.
                    <br><br>
                    2. Print QR Code: On your event's dashboard, download the QR code image; this is ready to print on A5, A4 or A3 posters, flyers and even tent cards for tables. Once printed, simply place them around your event venue for guests to see.
                    <br><br>
                    3. Share Album: All of your guests' photos will be captured in your event photo album. You can view the album during or after your event, and you can share it at any time.
                </div>
            </div>
            <div class="qna">
                <div class="faq-question" onclick="showAnswer('answer3')">Do I change the photo limit per guest?</div>
                <div id="answer3" class="answer">
                    On your event's dashboard, simply head to the settings page to edit the photo limit each guest can take.
                </div>
            </div>
            <div class="qna">
                <div class="faq-question" onclick="showAnswer('answer4')">How much does it cost to use?</div>
                <div id="answer4" class="answer">
                    Disposable is free to use. You can take photos with your friends and create memories together without any charge. You can upgrade for more advanced features if you wish to edit how your event camera works.
                </div>
            </div>
            <div class="qna">
                <div class="faq-question" onclick="showAnswer('answer5')">Is there a total photo limit?</div>
                <div id="answer5" class="answer">
                    Album photo limits depend on the tier you use. View the Upgrades page for more information.
                </div>
            </div>
            <div class="qna">
                <div class="faq-question" onclick="showAnswer('answer6')">Can I download all photos after the event?</div>
                <div id="answer6" class="answer">
                    Yes! It's easy to download all event album photos:
                    <br><br>
                    1. Login & navigate to your event album
                    <br><br>
                    2. Open the menu in the top right of the album
                    <br><br>
                    3. Select 'Download Photos'
                </div>
            </div>
            <div class="qna">
                <div class="faq-question" onclick="showAnswer('answer7')">How do I share the album?</div>
                <div id="answer7" class="answer">
                    Simply login, navigate to your event album, and hit the share icon at the top of the album page! For privacy & security, event albums are private by default. An event album can only be publicly shared once you unlock & share it via the album share function.
                </div>
            </div>
        </div>
    </div>
</body>
</html>
