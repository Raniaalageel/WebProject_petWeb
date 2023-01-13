<?php
	$host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");

if(!isset($_GET['id'] )){
        die('id not provided');
    
    } 
   $id=$_GET['id'];
   if(isset($_POST['submit'])){
     if($_FILES['fileim']['size']>0)  {
        $phptol=$_FILES['fileim']['tmp_name'];
    $phptol=addslashes(file_get_contents($phptol));  
    $about=$_POST['about'];
	$vision=$_POST['vision'];
    $location=$_POST['location'];
    
	//$photoa=$_POST['photoa'];
    
    if( mysqli_query($db2,"UPDATE  aboutus set about='$about', vision='$vision' , location='$location', phptol='$phptol'  where aboutid='$id' "))
	//echo '<script>alert("about us is updated")</script>';  
    //header('location:AboutUsU.php');   
    //header('location:AboutUsM.php');

    ?>
<script type="text/javascript">
alert("About Us is Updated succsefully");
location="AboutUsU.php";
location="AboutUsM.php";

</script> 
<?php
    }
    else{
        $about=$_POST['about'];
        $vision=$_POST['vision'];
        $location=$_POST['location'];
        if( mysqli_query($db2,"UPDATE  aboutus set about='$about', vision='$vision' , location='$location'  where aboutid='$id' "))
	//echo '<script>alert("about us is updated")</script>';  
    //header('location:AboutUsU.php');   
 //header('location:AboutUsM.php');
 ?>
 <script type="text/javascript">
 alert("About Us is Updated succsefully");
 location="AboutUsU.php";
 location="AboutUsM.php";
 
 </script> 
 <?php
    }

}
  mysqli_close($db2);
?>
