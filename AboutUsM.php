<?php



//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

$query="SELECT  aboutid, phptol,about, vision,location  FROM aboutus";

if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!($result=mysqli_query($db2,$query)))
die("<p>the qurey error</p>");


$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);


//$id = mysqli_real_escape_string($db2, $_POST['id']);


//print_r($pizzas);

?>

<html >
    <head>
        

        
    <meta charset="UTF-8">
<title>4-interface</title>
<link rel="stylesheet" href="sara.css" />


    <link href="About3.css" rel="stylesheet"/> 
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
   
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">
    
   
     
    <!-- font awesome cdn link  -->
    
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
        top: 50px;
      }
      .icons2 img{
          width: 100px;  
          height: 100px;
      }
</style>
    </head>


    <body>
      <div class="bodyall" >


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

                   <li><a href="AboutusM.html">About Us</a></li> 
                    <li class="move-right-btn" ><a href="main.html"id="profile"><i class="fas fa-sign-out" ></i></a>
                      
                        </li>
                  </ul>
                
                <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
        
        
            </nav>
    
    </header>
        
      
       <section>
       


       <p >
       <?php foreach($row as $appoi){  ?>
       <img style="margin-left:20%;"   width="650" height="300"  src="data:image/jpeg;base64,<?php echo base64_encode($appoi['phptol']); ?>"  >  
       <div class="icons2" >  
            <a href="home-manager.html"> <img src="back-removebg-preview.png" ></a>
       </div>
       </p>
       <?php }?>

    
     <!--   <img  id="addi"  width="600" height="300"  src/>-->
       <!--<input type="file" id="phAbo" /> </p>-->
       


    
       	<div id="aboutt" class="beforsericle-about" > 
              <p >About Us</p></div>
              <br>
              
      <ul > 
 <div style="display:inline;" class="row">
 <div style="display:inline;" class="column">
          
            <?php foreach($row as $appoi){  ?>
                <div  style="width:800px; margin-left: 13%;" class="card">
                    <p><?php echo"" .$appoi['about'];   ?></p>
                    
                    <div class="icons">
        <a href= "editAbout.php?id=<?php echo $appoi['aboutid']; ?>">Edit <i class="fas fa-pen"></i></a>
        </ul>
</div>
<?php }?>
</div>
</div>
       

  <div  class="beforsericle-aboutvison"> 
    <p > Our vision</p></div> 
    <ul> 
 <div style="display:inline; " class="row">
 <div style="display:inline;" class="column">
          
            <?php foreach($row as $appoi){  ?>
                <div style="width:800px; margin-left: 20%;" class="card">
                    <p><?php echo"" .$appoi['vision'];   ?></p>
                    
                    <div class="icons">
                 
        <a href= "editAbout.php?id=<?php echo $appoi['aboutid']; ?>">Edit <i class="fas fa-pen"></i></a>
        </ul>
</div>
<?php }?>
</div>
</div>
   

 <div class="beforsericle-aboutloaction" style="display:inline; text-transform: lowercase;"> 
    <p>Our Location</p></div>
    <br>
    <ul  > 
 <div style="display:inline; text-transform: lowercase;" class="row">
 <div style="display:inline; text-transform: lowercase;" class="column">
          
            <?php foreach($row as $appoi){  ?>
                <div  style="width:800px; margin-left: 20%; text-transform: lowercase; "  class="card">
                    <p><?php echo"" .$appoi['location'];   ?></p>
                    
                    <div class="icons">
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57955.6826379356!2d46.64733332089844!3d24.787571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee38cc5676f3d%3A0x6f95f398c8a198ff!2z2KfYsdmG2Kgg2YbYtyDZhNmE2K3ZitmI2KfZhtin2Kog2KfZhNin2YTZitmB2KkgLSDZgdix2Lkg2KfZhNmF2YTZgtin!5e0!3m2!1sar!2ssa!4v1644003072374!5m2!1sar!2ssa" width="270" height="120" frameborder="0" style="border:0" allowfullscreen ></iframe>
        <a  href= "editAbout.php?id=<?php echo $appoi['aboutid']; ?>">Edit <i class="fas fa-pen"></i></a>
    
        </ul>
    

</div>
<?php }?>
</div>
</div>

    <!--
      <div class="textara2">
        <p>veterinary clinic means a facility for the medical 
        </p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57955.6826379356!2d46.64733332089844!3d24.787571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee38cc5676f3d%3A0x6f95f398c8a198ff!2z2KfYsdmG2Kgg2YbYtyDZhNmE2K3ZitmI2KfZhtin2Kog2KfZhNin2YTZitmB2KkgLSDZgdix2Lkg2KfZhNmF2YTZgtin!5e0!3m2!1sar!2ssa!4v1644003072374!5m2!1sar!2ssa" width="270" height="120" frameborder="0" style="border:0" allowfullscreen ></iframe>
        <a class="pen" href="#"><li><a href="editAbout.html" ><i class="fas fa-pencil"></i> </a></li>
        </div>-->

    </section>


  <!-- header section ends -->
        <!-- Footer section starts -->
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