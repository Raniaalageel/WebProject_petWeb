
<?php
	$host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");


    if(!isset($_GET['id'] )){
        die('id not provided');
    
    } 
    $id=$_GET['id'];
    

    $petName=$_POST['petName'];
    $service=$_POST['serviceApp'];
    $datee=$_POST['dateApp'];
    $time=$_POST['timeApp'];
    $notes=$_POST['noteApp'];
   
   if( mysqli_query($db2,"UPDATE appointment set pet_name='$petName', serviceN='$service', dateA='$datee' , timeA='$time',noteA='$notes' WHERE  AppitmentID='$id'"));
	//echo '<script>alert("Appointment is Updated succsefully")</script>';

 //header('location:Appointment_Req.php');
  ?>
  <script type="text/javascript">
alert("Appointment is Updated succsefully");
location="Appointment_Req.php";
</script> 
<?php
    mysqli_close($db2);
?>
