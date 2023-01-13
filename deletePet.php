<?php
	 
     
    if(!isset($_GET['id'] )){
        die('id not provided');
    
    }  

    $id=$_GET['id'];

    $host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");

$r=	mysqli_query($db2,"DELETE from  Pet where  id='$id'");
?>
<script type="text/javascript">
alert("Pet is deleted seccessfully!");
location="view2.php";
</script>
<?php

mysqli_close($db2);
?>