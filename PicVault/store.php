<?php
session_start();
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pass=$_POST['psw'];
    $email=$_POST['email'];
    $dob=$_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    $gender=$_POST['gender'];
    $_SESSION['email']=$email;
    $flag=0;
    $psw_err="";
    if(strlen($pass)<8){
        ++$flag;
        $psw_err="Password should be atleast 8 characters";
    }
    if($flag != 0) {
        include('sign-up.php');
        exit;
    }

    $con= new mysqli('localhost','root','','photonest');
    if($con->connect_error)
    {
        die('CONNECTION FAILED'.$connect_error);
    }
    else
    {
        $sql = "SELECT email FROM users"; 
        $result = $con->query($sql);
        if(($result->num_rows)> 0){ 
            while($row = $result->fetch_assoc()) { 

                if($row["email"]==$email){     
                    $psw_err= 'User already exits';
                    include('sign-up.php');
                    exit;
                } 
            } 
        } 

        /*$otp = rand(1000, 9999);
        $_SESSION['OTP'] = $otp;

        $to = $email;
        $subject = "OTP for email verification";
        $message = "Your OTP for email verification for your account in Photonest is: " . $otp;
        $headers = "From:"."rithvikapunnam@gmail.com";

        if (mail($to, $subject, $message,$headers)){
            header("Location: otp.php");
        }
        else 
            echo("mail send faild"); 
            exit;
        */
        $query="insert into users(First_name, Last_name, email, password, date_of_birth, Gender) values('$fname','$lname','$email','$pass','$dob','$gender') ";
        if($con->query($query)==TRUE)
        {?>
        <?php 
        $con->close();
        header("Location: login_page.php");
        }
    }
?>