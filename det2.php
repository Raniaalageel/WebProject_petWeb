<?php 
//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";


//$query="SELECT AppitmentID, pet_name,serviceN,dateA,timeA,noteA,status FROM appointment WHERE status='pending'" ;

$query="SELECT * FROM  (appointment JOIN Pet ON Pet.id=appointment.PetID) WHERE status='pending'";

if(!($db=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!($result=mysqli_query($db,$query)))
die("<p>the qurey error</p>");


$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);


//$id = mysqli_real_escape_string($db2, $_POST['id']);

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>details</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="OwnerAppStyle.css" />
    <link rel="stylesheet" href="Header and Footer.css" />
    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
  </head>
  <body>
    



    


<header>

<a href="./Home Manager.html" class="logo"><img src="logo.png" alt="logo" height="50rem" >
<span style="font-size: 40px;">WEBETS</span></a>
<input type="checkbox" id="menu-bar">
<label for="menu-bar" class="fas fa-bars"></label>

<nav class="navbar">
    <ul class="nav-list">
        <li  ><a href="home-manager.html">Home</a>
           <!-- <ul class="sub-menu" id="sub-menu-arrow"> 
              <li > <a href="./MahaB Add A Service Page.html">Add a New Service</a></li>
              <li><a href="./availabel apointment manager.html">Set a New Appointment</a></li>
              <li><a href="./request list manager.html">View Requests List</a></li>

              <li><a href="./upcoming and previous manager.html">View Appointments List</a> </li>
      
            </ul>-->
          </li>
          
          
       <li><a href="p1.html">Services</a></li> 

       <li><a href="AboutUsM.html">About Us</a></li> 
        <li class="move-right-btn" ><a href="main.html"id="profile"><i class="fas fa-sign-out" ></i></a>
           <!--  <ul class="sub-menu" id="sub-menu-arrow2"> 
                <li ><a href="#">View Profile</a></li>
                <li><a href="./LnadingPage.html">Sign Out</a></li>
        
              </ul>-->
            </li>
      </ul>
    
    <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->


</nav>

</header>
  
    <section>
  
     <!--Back buttom-->
		<div class="icons2" >  
            <a href="p1.html"> <img src="back-removebg-preview.png" ></a>
       </div>





       <section class="section_Body">
      <div class="row">
          
        <h1 style="margin-top:-20%" class="head"> Appointment Details </h1>
      </div>

     

     
          
            <?php foreach($row as $appoi){  ?>

<div class="col-md-4">
                <div class="card text-center">
                    
                    <div class="card-body">
           
                <div class="card">
             <!--   <div class="img-container">
                <img style="padding-top:20%; padding-bottom:90%;  "    height="190"   src="data:image/jpeg;base64,php echo base64_encode($appoi['photo']); ?>"  >  
              </div>-->
              <h3 class="card-title"><strong><p><?php echo"Pet Name : " .$appoi['pet_name'];   ?></p></strong></h3>
              <img style="margin-left:0%; "  width="300" height="200" alt="could not dawnload" src="data:image/jpeg;base64,<?php echo base64_encode($appoi['photopet']); ?>"  >  

              <p><?php echo"service:" .$appoi['serviceN'];   ?></p>
               <p><?php echo"Date:" .$appoi['dateA'];   ?></p>
               <p><?php echo"time:" .$appoi['timeA'];   ?></p>
               <p><?php echo"note:" .$appoi['noteA'];   ?></p><br>
                    <div class="icons">
        <a onclick="return confirm('Are you sure that you want to accept this Appointment?')"href="AcceptApp.php?id=<?php echo $appoi['AppitmentID']; ?>">Accept <i class="fas fa-pen"></i></a>
        <a onclick="return confirm('Are you sure that you want to decline this Appointment?')"href="DeclineApp.php?id=<?php echo $appoi['AppitmentID']; ?>" >Decline <i class="fas fa-pen"></i></a></div>
       

        </div>
                </div>
            </div>

<?php }?>


           
           
           


            
</section>
</section>

<div class="footer">
	<div class="box-container">
		
		<div class="box">
			<h3 style="font-size :large;">Quick links</h3>

			<a href="./Home Manager.html" style="font-size :large;">Home</a>
			<a href="./Services Manager.html" style="font-size :large;">Services</a>
			<a href="./About Us Manager.html" style="font-size :large;">About US</a>    
		</div>
		<div class="box">
			<h3 style="font-size :large;">Email Us</h3>  
		   
			<div class="info">
				
				<i class="fas fa-envelope"></i>
							<a href="mailto:StudentID@student.ksu.edu.sa" style="font-size :large;">Email</a>
			</div>
		   
		</div>
		<div class="box">
			<h3 style="font-size :large;">Contact Information</h3>
			<div class="info">
				<i class="fas fa-phone"></i>
				<p style="font-size :large;">+123-456-789 <br>
				 +111-222-3333</p>
			</div>
			   
		</div>
		
	</div>
	<h1 class="credit" style="font-size :large;">&copy; copyright @ 2022 by software Engineers</h1>
</div>
  

</body>

</html>