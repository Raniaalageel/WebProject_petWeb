<?php
	
    session_start();

$email=$_SESSION['email'];
    /*
    if(!isset($_GET['id'] )){
        die('id not provided');
    
    }  

    $id=$_GET['id'];*/

    $host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");

$r=	mysqli_query($db2,"DELETE from  users where  email='$email'");

  ?>
   <script type="text/javascript">
alert("account is deleted seccessfully!");
location="loginpage.html";
</script>
<?php


mysqli_close($db2);
?>