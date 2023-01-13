<?php
session_start();
$email = $_POST['email'];

$_SESSION['email']= $_POST['email'];



$conn=new mysqli("localhost", "root", "", "webs");
if($conn->connect_error){
    die('Connection Failed');
}
else{
if (empty($email)) {
    echo ("<script type='text/javascript'>
    alert('Empty');
    location='forgot.html';
    </script>");
}
else{


    $sql = "SELECT * FROM users WHERE email='$email' ";
    $resultO = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM managers WHERE email='$email' ";
    $resultM = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultO) == 1) {
        //$r = mysqli_fetch_assoc($result);
        //$password = $r['password'];
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $code= substr(str_shuffle($permitted_chars), 0, 10);
        $sql = "UPDATE users SET code='$code' WHERE email='$email' ";
        $result2 = mysqli_query($conn, $sql);//
        $_SESSION['mORo']='owner';
        require_once('PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure= 'ssl';
        $mail->Host="smtp.gmail.com";
        $mail->Port='465';
        $mail->isHTML();
        $mail->Username="webetscompany@gmail.com";
        $mail->Password ='webets123';
        $mail->SetFrom('no-reply@webets.org');
        $mail->Subject ='Password Reset';
        $mail->Body ="Someone has requested to reset your password. If it wasn't you, ignore this email. Otherwise, please use this code to reset: " . $code;
        $mail->AddAddress("$email");
        $mail->Send();

            echo ("<script type='text/javascript'>
            alert('PW sent, check mail');
            location='forgot.html';
            </script>"); 
   
            mysqli_close($conn);

           
           header('location:codefgp.html');
        
        }else if (mysqli_num_rows($resultM) == 1){
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            $code= substr(str_shuffle($permitted_chars), 0, 10);
            $sql = "UPDATE manager SET code='$code' WHERE email='$email' ";
            $result2 = mysqli_query($conn, $sql);//
            $_SESSION['mORo']='manager';
            require_once('PHPMailer/PHPMailerAutoload.php');
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure= 'ssl';
            $mail->Host="smtp.gmail.com";
            $mail->Port='465';
            $mail->isHTML();
            $mail->Username="webetscompany@gmail.com";
            $mail->Password ='webets123';
            $mail->SetFrom('no-reply@webets.org');
            $mail->Subject ='Password Reset';
            $mail->Body ="Someone has requested to reset your password. If it wasn't you, ignore this email. Otherwise, please use this code to reset: " . $code;
            $mail->AddAddress("$email");
            $mail->Send();
    
           
    
                echo ("<script type='text/javascript'>
                alert('PW sent, check mail');
                location='forgot.html';
                </script>"); 
       
                mysqli_close($conn);
                header('location:codefgp.html');
        }
        else{echo ("<script type='text/javascript'>
            alert('Email not registered');
            location='forgot.html';
            </script>"); }
}}



?>