<?php
session_start();
$pw1 = $_POST['pw1'];
$pw2 = $_POST['pw2'];
$email=$_SESSION['email'];

$mOro=$_SESSION['mORo'];

$conn=new mysqli("localhost", "root", "", "webs");
if($conn->connect_error){
    die('Connection Failed');
}
else{
if ((empty($pw1) )|| (empty($pw2) )) {
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('Empty');
    window. location. href='reset.html';
    </script>");
}
else{
    //EMAIL
    
    if ($pw1 == $pw2) {
       //validate pw
       $uppercase1 = preg_match('@[A-Z]@', $pw1);
       $lowercase1 = preg_match('@[a-z]@', $pw1);
       $number1    = preg_match('@[0-9]@', $pw1);
       $specialChars1 = preg_match('@[^\w]@', $pw1);
       //
       $uppercase2 = preg_match('@[A-Z]@', $pw2);
       $lowercase2 = preg_match('@[a-z]@', $pw2);
       $number2    = preg_match('@[0-9]@', $pw2);
       $specialChars2 = preg_match('@[^\w]@', $pw2);

       if(!$uppercase1 || !$lowercase1 || !$number1 || !$specialChars1 || strlen($pw1) < 8
       ||!$uppercase2 || !$lowercase2 || !$number2 || !$specialChars2 || strlen($pw2) < 8 )
       {
           echo ("<script LANGUAGE='JavaScript'>
           window. alert('Wrong PW Format: include uppercase, lowercase, numbers and must be 8 digits or more.');
           window. location. href='reset.html';
           </script>");
       }
        else{
//m or o
if($mOro=='owner')
      { $sql = "UPDATE users SET pw='$pw1' WHERE email='$email' ";
       $result2 = mysqli_query($conn, $sql);}
else if($mOro=='manager')
{ $sql = "UPDATE manager SET pw='$pw1' WHERE email='$email' ";
 $result2 = mysqli_query($conn, $sql);}       


            mysqli_close($conn);
            echo ("<script LANGUAGE='JavaScript'>
            window. alert('Updated Successfully');
            window. location. href='main.html';
            </script>");
          //  header('location:main.html');
        }}
        else{
            echo ("<script LANGUAGE='JavaScript'>
            window. alert('Passwords dont match');
            window. location. href='reset.html';
            </script>");
}
}

}

?>