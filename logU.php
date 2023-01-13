<?php
session_start();

$_SESSION['email']= $_POST['email'];
$email = $_POST['email'];

$id=$_SESSION['id'];

$pw = $_POST['pw'];

$conn=new mysqli("localhost", "root", "", "webs");
if($conn->connect_error){
    die('Connection Failed');
}
else{
if ((empty($email)) || (empty($pw))) {
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('Please fill in all the fields required!');
    window. location. href='loginpage.html';
    </script>");
}
else{
    $sql = "SELECT * FROM users WHERE email='$email'AND pw='$pw' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
       
        echo ("<script LANGUAGE='JavaScript'>
        window. alert('login successfully ');
        window. location. href='home-owner.html';
        </script>");
            mysqli_close($conn);
           // header('location:home-owner.html');
        }
        else{echo ("<script LANGUAGE='JavaScript'>
            window. alert('Incorrect Email or Password');
            window. location. href='loginpage.html';
            </script>"); }
}

}

?>