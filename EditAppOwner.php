<?php
//$db=mysql_connect("localhost","root","","webs");
session_start();

$email=$_SESSION['email'];

$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!isset($_GET['id'] )){
    die('id not provided');
}
$id=$_GET['id'];

$query="SELECT * FROM appointment  WHERE AppitmentID='$id' ";



if(!($result=mysqli_query($db2,$query)))
die("<p>@@the qurey error</p>");


$row=mysqli_fetch_array($result);


///

$query2="SELECT serviceID,Nservice FROM servicemanager ";

if(!($result2=mysqli_query($db2,$query2)))
die("<p>!!the qurey error</p>");



$row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
mysqli_free_result($result2);


$query3="SELECT  fullname,id FROM Pet where ownere='$email' ";

if(!($result3=mysqli_query($db2,$query3)))
die("<p>##the qurey error</p>");



$row3=mysqli_fetch_all($result3,MYSQLI_ASSOC);
mysqli_free_result($result3);


///
//mysqli_free_result($result);
mysqli_close($db2);
//print_r($pizzas);
?>


<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="EditPage.css">
       <title>Account settings</title>
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
<script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>

    </head>
    <body>

    <header>
       
        <a href="#" class="logo"><img src="logo.png" alt="logo" height="50rem" ><span style="font-size: 40px;">Webets</span></a>
    
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
                        <li ><a href="Owner_profile.html">View Profile</a></li>
					<li><a href="My_pets_list.html">Pets</a></li>
					<li><a href="main.html">Sign Out</a></li>
                
                      </ul></li>
              </ul>
            
            <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
    
    
        </nav>
    
    </header>
  
    <section>
  <!--Back buttom-->
         <div class="icons2" >  
              <a href="Appointment_Req.php"> <img src="back-removebg-preview.png" ></a>
         </div>
 
    <div class="wrapper bg-white mt-sm-5">
         
            <h4 class="pb-4 border-bottom" style="font-size: 40px; color: #ADD8E6; text-align: center; ">Edit my Appointment</h4>

            
           <!-- <div class="iimg">
                <img src="n.png" alt="user" >
           
                 
                </div>
                <br><br>-->
                <br>
            <form  class="inputA" method="POST"  name="testForm2" onsubmit="return(validationFunc2())" action="UpdateAppo.php?id=<?php echo $id; ?>" >
                
            <div class="py-2">
            <div class="row py-2">

            <div class="col-md-6"> <label for="name">Pet Name</label> <select id="petname" class="bg-light"   value="<?php echo $row['pet_name']; ?>"name="petName" >
                    <option><?php echo $row['pet_name'];   ?>  </option> 
                    <?php foreach($row3 as $appoi){  ?>
				<option><?php echo $appoi['fullname'];   ?>  </option>
				<?php }?>  
                    </div>
                        </select> </div>
                    <!--<div class="col-md-6 pt-md-0 pt-3"> <label for="name"> Pet Name</label> <input type="name" class="bg-light form-control"  value="<?php echo $row['pet_name']; ?>"name="petName"  > </div>-->

                    <div class="col-md-6 pt-md-0 pt-3"> <label for="Date"> Date</label> <input type="date" class="bg-light form-control"  value="<?php echo $row['dateA']; ?>"name="dateApp"  > </div>
               
                </div></div>
               
<br>

               
                <div class="row py-2">
                    <div class="col-md-6"> <label for="service">service</label> <select id="service" class="bg-light"   value="<?php echo $row['serviceN']; ?>"name="serviceApp" >
                    <option><?php echo $row['serviceN'];   ?>  </option> 
                    <?php foreach($row2 as $appoi){  ?>
				<option><?php echo $appoi['Nservice'];   ?>  </option>
				<?php }?>  
                    </div>
                        </select> </div>
                    
                                <br>
                                <div class="py-2">
                           <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname"> Time</label> <input type="time" class="bg-light form-control" value="<?php echo $row['timeA']; ?>"name="timeApp" > </div>
                               </div></div>
               <br>
                               <div class="py-2">
                           <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname"> Note</label> <input type="text" class="bg-light form-control"   value="<?php echo $row['noteA']; ?>"name="noteApp" > </div>
                               </div></div>
                        



                            
                          </div>
<br><br>
                <div class="py-3 pb-4 border-bottom" > 
                <!--  <button class="btn btn-primary mr-3" >Save</button> -->
                    <input type="submit" name="submit"  class="btn border button"  value="Edit">
                <!--<button class="btn border button">Cancel</button> </div>-->
               
            </div>
        </div>
        </form>
       <!-- <div class="pic"><img src="IMG_3875-removebg-preview.png" alt=""></div>
        <div class="pic2"><img src="m.png" alt=""></div>-->
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
  

    <script src="EditAppOwner.js"> </script>

    </body>
</html>