


<?php
	$host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");


    if(!isset($_GET['id'] )){
        die('id not provided');
    
    } 
    $id=$_GET['id'];
    
    $service=$_POST['service'];
	$date=$_POST['date'];
    $time=$_POST['time'];
	$note=$_POST['note'];


   
   if( mysqli_query($db2,"UPDATE setappointment set service='$service', date='$date' , time='$time',note='$note' where  AppointmentID='$id'"));
	//echo '<script>alert("Appointment is Updated succsefully")</script>';

 //header('location:manageS.php');
 ?>
 <script type="text/javascript">
 alert("Appointment is Updated succsefully");
 location="manageS.php";

 </script> 
 <?php
    mysqli_close($db2);
?>