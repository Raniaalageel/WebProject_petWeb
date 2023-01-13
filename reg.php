<?php
session_start();

$_SESSION['email']= $_POST['email'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pw = $_POST['pw'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$img = $_POST['img'];

//DB connection
$conn=new mysqli("localhost", "root", "", "webs");
if($conn->connect_error){
    die('Connection Failed');
}
else{
    if ((empty($fname)) || (empty($lname)) || (empty($email)) || (empty($pw)) || (empty($phone)) || (empty($gender)))
    {
		
        echo ("<script LANGUAGE='JavaScript'>
        window. alert('Please fill in all the fields required!');
        window. location. href='register.html';
        </script>");
	}
   else{

$uppercase = preg_match('@[A-Z]@', $pw);
$lowercase = preg_match('@[a-z]@', $pw);
$number    = preg_match('@[0-9]@', $pw);
$specialChars = preg_match('@[^\w]@', $pw);

  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
         echo ("<script LANGUAGE='JavaScript'>
        window. alert('Wrong email format!');
        window. location. href='register.html';
        </script>");
    }
    else if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)|| !preg_match("/^[a-zA-Z-' ]*$/",$lname ))
    {
         echo ("<script LANGUAGE='JavaScript'>
        window. alert('Wrong name format. Only letters are accepted.');
        window. location. href='register.html';
        </script>");
    }
    else if(!preg_match("/^[0-9]{10}$/", $phone))
    {
         echo ("<script LANGUAGE='JavaScript'>
        window. alert('Wrong phone format. Must be 10 digits.');
        window. location. href='register.html';
        </script>");
    }
    else 
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pw) < 8)
    {
        echo ("<script LANGUAGE='JavaScript'>
        window. alert('Wrong Password Format. Must be at least 8 characters; include uppercase, lowercase, number, special character.');
        window. location. href='register.html';
        </script>");
    }

    else{
        $sql = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);
        $sql2 = "SELECT * FROM users WHERE phone='$phone' ";
		$result2 = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($result) > 0) {

            echo ("<script LANGUAGE='JavaScript'>
        window. alert('The email is taken try another');
        window. location. href='register.html';
        </script>");
			}
            else if (mysqli_num_rows($result2) > 0) {
                echo ("<script LANGUAGE='JavaScript'>
                window. alert('The phone number is taken try another');
                window. location. href='register.html';
                </script>");
               }
        else{	
    if( mysqli_query($conn,"INSERT INTO users(fname, lname, email, pw, phone, gender, img)
    VALUES('$fname', '$lname', '$email', '$pw', '$phone', '$gender', '$img')"));
	 echo ("<script LANGUAGE='JavaScript'>
     window. alert('registered successfully ');
     window. location. href='home-owner.html';
     </script>");
    mysqli_close($conn);
    //header('location:home-owner.html');}
    //exit();  
       // header("Location: register.html");
    }}
}
//}
/*function ValidateEmail($email) 
{
    var m=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 if (($email).value.match(m))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)*/
}
?>