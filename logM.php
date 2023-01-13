<?php

$email = $_POST['email'];
$pw = $_POST['pw'];
//$remember=$_POST['remember'];

$conn=new mysqli("localhost", "root", "", "webs");
if($conn->connect_error){
    die('Connection Failed');
}
else{
if ((empty($email)) || (empty($pw))) {
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('Please fill in all the fields required!');
    window. location. href='loginMngr.html';
    </script>");
}
else{
    $sql = "SELECT * FROM managers WHERE email='$email'AND pw='$pw' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
       
          /*  if(!empty($remember))
            {
                setcookie("email",$email,(time() + 3600 * 24 * 30));
                setcookie("pw",$pw,(time() + 3600 * 24 * 30));
                echo "Cookies Set Successfuly";
            }
            else{
                if(isset($_COOKIE["email"]))
                {
                    setcookie("email","");
                }
                if(isset($_COOKIE["pw"]))
                {
                    setcookie("pw","");
                }
                
            }*/
            echo ("<script LANGUAGE='JavaScript'>
            window. alert('login successfully ');
            window. location. href='home-manager.html';
            </script>");
            mysqli_close($conn);
                //header('location:home-manager.html');
        }
        else{echo ("<script LANGUAGE='JavaScript'>
            window. alert('Incorrect Email or Password');
            window. location. href='loginMngr.html';
            </script>"); }
}

}

?>