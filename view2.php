<?php

session_start();

//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

$email2=$_SESSION['email'];
//$query="SELECT * FROM  Pet ";
//if(!isset($_SESSION['email'])){header("Location:../view2.php");}
$query="SELECT * FROM Pet WHERE ownere='$email2'";
if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!($result=mysqli_query($db2,$query)))
die("<p>the qurey error</p>");
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);


//$id = mysqli_real_escape_string($db2, $_POST['id']);
//if(!($result2=mysqli_query($db2,$query2)))
//die("<p>the qurey error</p>");
//$row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
mysqli_close($db2);
//print_r($pizzas);

?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>showService</title>
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
    <link rel="stylesheet" href="sara.css" />
    <link rel="stylesheet" href="profile_style.css">
    <link rel="stylesheet" href="Header and Footer.css" />
    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="profile_style.css">
  
  </head>
  <body>


  







    
  <header>

<a href="home-owner.html" class="logo"><img src="logo.png" alt="logo" height="50rem" >
    <span style="font-size: 40px;">WEBETS</span></a>

<input type="checkbox" id="menu-bar">
<label for="menu-bar" class="fas fa-bars"></label>

<nav class="navbar">
    <ul class="nav-list">
        <li  ><a href= "home-owner.html">Home </a>
           <!-- <ul class="sub-menu" id="sub-menu-arrow"> 
              <li > <a href="./MahaB Add A Service Page.html">Add a New Service</a></li>
              <li><a href="./availabel apointment manager.html">Set a New Appointment</a></li>
              <li><a href="./request list manager.html">View Requests List</a></li>

              <li><a href="./upcoming and previous manager.html">View Appointments List</a> </li>
      
            </ul>-->
            
          </li>
          
          
       <li><a href="pageone.html">Services</a></li> 
       <li><a href="AboutUsU.php">About Us</a></li> 
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
  <div class="icons2" >  
            <a href="home-owner.html"> <img src="back-removebg-preview.png" ></a>
       </div>
    <section style="margin-top:-20%" class="section_Body">
      <div class="row">
          
        <h1 class="head">Pet list:</h1>
      </div>

      <div  style="width:70%; height:222%; margin-left:15%;" class="card">
      <a  style="font-size:35px;" href="addPet.php" class="rvw">ADD PET <i  style = "font-size:40px;" class="fas fa-plus"></i></a>
</div>   

      <ul style="margin-bottom:20px; display:inline;" > 
 <div style="display:inline; " class="row">
 <div style="display:inline;" class="column">
          
            <?php foreach($row as $appoi){  ?>
           
                <div class="card" style="width:65%; height=10%; margin-left:18%;">
                    
               <div class="img-container"> 
                <img style="margin-left:2%; padding-bottom:10%;"  width="270" height="160" alt="could not dawnload" src="data:image/jpeg;base64,<?php echo base64_encode($appoi['photopet']); ?>"  >  
          
            </div>
            <?php  echo '<br> ';   ?>
                    <p style="font-size:23px;" ><?php echo"Name: " .$appoi['fullname'];   ?></p>
                    <p style="font-size:23px;"><?php echo" Birthdate: " .$appoi['birth_date'];  ?></p>
                    <p style="font-size:23px;"><?php echo"Gender:" .$appoi['gender'];   ?></p>
                    <p style="font-size:23px;"><?php echo"Breed:" .$appoi['breed'];   ?></p>
                    <p style="font-size:23px;"><?php echo"Status:" .$appoi['status_'];   ?></p>
                    <p style="font-size:23px;"><?php echo"Medical history:" .$appoi['medical_history'];   ?></p>
                    <p style="font-size:23px;"><?php echo"Vaccination:" .$appoi['vaccination_list'];   ?></p>
                    

                    <div class="icons">
        <a  href="updatePet.php?id=<?php echo $appoi['id']; ?>">Edit <i class="fas fa-pen"></i></a>
        <a onclick="return confirm('Are you sure that you want to delete this pet?')" href="deletePet.php?id=<?php echo $appoi['id']; ?>" >delete <i class="fas fa-pen"></i></a></div>
                   
                    
        </ul>
</div>

<?php }?>
</div>
</div>

            






<!-- 
      <div class="row">
   





		<div class="column">
            <div class="card">
              <div class="img-container">
                <img src="n.png" />
              </div>
              <h3>Max</h3>
              <p>Service :Dental Care</p>
              <p>date :  4:30PM</p>
              <p>Time : 8/2/2022 - 4:30PM</p>
            <p>note:   </p>
              <div class="icons">
        <a href="editMaxApp1.html" class="rvw">edit <i class="fas fa-pen"></i></a>
        <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>
              </div>
            </div>
          </div>

<br><br>
<br><br>
<br><br>
           





        <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="jen.png" />
              </div>
              <h3>Lisa</h3>
              <p>Service :Hair cut</p>
              <p>Time & date : 2/2/2022 - 7:15PM</p>
              <div class="icons">
              
				<a href="editLiApp1.html" class="rvw">edit <i class="fas fa-pen"></i></a>
        <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>
              </div>
            </div>
          </div>

	







        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="cat.png" />
            </div>
            <h3>Mochi</h3>
            <p>Service :grooming</p>
			<p>Time & date : 2/2/2022 - 7:15PM</p>
            <div class="icons">
            
                <a href="editMoApp1.html" class="rvw">edit <i class="fas fa-pen"></i></a>
                <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>

            </div>
          </div>
        </div>







<div class="column">
	<div class="card">
	  <div class="img-container">
		<img src="jen.png" />
	  </div>
	  <h3>Lisa</h3>
	  <p>Service :Dental Care</p>
	  <p>Time & date : 3/1/2022 - 10:00AM</p>
	  <div class="icons">
	  
		<a href="editLiApp2.html" class="rvw">edit <i class="fas fa-pen"></i></a>
        <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>

	  </div>
	</div>
  </div>









          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="n.png" />
              </div>
              <h3>Max</h3>
               <p>Service :grooming</p>
			  <p>Time & date : 30/1/2022 - 11:40AM</p>
			  <div class="icons">
			  
                <a href="editMaxApp2.html" class="rvw">edit <i class="fas fa-pen"></i></a>
                <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>

                
              </div>
            </div>
          </div>




-->
<!--i need it
<div class="column">
  <div class="card"> 
   <div class="img-container"> 	<img src="pluus.png" />
   </div>
    <div class="icons"> 
     
      <a  style="text-align: left;" href="set avalible app finally.html">Set Available Appointment<br></a>
    </div>
  </div>
</div>-->


            
        
     
     <!-- </div>-->
    </section>

  </section>

  <div class="footer">
    <div class="box-container">
        
        <div class="box">
            <h3 style="font-size :large;">Quick links</h3>
            <a style="font-size :large;" href="#">Home</a>
            <a style="font-size :large;" href="#">Services</a>
            <a style="font-size :large;" href="#">About US</a>    
        </div>
        <div class="box">
            <h3 style="font-size :large;">Email Us</h3>  
           
            <div class="info">
                
                <i class="fas fa-envelope"></i>
                            <a  style="font-size :large;" href="mailto:StudentID@student.ksu.edu.sa">Email</a>
            </div>
           
        </div>
        <div class="box">
            <h3 style="font-size :large;">Contact Information</h3>
            <div class="info">
                <i class="fas fa-phone"></i>
                <p style="font-size :large;">+123-456-789 <br> +111-222-3333</p>
            </div>
               
        </div>
        
    </div>
    <h1 style="font-size :large;" class="credit">&copy; copyright @ 2022 by software Engineers</h1>
</div>


  </body>
</html>