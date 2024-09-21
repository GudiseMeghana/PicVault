<!DOCTYPE html>
<html>
<head>
    <title>Sign-in</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            line-height: 0.75cm;
        }
        .box {
            width: 350px;
            padding: 16px;
            background-color: #d3e8f135;
            margin: auto;
            border-radius:10px;
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
        }
        .box h2 {
            text-align: center;
        }
        .box input[type="text"],
        .box input[type="password"],
        .box input[type="email"],
        .box select
        {
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }
        .box select{
            width:32%;
        }
        .box button {
            background-color: #5598f5;
            color: rgb(0, 0, 0);
            padding: 14px 20px;
            margin: 8px 0;
            font-size:medium;
            border:#5598f5;
            cursor: pointer;
            width: 100%;
        }
        .box button:hover {
            opacity: 0.8;
        }
        h1{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-style:normal;
        }
        .logo {
            width: 100px;
            height: 100px;
            padding-left: 50px;
            margin-right: 70%;
        }
        .logo img{
            width: 310px;
            height: 100px;
        }
        p{
            color:red;
            font-size:14px;
            font-weight:bold;
        }
    </style>
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
        <img src="logo.jpg" alt="Logo">
    </div>
    <div class="box">
        <form action="store.php" method="post">
            <center><h1>Create Account</h1></center>
            <label for="fname"><b>Name:</b></label><br>
            <input style="width: 49%;"type="text" placeholder="First Name" name="fname" required>
            <input style="width: 49%;" type="text" placeholder="Last Name" name="lname" required><br>
            <label for="email"><b>Email:</b></label><br>
            <input style="width: 100%;" type="email" placeholder="example@example.com" name="email" required><br>
            <label for="psw"><b>Password:</b></label><br>
            <input style="width: 100%;" type="password" placeholder="Enter Password" name="psw" required><br>
            <label for="birthday"><b>Birthday:</b></label><br>
            <select name="day" id="day" required>
                <option value="" disabled selected>Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select name="month" id="month" required>
                <option value="" disabled selected>Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select name="year" id="year" required>
                <option value="" disabled selected>Year</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
            </select><br>
            <label><b>Gender:</b></label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="others" name="gender" value="others" checked>
            <label for="others">others</label><br>
            <?php
                if(isset($psw_err))
                {?>
                    <p><?php echo $psw_err;?></p>
                <?php }?>
            <button type="submit"><b>Sign up</b></button>
        </form>
    </div>
</body>
</html>