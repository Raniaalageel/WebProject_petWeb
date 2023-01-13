<?php



//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

$query="SELECT   AppointmentID, service,date,time,note FROM setappointment ";
/*$query="SELECT serviceID, photo,  AppointmentID, service,date,time,note FROM setappointment ,servicemanager WHERE serviceID=AppointmentID";*/


//$query2="SELECT serviceID, photo FROM servicemanager";

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
    <title>manageS</title>
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
    <link rel="stylesheet" href="Header and Footer.css" />
    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
    <style type="text/css">
.icons2{
          border-radius: 1px;
          margin-bottom: 100px;
        
          width: 50px;  
        height: 50px;  
        text-align: right;  
        
        padding: 15px;
    
        position: relative;
        z-index: 9;
        top: 200px;
      }
      .icons2 img{
          width: 100px;  
          height: 100px;
      }
</style>
  
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
                      
                      </li>
                      
                      
                   <li><a href="p1.html">Services</a></li> 

                   <li><a href="AboutusM.php">About Us</a></li> 
                    <li class="move-right-btn" ><a href="main.html"id="profile"><i class="fas fa-sign-out" ></i></a>
                      
                        </li>
                  </ul>
                
                <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
        
        
            </nav>
    
    </header>

  <section>
 
    <section   class="section_Body">
   
    <div class="row">
      <br>
      <br>
               <h1 style="margin-top:-20%" class="head">Manage Appointment</h1>
      </div>
      <div class="icons2" >  
            <a href="home-manager.html"> <img src="back-removebg-preview.png" ></a>
       </div>
      <div  style="width:70%; height:222%; margin-left:15%;   margin-top:-20%;" class="card">
      <a  style="font-size:35px;" href="SetAvalibleAppFinally.php" class="rvw">SET AVAILABLE APPOINTMENT <i  style = "font-size:40px;" class="fas fa-plus"></i></a>
</div>   
    <br>  
      <ul style="margin-bottom:20px; display:inline;" > 
 <div style="display:inline;">
 <div style="display:inline;" >
          
            <?php foreach($row as $appoi){  ?>
           
                <div class="card" style="width:70%; height:10%; margin-left:15%;">
             <!--   <div class="img-container">
                <img style="padding-top:20%; padding-bottom:90%;  "    height="190"   src="data:image/jpeg;base64,php echo base64_encode($appoi['photo']); ?>"  >  
              </div>-->
                    <p style="font-size:23px;"><?php echo"service:" .$appoi['service'];   ?></p>
                    <p style="font-size:23px;"><?php echo"Date:" .$appoi['date'];   ?></p>
                    <p style="font-size:23px;"><?php echo"time:" .$appoi['time'];   ?></p>
                    <p style="font-size:23px;" ><?php echo"note:" .$appoi['note'];   ?></p>
                    <div class="icons">
        <a onclick="return confirm('Are you sure that you want to Edit this appointment ?')"href="editMaxApp1.php?id=<?php echo $appoi['AppointmentID']; ?>">Edit <i class="fas fa-pen"></i></a>
        <a onclick="return confirm('Are you sure that you want to Delete this appointment ?')"href="deleteApp.php?id=<?php echo $appoi['AppointmentID']; ?>" >delete <i class="fas fa-pen"></i></a></div>
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