<?php

$server='localhost';
$userName="root";
$userPassword= "";
$db="ecom1_project";
$conn=mysqli_connect($server,$userName,$userPassword,$db); 
if($conn){
    global $conn;
    ?> 
     <?php
}else{?>
    <h1> <center>connetion a la base de donnee <?php echo"$db" ?> Echouee</center> </h1>
<?php }
// <h1> <center>connetion a la base de donnee <?php echo"$db" 

?>