<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="styleR.css">
</head>
<body>
<div class="out">
    <div class="container">
        <h1 class="rgtitle">Hello &amp Welcome!</h1>
     <form action="signup-check.php" method="post" class="inputA">


     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


         <!--first name-->
          <?php if (isset($_GET['fname'])) { ?>
               <input type="text" 
                      name="fname" 
                      class="input"
                      placeholder="First Name"
                      value="<?php echo $_GET['fname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="fname" 
                      class="input"
                      placeholder="First Name"><br>
          <?php }?>

          <!--last name-->
          <?php if (isset($_GET['lname'])) { ?>
               <input type="text" 
               name="lname" 
               class="input"
                      placeholder="Last Name"
                      value="<?php echo $_GET['lname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
               name="lname" 
               class="input"
                      placeholder="Last Name"><br>
          <?php }?>

         <!--email-->
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      class="input"
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
               name="email" 
               class="input"
                      placeholder="Email"><br>
          <?php }?>


     	<!--pw-->
     	<input type="password" 
                 name="pw" 
                 class="input"
                 placeholder="Password"><br>

          <!--re-pw-->
          <input type="password" 
                 name="re_password" 
                 class="input"
                 placeholder="Re_Password"><br>

                 <p class="txt"><b>Choose your gender:</b></p>
            <div class="radio">

            <!--ADD CHECK-->
        <input type="radio" name="gender" value="male">
        <label for="male">male</label><br>

        <input type="radio" name="gender" value="female">
         <label for="female">female</label>

        </div>
        <p class="pic"><b>Add your picture(optional):</b></p>
      
        <input type="file" id="myFile" name="filename">
<!--TILL HERE-->

       <div class="btnb" >
        <div id="btn"></div>

     	<button type="submit"class="toggle"><a href="home-owner.html" style="color: black; text-decoration: none;">Register</a></button>
        </div>

        <p class="old"> Already have an account? <a href="loginpage.html">
        Login
        </a></p>
        <!--index.php-->

     </form>
          </div>
          </div>
</body>
</html>