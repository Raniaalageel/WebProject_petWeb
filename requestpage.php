<?php 
//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

session_start();
$email=$_SESSION['email'];

$query="SELECT * FROM setappointment";



if(!($db=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!($result=mysqli_query($db,$query)))
die("<p>the qurey error</p>");


$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);


//$id = mysqli_real_escape_string($db2, $_POST['id']);
$qry="SELECT fullname,id FROM Pet where ownere='$email' " ;



if(!($result2=mysqli_query($db,$qry)))
die("<p>the qurey error@@@@@@</p>");


$row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
mysqli_free_result($result2);




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Request Page</title>
	<link href="requestpageStyle.css" rel="stylesheet"/> 

	 <!-- Font Awesome -->
	 <link
	 rel="stylesheet"
	 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
   />
   <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
   <!-- Google Font -->
   <link
	 href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
	 rel="stylesheet"
   />
   <link rel="preconnect" href="https://fonts.googleapis.com">





</head>
<body>

<header>
       
       <a href="./Home Manager.html" class="logo"><img src="logo.png" alt="logo" height="50rem" ><span style="font-size: 40px;">Webets</span></a>
   
       <input type="checkbox" id="menu-bar">
       <label for="menu-bar" class="fas fa-bars"></label>
   
       <nav class="navbar">
           <ul class="nav-list">
               <li  ><a href="home-owner.html">Home</a>
                 </li>
                 
                 
              <li><a href="pageone.html">Services</a></li> 
              <li><a href="AboutUs.html">About Us</a></li> 
               <li class="move-right-btn" ><a href="#"id="profile"><i class="fas fa-user" ></i></a>
                   <ul class="sub-menu" id="sub-menu-arrow2"> 
                   <li ><a href="view2Owner.php">View Profile</a></li>
                            <li><a href="view2.php">Pets</a></li>
                            <li><a href="main.html">Sign Out</a></li>
               
                     </ul></li>
             </ul>
           
           <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
   
   
       </nav>
   
   </header>
 
   <section>
  




		
  <div class="out">
  
      <!--Back buttom-->
          <div class="icons2" >  
              <a href="Appointment_Req.php"> <img src="back-removebg-preview.png" ></a>
         </div>
  
  <div class="container">
  <h1 class="BookHead"> Book Now ! </h1>
  
  <!--<form class="input" method="post" action="/action_page.php" >-->
  <form class="input" method="POST"  name="testForm2" onsubmit="return(validationFunc2())"  >
  
  
      
          <div class="selectPet">
          <strong>Select your Pet :</strong>
          <select id="selection" name='pet_name'>
            <!--  <option value="0" data-subtitle="--" data-left="MaxPic.jpeg" selected>--Select your pet--</option>
              <option value="1" data-subtitle="Max" data-left="MaxPic.jpeg" >Max</option>
              <option value="2" data-subtitle="lola" data-left=".jpeg" >Lisa</option>
              <option value="3" data-subtitle="coco" data-left=".jpeg" >Mochi</option> -->
              <?php foreach($row2 as $appoin){  ?>
				<option value=<?php echo $appoin['id']?>><?php echo $appoin['fullname'];  ?>  </option>
				<?php }?>
          </select>
      </div>
  
      <br>
  
      <div class="selectService">                
      <label for="service"> <strong>Choose a service:</strong></label>
       <!--<select name="service" id="service" name="service">
       <option value="Choose a service" selected>--Choose a service--</option>
        <option value="Dental Care">Dental Care</option>
        <option value="Hair cut">Hair cut</option>
        <option value="Bath">grooming</option>
        <option value="naile care">naile care</option> -->
        <select name ="select" id="service">
        <?php foreach($row as $appoi){  ?>
       
			<!--<option><?php echo $appoi['service'];   ?> <?php echo $appoi['date'];  ?><?php echo $appoi['time'];  ?> </option>-->
            <!--<option <?php echo $selectedA['service'].$selectedA['date'].$selectedA['time']== $appoi['service'].$appoi['date'].$appoi['time'] ?'selected="selected"':''?>> <?php echo $appoi['service'];?> <?php echo $appoi['date'];?><?php echo $appoi['time'];?></option>-->
            <!--<?php $AppointmentID=$appoi['AppointmentID']  ;?>-->
            <!--<option><?php echo $appoi['AppointmentID']."/".$appoi['service']."/".$appoi['date']."/".$appoi['time']; ?> </option>-->


            <!--<?php $service=$appoi['service'] ; $date=$appoi['date'] ; $time=$appoi['time'] ; ?>
            <option><?php echo $appoi['service'];   ?> <?php echo $appoi['date'];  ?><?php echo $appoi['time'];  ?> </option>-->

            <option><?php echo $appoi['service']."/".$appoi['date']."/".$appoi['time'];  ?> </option>
<?php }?>    




<?php 
$select=$_POST['select'];
$s=explode("/",$select);
$service =$s[0];
$date=$s[1];
$time=$s[2];
?>          
         
		 </select>	

       
                
                <a style="font-size :large; color:black;" href="showserviceM.php">VIEW SERVICE INFORMATION</a>
      </div>
    
  
      <br>
  
      <!--
      <div class="DateTime">
      <label for="date&time" ><strong>Enter the Date &amp; Time :</strong> </label>
      <input type="datetime-local" id="dateTime" name="date&time" required>
      </div>
      
     <div class="DateTime">
      <label for="date&time" ><strong>Enter the Date :</strong> </label>
      <input type="date" id="dateTime" name="date" >
      </div>
      <br><br>
      <div class="DateTime">
          <label for="date&time" ><strong>Enter the Time :</strong> </label>
          <input type="time" id="Time" name="time" >
          </div>
  -->
  
  
      <br>
  
      <br>
      <label for="Note" ><strong>Add Note :</strong> <br>
      <textarea name="note" rows="4" cols="36" id="Note"Enter your Note about your Appointment></textarea></label>
  
      <br>
  
  
      <div class="end" >
      <input id="submit" name="submit" value="Send" type="submit" class="toogle" >
      <input id="reset" value="reset" type="reset" >
      </div>  	
  
  
      
      
  </form>
  
  
  </div>
  </div>
  
  
  
  </section>


  <div class="footer">
  <div class="box-container">
      
      <div class="box">
          <h3  style="font-size :large;">Quick links</h3>
          <a href="home-owner.html"  style="font-size :large;">Home</a>
          <a href="pageone.html"  style="font-size :large;">Services</a>
          <a href="AboutUs.html"  style="font-size :large;">About US</a>    
      </div>
      <div class="box">
          <h3  style="font-size :large;">Email Us</h3>  
         
          <div class="info">
              
              <i class="fas fa-envelope"></i>
                          <a href="mailto:StudentID@student.ksu.edu.sa" style="font-size:large;">Email</a>
          </div>
         
      </div>
      <div class="box">
          <h3  style="font-size :large;">Contact Information</h3>
          <div class="info">
              <i class="fas fa-phone"></i>
              <p  style="font-size :large;">+123-456-789 <br> +111-222-3333</p>
          </div>
             
      </div>
      
  </div>
  <h1 class="credit"  style="font-size :large;" >&copy; copyright @ 2022 by software Engineers</h1>
</div>

  




<script src="requestpage.js"> </script>





</body>
</html>

<?php
/*
$petName=$_POST['pet_name'];
$query3="SELECT fullname FROM Pet WHERE id=$petName";
$RESULT =mysqli_query($db , $query3 );
while($row2 = $RESULT->fetch_assoc()){
    $PicName2 =$row2['fullname'];
}*/
if(isset($_POST['submit'])){

$petName=$_POST['pet_name'];
$query3="SELECT fullname FROM Pet WHERE id=$petName";
$RESULT =mysqli_query($db , $query3 );
while($row2 = $RESULT->fetch_assoc()){
    $PicName2 =$row2['fullname'];

$petnameee=$_POST['pet_name'];
//$serviceAll=$_POST['service'];
//$service=strtok($serviceAll,"/");
//$id= intval(substr($serviceAll , 0 , strpos($serviceAll , "/") ));
//$qeuryR="SELECT * FROM setappointment WHERE AppointmentID='$id'";
//$service="SELECT service FROM setappointment WHERE AppointmentID='$AppointmentID'";
//$date="SELECT date FROM setappointment WHERE AppointmentID='$AppointmentID'";
//$time="SELECT time FROM setappointment WHERE AppointmentID='$AppointmentID'";

//$date=substr($serviceAll , $service , strpos($serviceAll , "/") );
//$time=substr($serviceAll , $date , strpos($serviceAll , "/") );
//alert("$service");
//$datee=$row.$data[2];
//$time=$row.$data[3];

$notes=$_POST['note'];
$status='pending';

$qry="INSERT  Into appointment values(null,'$PicName2','$service' ,'$date', '$time' ,'$notes','$status', '$petName' ,'$email')";}

if(mysqli_query($db,$qry)){
    echo  '<script>alert("added your appointment sucssesfully "); </script>';

//header('location:Appointment_Req.php');
}else{
    echo mysqli_error($db);}
}

?>