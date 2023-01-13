

<?php


session_start();

$email=$_SESSION['email'];
	$host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");


    /*
    if(!isset($_GET['id'] )){
        die('id not provided');
    
    } */
    //$id=$_GET['id'];
    if(isset($_POST['update'])){


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];

        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $query2 = "SELECT * FROM users where email= '$email'";

if($_FILES['photo']['size']>0)  {
    $phptol2=$_FILES['photo']['tmp_name'];
    $phptol2=addslashes(file_get_contents( $phptol2));  


if( mysqli_query($db2,"UPDATE  users set gender='  $gender',   email ='$email' , 	fname=' $fname',lname='$lname',phone=' $phone ' ,img= '$phptol2'   where  email='$email'"))
?>

<script type="text/javascript">
    alert("account is updated seccessfully!");
    location="view2Owner.php";
    </script>
    <?php
}
else{
   

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];

    $email = $_POST['email'];
    $phone = $_POST['phone'];
        if( mysqli_query($db2,"UPDATE  users set gender='  $gender',   email ='$email' , 	fname=' $fname',lname='$lname',phone=' $phone '  where  email='$email'"))
        ?>

        <script type="text/javascript">
            alert("account is updated seccessfully!");
            location="view2Owner.php";
            </script>
            <?php

}

}

/////
   
        
  
    mysqli_close($db2);
?>





