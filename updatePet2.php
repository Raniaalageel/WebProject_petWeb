

<?php
	$host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");


    if(!isset($_GET['id'] )){
        die('id not provided');
    
    } 
    $id=$_GET['id'];

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $status =$_POST['stat'];
    $vaccination_ = $_POST['vac'];
    $birth_ = $_POST['date'];
    $breed = $_POST['breed'];
    $medical = $_POST['med'];
    if(isset($_POST['update'])){


    if ((empty($name))) 
    {
		
        echo ("<script LANGUAGE='JavaScript'>
        window. alert('name can not be empty');
        window. location. href='updatePet.php';
        </script>");
	}
   
		if ($gender= "") //form validation
{
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('gender can not be empty');
    window. location. href='updatePet.php';
    </script>");
}
if ($status= "") //form validation
{
    echo ("<script LANGUAGE='JavaScript'>
    window. alert('status can not be empty');
    window. location. href='updatePet.php';
    </script>");
}
    if ((empty($birth_))) 
    {
		
        echo ("<script LANGUAGE='JavaScript'>
        window. alert('date can not be empty');
        window. location. href='updatePet.php';
        </script>");
	}
    if ((empty($breed))) 
    {
		
        echo ("<script LANGUAGE='JavaScript'>
        window. alert('breed can not be empty');
        window. location. href='updatePet.php';
        </script>");
	}


else{
       
        $query2 = "SELECT * FROM  Pet where id= '$id'";

if($_FILES['photo']['size']>0)  {
    $phptol2=$_FILES['photo']['tmp_name'];
    $phptol2=addslashes(file_get_contents( $phptol2));  


if( mysqli_query($db2,"UPDATE  pet set gender='  $gender',   photopet ='   $phptol2' , 	status_=' $status',vaccination_list='$vaccination',birth_date=' $birth_ ',fullname='   $name',breed='$breed',medical_history='$medical'  where  id='$id'"))
?>

<script type="text/javascript" >
    alert("Pet is updated seccessfully!");
    location="view2.php";
    </script>
    <?php
}//oooo
else{
   

    $name = $_POST['name'];
        $gender = $_POST['gender'];
        $status =$_POST['stat'];
        $vaccination_ = $_POST['vac'];
        $birth_ = $_POST['date'];
        $breed = $_POST['breed'];
        $medical = $_POST['med'];

        if( mysqli_query($db2,"UPDATE  pet set gender='  $gender', 	status_=' $status',vaccination_list='$vaccination_',birth_date=' $birth_ ',fullname='   $name',breed='$breed',medical_history='$medical'  where  id='$id'"))

        ?>

        <script type="text/javascript">
            alert("Pet is updated seccessfully!");
            location="view2.php";
            </script>
            <?php

}

}}

/////
   
        
  
    mysqli_close($db2);
?>


<<<<<<< HEAD
=======


>>>>>>> 55ad8454f9b3048dd8b5d1e21ebd8316890aa629

<script src="myformValid.php"></script>