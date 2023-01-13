<?php
session_start();
$code = $_POST['code'];

$email= $_SESSION['email'];

$mOro=$_SESSION['mORo'];
    

$conn=new mysqli("localhost", "root", "", "webs");
if($conn->connect_error){
    die('Connection Failed');
}
else{
if (empty($code)) {
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('Empty');
    window. location. href='codefgp.html';
    </script>");
}
else{
//m or o?
    if($mOro=='owner'){
    $sql = "SELECT code FROM users WHERE email='$email' ";
    $result = mysqli_query($conn, $sql);}
    else if($mOro=='manager'){
        $sql = "SELECT code FROM manager WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);  
    }
//type
    while ($row = $result->fetch_assoc()) {
       $r= $row['code'];
    }
   // if(isset($_SESSION['email'])){
  //      echo $code; }

    if ($r == $code) {
       
            mysqli_close($conn);
            header('location:reset.html');
        }
        else{
            echo ("<script LANGUAGE='JavaScript'>
            window. alert('Incorrect Code');
            window. location. href='codefgp.html';
            </script>");
}

}}

?>