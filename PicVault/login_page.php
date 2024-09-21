<html>
<head>
    <title>LOGIN TO PHOTONEST</title>
</head>
<Style>
    body {
        background-color: #ffffff;
        font-family: Arial, sans-serif;
    }
    p{
        font-size: 15px;
        margin:auto;

    }
    .login p{
        color:red;
        font-size:14px;
        font-weight:bold;
    }
    .box {
        background-color: #d3e8f135;
        border: 1px solid #cccccc;
        border-radius: 4px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin: 50px auto;
        padding: 20px;
    }

    .box h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .box label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .box input[type="text"],
    .box input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #dab8f0;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 15px;
    }

    .box button[type="submit"] {
        width: 100%;
        padding: 8px;
        background-color: #007bff;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .box button[type="submit"]:hover {
        background-color: #0062cc;
    }

    .options {
        display: flex;
        justify-content: center;
        margin:7px 5px 0px 16px;
    }
    .options img {
        width:25px;
        height: 25px;
        margin:5px 10px 0px 10px;
    }

    .forgot-password
    {
        text-align: center;
        margin-top: 20px;
    }

    .forgot-password
    {
        text-decoration:none;
    }
    button 
    {
        background-color: #df1111;
        color: #ffffff;
        padding: 7px 20px;
        border: none;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
        text-align: center;
        justify-content: center
    }
    .header{
        align-items:margin-left;
        color:rgb(14, 133, 219);
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
        font-size: 1cm;
        display: inline-block;
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
</Style>
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
        <img src="logo.jpg" alt="Logo">
    </div>

    <div class="box">
        <h2>Login</h2>
        <form action="login_val.php" method="post">
            <div class="login" >
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <?php
                if(isset($login_err))
                {?>
                    <p><?php echo $login_err;?></p>
                <?php }?>
            </div>
            <button type="submit">LOGIN</button>
        </form>
        <div class="forgot-password">
            <a href="#">Forgot password?</a>
        </div>
        <div class="options">
            <p>Sign Up Using </p>
            <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwi-lLOUtOqEAxXFlFYBHfAzARsQFnoECBEQAQ&url=https%3A%2F%2Fsupport.apple.com%2Fen-in%2F111001&usg=AOvVaw0zoDlLN87UIwxjXvV_5S_G&opi=89978449"><img src="https://cdn.icon-icons.com/icons2/3261/PNG/512/apple_logo_icon_206799.png"
                    alt="Apple Logo"></a>
            <a href="https://accounts.google.com/signin"><img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/120px-Google_%22G%22_logo.svg.png?20230822192911" alt="Google Logo"></a>
            <a href="https://login.microsoftonline.com/common/oauth2/v2.0/authorize?scope=service%3A%3Aaccount.microsoft.com%3A%3AMBI_SSL%20openid%20profile%20offline_access&response_type=code&client_id=81feaced-5ddd-41e7-8bef-3e20a2689bb7&redirect_uri=https%3A%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin-oauth&client-request-id=f10566d7-13c3-4414-9cbd-d13b306a9778&x-client-SKU=MSAL.Desktop&x-client-Ver=4.58.1.0&x-client-OS=Windows%20Server%202019%20Datacenter&prompt=login&client_info=1&state=H4sIAAAAAAAEAA3P22KCIAAA0H_Z6x7ETEePzrCSvKVh-OYEtaBmiRf6-u38wfmwQ4J540nPT5K0QbUfTt-MXDMZtdtesfeCHjBLIsc-4MeJwHZoJrhOb21hPDflsZqo5aIclfbzEMh04x0L1ofTEnpWLzQEwdEFXMpRgsRcs3u3DDpVuX6Xca_RHl-q-8ZEjOEnq5zsVeh3X1vDqjFPDPaO7vK7N3ODN5YZL2DMLjQuzqga3xc_DvPGCFJ9c1sHbxxjYMdMKlVOoiodiyoK1ruTU-BnMhPaCpMvREs78thI1c-ejNAiaXSfOtX9P6ocim5Rea7a9vrL5rUf_NTpll8F5q-TcBDYv1J75VKx07vzZLk1VOWLQzsg5dwRUxSc0R7cxFWOJMwKAJP80-wegzEXIo62vNIVPqw-QxNz1VtGjQxwK7_8oKPhxx98M4aPggEAAA&msaoauth2=true&lc=1033&ru=https%3A%2F%2Faccount.microsoft.com%2Faccount%2FAccount"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/768px-Microsoft_logo.svg.png?20210729021049" alt="Microsoft Logo"></a>
        </div>
        <div>
            <br>
            <a href="sign-up.php"><center><button>SIGN UP</button></center></a>
        </div>
    </div>
</body>