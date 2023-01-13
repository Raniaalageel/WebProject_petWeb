<?php
session_start();


$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";
$db=mysqli_connect($host,$duus,$dbp,$dbname);

$owner_email=$_SESSION['email'];
//ff
?>

<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="EditPageSHAMMA.css">


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

<title>Add new pet</title>
    </head>
    <body>


    <header>
       
        <a href="#" class="logo"><img src="logo.png" alt="logo" height="50rem" ><span style="font-size: 40px;">WEBETS</span></a>
    
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
  
     
     
        <div class="wrapper bg-white mt-sm-5">
            <h4 class="pb-4 border-bottom" style="font-size: 40px; color: #ADD8E6; text-align: center; font-family: fsans-serif;">Add a new pet</h4>

            <div class="d-flex align-items-start py-3 border-bottom"> 
                 

          
               
             



            </div>
            <form id ="myform"onsubmit="return(myvalidationFunc())"name ="testForm4"class="inputA" enctype='multipart/form-data'     method="POST">
            <img  id="addimg"   width="200" height="100"/>
		<input type="file" id="myFile"  name="photo" >
           
               
                <div class="row py-2">
                  
                    <div class="col-md-6"> <label for="firstname">Pet's Name</label> <input name="name" type="text" class="bg-light form-control" placeholder=""> </div>
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Pet's Breed</label> <input name="breed"type="text" class="bg-light form-control" placeholder="" > </div>
                </div>
                <div class="row py-2">
                    <label for="email">Birth date</label>
                    <input type="date" name="date" class="col-md-6" value="birthdate"placeholder="birthdate" >
                   

                </div>
               
                   
                        <div class="col-md-6"> <label for="country">Pet's Gender</label> <select name="gender" id="country" class="bg-light">
                        <option value="" selected>select</option>
                            <option value="Male" >Male</option>
                            <option value="Male">Female</option>

                        </select> </div>
                        <div class="col-md-6"> <label for="country">Spayed OR Neutered?</label> <select name="stat" id="country" class="bg-light">
                        <option value="" selected>select</option>
                        <option value="Spayed" >Spayed</option>
                            <option value="Neutered">Neutered</option>

                        </select> </div>
                        <label for="Medical">Medical History</label>
                        <textarea rows="4" cols="70"  class="form-control" placeholder=" Write your Pet's Medical history here ." style="border: solid 1px gray;" name="med"  ></textarea>
                        <label for="Medical"> Vaccinations</label>
                        <textarea rows="4" cols="70"  class="form-control" placeholder=" List all Pet's vaccinations here ." style="border: solid 1px gray;"  name="vac" ></textarea>

                    
                          
                          </div>

                          <div class="end" >
                            <input id="submit" value="Add Pet" type="submit" class="toogle" style="position: relative; top: -90px; left: 2px;" name="submit"  >
                            </form>
                            </div>  
                
      
       <!-- <div class="pic"><img src="IMG_3875-removebg-preview.png" alt=""></div>
        <div class="pic2"><img src="m.png" alt=""></div> -->





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
                  <div class="info">
                      <i class="fas fa-envelope"></i>
                      <p>costumerService@Healed.com <br> costumerService2@Healed.com</p>
                  </div>
                 
          </div>
          
      </div>
      <h1 class="credit">&copy; copyright @ 2022 by software Engineers</h1>
  </div>
    

  <script src="myformValid.js"></script>
    </body>
</html>

<?php



//$image = $_FILES['image']['fname'];
//$image_size = $_FILES['image']['size'];
//$image_tmp_name = $_FILES['image']['tmp_name'];
//$image_folder = 'uploaded_img/'.$image;
if(isset($_POST['submit']))
{
    
    // get values form input text and number

 
$fname =$_POST['name'];
$breed =  $_POST['breed'];
$vacc =$_POST['vac'];
$medical = $_POST['med'];
$date =$_POST['date'];
$gender = $_POST['gender'];
$stat = $_POST['stat'];
$photo =addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
 
    
$query = "INSERT INTO pet    VALUES ('$gender','$photo','$stat','$vacc','$date','$fname','$breed','$medical',null,'$owner_email')";


if(mysqli_query($db,$query)){
 ?>
    <script type="text/javascript">
alert("pet is added seccessfully!");
location="view2.php";
</script>
<?php
//header('location:SetAvalibleAppFinally.php ');
}else{
    echo mysqli_error($db);
}

}
mysqli_close($db);




  
  
    
   

?>
