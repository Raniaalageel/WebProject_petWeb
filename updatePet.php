<?php

$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";
if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!isset($_GET['id'] )){
    die('id not provided');

}
$id=$_GET['id'];

$query="SELECT * FROM  pet where id= '$id' ";


if(!($result=mysqli_query($db2,$query)))
die("<p>the qurey error</p>");


$row=mysqli_fetch_array($result);



$query2="SELECT DISTINCT gender  FROM  Pet ";
$query3="SELECT DISTINCT status_  FROM  Pet ";

if(!($result2=mysqli_query($db2,$query2)))
die("<p>the qurey error</p>");

//

$row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
mysqli_free_result($result2);

if(!($result3=mysqli_query($db2,$query3)))
die("<p>the qurey error</p>");



$row3=mysqli_fetch_all($result3,MYSQLI_ASSOC);
mysqli_free_result($result3);

//$n = $_GET['n'];
//$gen = $_GET['gen'];
//$date1 = $_GET['date'];
//$breed1 = $_GET['breed'];
//$statu = $_GET['stat'];
//$med = $_GET['med'];
//$vac = $_GET['vac'];
mysqli_close($db2);
?>


   
   
<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
       <title>Account settings</title>
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
   
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">
    
   
       <link rel="stylesheet" href="editStyle.css">
       <link rel="stylesheet" href="Header and Footer.css">
       
    </head>
    <body>
        <header>
       
            <a nhref="home-owner.html"  class="logo"><img src="logo.png" alt="logo" height="50rem" ><span>WebSet</span></a>
        
            <input type="checkbox" id="menu-bar">
            <label for="menu-bar" class="fas fa-bars"></label>
        
            <nav class="navbar">
                <ul class="nav-list">
                    <li  ><a href="home-owner.html" >Home</a>
                        <ul class="sub-menu" id="sub-menu-arrow"> 
                          <li > <a href="./ Add A Service Page.html">Add a New Service</a></li>
                          <li><a href="./availabel apointment manager.html">Set a New Appointment</a></li>
                          <li><a href="./request list manager.html">View Requests List</a></li>
          
                          <li><a href="./upcoming and previous manager.html">View Appointments List</a> </li>
                  
                        </ul>
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
        <div class="icons" >  
      
        <form  class="inputA" method="POST"  enctype='multipart/form-data'  name="testForm4" onsubmit="return(myvalidationFunc())" action="updatePet2.php?id=<?php echo $id; ?>" >

        <a href="view2.php?id=<?php echo $row['id']; ?> "><img src="back-removebg-preview.png" ></a>

        
       </div>
        <div class="wrapper bg-white mt-sm-5">
            <div class="pp">
            <h4 class="pb-4 border-bottom" style="font-size: 40px; color: #ADD8E6; text-align: center; ">ACCOUNT SETTINGS</h4>

            <div class="iimg">
          


       <img id="addimg"   width="200" height="100"  src="data:image/jpeg;base64,<?php echo base64_encode($row['photopet']); ?>"  >  
       <input type="file" id="photo"  name="photo"   accept="image/*" /> 
       
           
                 
                </div>
                 
           
            <div class="py-2">
                <div class="row py-2">
                    <div class="col-md-6"> <label for="firstname">Name</label> <input type="text" class="bg-light form-control"  value="<?php echo $row['fullname']; ?>"name="name"  >  </div>

                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Birth date</label> <input type="date" class="bg-light form-control"  value="<?php echo $row['birth_date']; ?>"name="date"  >  </div>
                </div>
                
                <div class="row py-2">
                <div class="col-md-6"> <       <label for="petgender">Gender</label>
                  <select name="gender" class="bg-light"   id="petgender" selected="<?php echo $row["gender"]?>">
                      <option   <?php echo $row["gender"]=='Male'?'selected="selected"': ''?>  >Male</option>
                      <option <?php echo $row["gender"]=='Female'?'selected="selected"': ''?> >Female</option>
                  </select>
                </div>
                        </select> 

                
                    <input type="text">

                </div>
                <div class="row py-2">
                    <div class="col-md-6"> <label for="email">Breed</label> <input type="text" class="bg-light form-control"  value="<?php echo $row['breed']; ?>"name="breed" id="breed"  >  </div>

                </div>
                <div class="row py-2">
                <div class="col-md-6"> 
                    <label for="petgender">Status</label>
                  <select name="stat"class="bg-light" id="stat" selected="<?php echo $row["status_"]?>">
                      <option   <?php echo $row["status_"]=='Spayed'?'selected="selected"': ''?>  >Spayed</option>
                      <option <?php echo $row["status_"]=='Neutered'?'selected="selected"': ''?> >Neutered</option>
                  </select>
                </div>
                        </select>
               
                <input type="text">
                        <label for="Medical">Medical History</label>
                        
                                           <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname"> </label> <textarea class="bg-light form-control" name="med" id="med"  row="4" >"<?php echo $row['medical_history']; ?>" </textarea></div>

                       
                        <label for="vaccinations">Vaccinations</label>
                   

                        <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname"> </label> <textarea class="bg-light form-control" name="vac" id="vac" row="4" >"<?php echo $row['vaccination_list']; ?>" </textarea></div>


                            
                        </div>
                          </div>

                <div class="py-3 pb-4 border-bottom" > <input type ="submit" class="btn btn-primary mr-3"id="update" name="update"onclick="return confirm('Are you sure that you want to update pet information?')" value="save"> 
            </div>
             
                 <!--   <div> <b>Want to Delete this Pet? </b>

                    </div>
                    <div class="ml-auto"> <button class="btn danger"id="delete" onclick="checkdelete()" name="delete">Delete</button> button class="btn border button">Cancel</button> </div>
                </div>
            
            </div>
            </form>
        </div>-->
       <!-- <div class="pic"><img src="IMG_3875-removebg-preview.png" alt=""></div>
        <div class="pic2"><img src="m.png" alt=""></div>  -->
    </section>
    <div class="footer">
        <div class="box-container">
            
            <div class="box">
                <h3>Quick links</h3>
                <a href="./Home Manager.html">Home</a>
                <a href="./Services Manager.html">Services</a>
                <a href="./About Us Manager.html">About US</a>    
            </div>
            <div class="box">
                <h3>Find Us</h3>  
             
                <div class="info">
                    
                    <i class="fas fa-envelope"></i>
                                <a href="mailto:StudentID@student.ksu.edu.sa">Email</a>
                </div>
         
            </div>
            <div class="box">
                <h3>Contact Information</h3>
                <div class="info">
                    <i class="fas fa-phone"></i>
                    <p>+123-456-789 <br> +111-222-3333</p>
                </div>
                 
                   
            </div>
            
        </div>
        <h1 class="credit">&copy; copyright @ 2022 by software Engineers</h1>
    </div>
    <script src="myformValid2.js"> </script>
    </body>
</html>


