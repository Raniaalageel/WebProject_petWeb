<?php
 error_reporting(0);
 $id=$_SESSION['id'];
$dbservername="localhost";
$dbuser="root";
$dbpass="";
$dbname="webs";
$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
$query = "SELECT * FROM  Pet";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//$results=mysqli_fetch_assoc($data);
$query22="SELECT phptol FROM Pet";

if(!($result2=mysqli_query($conn,$query22)))
die("<p>the qurey error</p>");
$row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pets' List</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
   
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">
    
   
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="Header and Footer.css">
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style_list.css" />
  </head>
  <body>
    <header>
       
      <a href="#"  class="logo"><img src="logo.png" alt="logo" height="50rem" ><span style="font-size: 40px;">WEBETS</span></a>
  
      <input type="checkbox" id="menu-bar">
      <label for="menu-bar" class="fas fa-bars"></label>
  
      <nav class="navbar">
          <ul class="nav-list">
              <li  ><a href="home-owner.html" >Home</a>
                  
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
    <section>

      <div class="row">
          
        <h1>My Pets</h1>
      
      </div>
      <br>
      <br>
      <h2>Want to add A new Pet? <a href="addPet.php">Cick Here</a> </h2> 
      <div class="row">
      <?php
//echo $results[photo]." ".$results[fullname]." ".$results[gender]." ".$results[breed];
if ($total!=0)
{
  

 
    while( $results=mysqli_fetch_assoc($data))
    {
        ?>
        
        <div class="column">
          <div class="card">
            <div class="img-container">
            <?php foreach($row2 as $appoi){  ?>
       <img   src="data:image/jpeg;base64,<?php echo base64_encode($appoi['phptol']); ?>"  >  
    <?php }?>
            </div>
            <h3><?php echo $results['fullname'];?></h3>
            <p>Breed:<?php echo $results['breed'];?></p>
            <p>Gender:<?php echo $results['gender'];?></p>
            <div class="icons">
            
            
            
          <a href="view.php?id=<?php echo $results['id']; ?>">View Pet <i class="fas fa-pen"></i></a>
        <a href="deletePet.php?id=<?php echo $results['id']; ?>" onclick="return delete()"  >delete Pet <i class="fas fa-pen"></i></a></div>
          <br>
          <br>
          <br>
          <br>
          <br>
     
            </div>
          </div>
        </div>
       
<?php
    }
}

else
echo  "";


?>
<script type="text/javascript">
  function delete() {
    return confirm("Are You Sure That You Want To Delete This Pet?");
  }
</script>
      </div>
    </section>
  </section>
  <div class="footer">
    <div class="box-container">
        
        <div class="box">
            <h3>Quick links</h3>
            <a href="home-owner.html">Home</a>
            <a href="pageone.html">Services</a>
            <a href="AboutUs.html">About US</a>    
        </div>
        <div class="box">
            <h3>Email Us</h3>  
         
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


  </body>
</html>

   
   <?php
       
       
   
       $id=$_GET['id'];
   
       $host="localhost";   $duus="root";
       $dbp="";     $dbname="Webets";
       if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
       die("<p>the connection error</p>");
   
   //header('location:manageS.php');
   mysqli_close($db2);
   ?>

  