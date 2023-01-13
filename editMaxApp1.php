<?php

$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";
if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!isset($_GET['id'] )){
    die('id not provided');

}
$id=$_GET['id'];

$query="SELECT * FROM  setappointment  where AppointmentID= '$id' ";



if(!($result=mysqli_query($db2,$query)))
die("<p>the qurey error</p>");


$row=mysqli_fetch_array($result);


///

$query2="SELECT  Nservice FROM servicemanager";

if(!($result2=mysqli_query($db2,$query2)))
die("<p>the qurey error</p>");



$row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
mysqli_free_result($result2);
///
//mysqli_free_result($result);
mysqli_close($db2);
//print_r($pizzas);
?>

<!DOCTYPE html>
<html>
    <head>
       
       <meta charset="UTF-8">
       <title>editMaxApp1 </title>
       <link rel="stylesheet" href="editStyle.css">
       <link rel="stylesheet" href="Header and Footer.css">
      <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

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
                
          
        
        
            </nav>
    
    </header>
    <section>
    <div class="icons2" >  
            <a href="manageS.php"> <img src="back-removebg-preview.png" ></a>
       </div>
    

       
        <div class="wrapper bg-white mt-sm-5">
            <h4 class="pb-4 border-bottom" style="font-size: 40px; color: #ADD8E6; text-align: center; ">APPOINTMENT SETTINGS</h4>

            
           <!-- <div class="iimg">
                <img src="n.png" alt="user" >
           
                 
                </div>
                <br><br>-->
                <br>

                
              
   
            <form  class="inputA" method="POST"  name="testForm4" onsubmit="return(validationFunc4())" action="update.php?id=<?php echo $id; ?>" >
                
            <div class="py-2">
            <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="Date"> Date</label> <input type="date" class="bg-light form-control"  value="<?php echo $row['date']; ?>"name="date"  > </div>
               
                </div></div>
               
<br>

               <!-- <div class="row py-2">
                    <div class="col-md-6"> <label for="email">Service</label> <input type="text" class="bg-light form-control" value="Lionhead" placeholder="Pet's breed"required> </div>

                </div>-->
                <div class="row py-2">
                    <div class="col-md-6"> <label for="service">service</label> <select id="service" class="bg-light"   value="<?php echo $row['service']; ?>"name="service" >
                    <option><?php echo $row['service'];   ?>  </option> 
                    <?php foreach($row2 as $appoi){  ?>
				<option><?php echo $appoi['Nservice'];   ?>  </option>
				<?php }?>  
                    </div>
                        </select> </div>
                     <!--   <div class="row py-2">
                            <div class="col-md-6"> <label for="country">Time</label> <select name="country" id="country" class="bg-light"required>
                                    <option value="Female" selected>4:30</option>
                                    <option value="Male">7:15</option>
                                    <option value="Male">10:00</option>
                                    <option value="Male">11:40</option>
                            </div>
                                </select> </div>-->
                                <br>
                                <div class="py-2">
                           <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname"> Time</label> <input type="time" class="bg-light form-control" value="<?php echo $row['time']; ?>"name="time" > </div>
                               </div></div>
               <br>
                               <div class="py-2">
                           <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname"> Note</label> <input type="text" class="bg-light form-control"   value="<?php echo $row['note']; ?>"name="note" > </div>
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
    

    <script src="sc2.js"> </script>
    </body>
</html>
