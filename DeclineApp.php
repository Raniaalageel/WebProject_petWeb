<?php
	  
    if(!isset($_GET['id'] )){
        die('id not provided');
    
    }  

    $id=$_GET['id'];

    $host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");

	mysqli_query($db2,"DELETE from  appointment where  AppitmentID='$id'");
    header('location:det2.php');
    mysqli_close($db2);
?>