<?php
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";
$db=mysqli_connect($host,$duus,$dbp,$dbname);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Request Page</title>
	<link href="styleAppo.css" rel="stylesheet"/> 

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

</head>
<body>



    <header>
       
        <a href="#" class="logo"><img src="logo.png" alt="logo" height="50rem" >  <span style="font-size: 40px;">WEBETS</span></a>
    
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars"></label>
    
        <nav class="navbar">
            <ul class="nav-list">
                <li  ><a href="home-manager.html">Home</a>
                  </li>
                  
                  
               <li><a href="p1.html">Services</a></li> 
               <li><a href="AboutUsM.html">About Us</a></li> 
                <li class="move-right-btn" ><a href="#"id="profile"><i class="fas fa-user" ></i></a>
                    <ul class="sub-menu" id="sub-menu-arrow2"> 
                        <li ><a href="#">View Profile</a></li>
                        <li><a href="./LnadingPage.html">Pets</a></li>

                        <li><a href="./LnadingPage.html">Sign Out</a></li>
                
                
                      </ul></li>
              </ul>
            
            <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
    
    
        </nav>
    </header>
  
    <section>
  


	


<div class="out">
<div class="container">
<h1 class="BookHead"> Add service! </h1>

<form class="input" method="POST" id="form"  enctype='multipart/form-data' name="testForm" onsubmit="return(validationFunc())" >


	
		<div class="selectService">
		<strong>Enter the service :</strong>
		<input type="text"  name="Nservice" size="50" maxlength="30" id="addservice">
	</div>

	<br><br>
	<div class="selectService">
		<label for="service"> <strong>Enter a price of service:</strong></label>
		<input id="service" name="price" type="number" size="25" maxlength="35"  >
	
		</div>
	

<br>


	


    

	<br>
    <label for="Note" ><strong>Add Description :</strong> <br>
	<textarea name="description" rows="4" cols="36" id="Note"Enter your Note about your Appointment></textarea></label>

	<br><br>

	<!-- <label class="filebutton">-->
		
		<strong><p>add photo:</p></strong>
		<img  id="addimg"   width="200" height="100"/>
		<input type="file" id="myFile"  name="photo" accept="image/*" >
	
		
		<!--  </label>-->

		
    
	
	<div class="end" >
	<input id="submit" value="Add" type="submit" class="toogle"  name="submit"  >
	<!--<input id="reset" value="reset" type="reset" >-->
	<button name="back" class="submit"  id="reset" ><a href="showservice.php" >Back </a></button>';

    </div>  	


	
</form>


</div>
</div>



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








<script src="sc1.js"> </script>
</body>
</html>

<?php

if(isset($_POST['submit'])){
$Nservice=$_POST['Nservice'];
$price=$_POST['price'];
$description=$_POST['description'];
//$photo=$_POST['photo'];
$photo=addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));

$qry="INSERT  Into servicemanager values(null,'$Nservice' ,'$price', '$description' ,'$photo')";

if(mysqli_query($db,$qry)){
 
    echo  '<script>alert("added sucsses");</script>';
 //   header('location:showservice.php ');
}else{
    echo mysqli_error($db);
}

}
mysqli_close($db);
?>