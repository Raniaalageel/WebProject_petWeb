<?php 

session_start();
//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

$email2=$_SESSION['email'];
//$query="SELECT AppitmentID, pet_name,serviceN,dateA,timeA,noteA,status,PetID FROM appointment WHERE status='pending'" ;


if(!($db=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");


//$i=1;
//$query="SELECT * FROM appointment WHERE status='pending'";
$query="SELECT * FROM  (appointment JOIN Pet ON Pet.id=appointment.PetID) WHERE status='pending' AND Owneremail='$email2'";

//$query="SELECT * FROM Pet WHERE id IN (SELECT PetID FROM appointment WHERE status='pending')";
//$query="SELECT * FROM  appointment WHERE PetID IN(SELECT id FROM Pet )";
if(!($result=mysqli_query($db,$query)))
die("<p>the qurey error@@@@@@@@</p>");
$run = $db -> query($query);
if(!empty($run->num_rows)&&($run->num_rows >0)){
    while($row = $run ->fetch_assoc()){
        $id=$row['AppitmentID'];


       
/*
   //$Q1="SELECT * FROM Pet,appointment WHERE Pet.id = appointment.PetID and AppitmentID='$id'"; 
   if(!($result2=mysqli_query($db,$query2)))
   die("<p>the qurey error</p>");
    $run2 = $db -> query($query2);
    if(!empty($run2->num_rows)&&($run2->num_rows > 0)){
        while($row4 = $run2 ->fetch_assoc()){
            $Profile_Pic=$row4['phptol'];
        }
    }*/
}
}




$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);

//$row4=mysqli_fetch_all($result2,MYSQLI_ASSOC);
//mysqli_free_result($result2);

//$id = mysqli_real_escape_string($db2, $_POST['id']);



?>






















<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Appointment Requests</title>
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
    <link rel="stylesheet" href="AppointmentReqStyle.css" />  
  </head>
<body>

    


    <header>
       
        <a href="#" class="logo"><img src="logo.png" alt="logo" height="50rem" ><span style="font-size: 40px; " !important>Webets </span></a>
    
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


<section id="facilities">
        <div class="container">

           <div class="title">
            <h1 style="margin-top:-10%" class="head">My Appointment Requests</h1>
          </div>



           <div class="row">


           
     
<!--
$query="SELECT * FROM  appointment WHERE status='pending'  AND PetID IN (SELECT id FROM Pet )";
$result = mysqli_query($db,$query);
while($row = mysqli_fetch_array($result)){
    
$query="SELECT fullname,phptol FROM Pet WHERE id =".$row['PetID'].";";
$pet_result = mysqli_fetch_array(mysqli_query($db,$query));
echo'<div class="col-md-4">';
echo'<div class="card text-center">';
echo'<div class="card-body">';
//echo'<h3  class="card-title">"</h3>"';
echo "<p>".$row['pet_name']."</p>";

echo "<p>".$row['serviceN']."</p>";
echo "<p>".$row['dateA']."</p>";
echo "<p>".$row['timeA']."</p>";
echo "<p>".$row['noteA']."</p>";


echo'</div>';
echo'</div>';
echo'</div>';
}
-->

<?php foreach ($row as $appoi) { ?>
  

<div class="col-md-4">
                <div class="card text-center">
                    
                    <div class="card-body">
                        <h3 class="card-title"><strong><p><?php echo"Pet Name : " .$appoi['pet_name'];   ?></p></strong></h3>
                      
                <img style="margin-left:0%;"  width="70%" height="20%" alt="could not dawnload" src="data:image/jpeg;base64,<?php echo base64_encode($appoi['photopet']); ?>"  >  
             

                        <p><?php echo"service : " .$appoi['serviceN'];   ?></p>
               <p><?php echo"Date : " .$appoi['dateA'];   ?></p>
            <br><p><?php echo"time : " .$appoi['timeA'];   ?></p>
            <br><p><?php echo"note : " .$appoi['noteA'];   ?></p></p>
                        <div class="icons">
                        <a onclick="return confirm('Are you sure that you want to Edit this appointment ?')" href="EditAppOwner.php?id=<?php echo $appoi['AppitmentID']; ?>">Edit <i class="fas fa-pen"></i></a>
                        <a onclick="return confirm('Are you sure that you want to Cancel this appointment ?')"href="DeleteOwnerApp.php?id=<?php echo $appoi['AppitmentID']; ?>">Cancel <i class="fas fa-pen"></i></a>
                       

                          </div>
                 
                    </div>
                </div>
            </div>
<?php }?>
                         
            <!--First App


            <div class="col-md-4">
                <div class="card text-center">
                    <img src="cat.png" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Mochi</strong></h3>
                        <p class="card text">Service :Dental Care <br>Time & date : 30/4/2022 - 9:30PM</p>
                        
                        <div class="icons">
              
                            <a href="EditMochi.html" class="rvw">edit <i class="fas fa-pen"></i></a>
                            <a href="#" class="rvw">Cancel <i class="fas fa-pen"></i></a>
                          </div>
                 
                    </div>
                </div>
            </div>
-->

         <!--Second App


            <div class="col-md-4">
                <div class="card text-center">
                    <img src="jen.png" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Lisa</strong></h3>
                        <p class="card text">Service :Hair Cut <br>Time & date : 30/4/2022 - 10:30AM</p>
                        

                        <div class="icons">
              
                            <a href="LisaEdite.html" class="rvw">edit <i class="fas fa-pen"></i></a>
                            <a href="#" class="rvw">Cancel <i class="fas fa-pen"></i></a>
                          </div>
                    </div>
                </div>
            </div>-->

         <!--Third App

            <div class="col-md-4">
                <div class="card text-center">
                    <img src="n.png" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Max</strong></h3>
                        <p class="card text">Service :grooming <br>Time & date : 1/5/2022 - 10:30AM</p>
                        
                        <div class="icons">
              
                            <a href="MaxEdite.html" class="rvw">edit <i class="fas fa-pen"></i></a>
                            <a href="#" class="rvw">Cancel <i class="fas fa-pen"></i></a>
                          </div>
                    </div>
                </div>
            </div>-->


         <!--Fourth App


            <div class="col-md-4">
                <div class="card text-center">
                    <img src="jen.png" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Lisa</strong></h3>
                        <p class="card text">Service :grooming <br>Time & date : 10/3/2022 - 12:15PM</p>
                       
                         
                        <div class="icons">
              
                            <a href="LisaSecEdite.html" class="rvw">edit <i class="fas fa-pen"></i></a>
                            <a href="#" class="rvw">Cancel <i class="fas fa-pen"></i></a>
                          </div>
                    </div>
                </div>
            </div>-->


            

            <div class="col-md-4">
                <div class="card text-center">
                    <img src="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><strong>Name of your Pet</strong></h3>
                        <p class="card text">Service  <br>Time & date </p>
                        <a href="requestpage.php"><i class="fas fa-plus"></i>Add New Request</a>
                    </div>
                </div>
            </div>





           </div><!--row-->

        </div>
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
              <h3 style="font-size :large;">Email Us</h3>  
             
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
    
<!--Ediittt from sara -->
</body>

</html>