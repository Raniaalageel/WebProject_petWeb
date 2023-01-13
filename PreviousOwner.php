<?php 

session_start();
//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

$email2=$_SESSION['email'];

//$query="SELECT AppitmentID, pet_name,serviceN,dateA,timeA,noteA,status FROM appointment WHERE status='no'" ;
$query="SELECT * FROM  (appointment JOIN Pet ON Pet.id=appointment.PetID) WHERE status='no' AND Owneremail='$email2'";


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
    <title>My Previous Appointment</title>
     <!-- Font Awesome -->
     <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:100,300,400&display=swap"
      rel="stylesheet"
    />


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
    <!--<link rel="stylesheet" href=" Header and Footer.css" />-->
   
  </head>
  <body>


    <header>
       
      <a href="#" class="logo"><img src="logo.png" alt="logo" height="50rem" ><span style="font-size: 40px; font-weight: normal;" !important>Webets </span></a>
  
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
        <!--Back buttom-->
	<div class="icons2" >  
      <a href="pageone.html"> <img src="back-removebg-preview.png" ></a>
    </div>
    <section>
      <div class="row">
        <h1 style="margin-top:-10%" class="head">My Previous Appointment</h1>
      </div>
      
      <div class="row">
        

		  

<?php foreach($row as $appoi){  ?>
    <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                    <h3 class="card-title"><strong><p><?php echo"Pet Name : " .$appoi['pet_name'];   ?></p></strong></h3>
                    <img style="margin-left:0%;"  width="70%" height="20%" alt="could not dawnload" src="data:image/jpeg;base64,<?php echo base64_encode($appoi['photopet']); ?>"  >  
                  
                    <p><?php echo"service:" .$appoi['serviceN'];   ?></p>
               <p><?php echo"Date:" .$appoi['dateA'];   ?></p>
            <br><p><?php echo"time:" .$appoi['timeA'];   ?></p>
            <br><p><?php echo"note:" .$appoi['noteA'];   ?></p></p>
                        
            <i class="fas fa-star"></i><a href="rvwNEW.php?id=<?php echo $appoi['AppitmentID']; ?>">Add Review</a>

                    </div>
                </div>
            </div>

            <?php }?>  

           


            </section>

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
          <h3  style="font-size:large;">Email Us</h3>  
         
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


</body>
</html>






