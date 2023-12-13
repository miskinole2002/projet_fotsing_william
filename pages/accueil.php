<?php 
session_start();
//var_dump($_SESSION['authen']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../styles/register.css" />
   


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<header>
    <h2 class="logo">logo</h2>
    <nav class="navigation">
        <a href="#">home</a>
        <a href="#">Produit</a>
    <?php  if($_SESSION['authen']['role_id']==2){?>
        <a href="./gestionProduit.php">gestion produit</a><?php } else{

        }?>
        <a href="#">contact</a>
        <a href="#"><button class="btnLogin-popup">profile</button></a>



    </nav>
</header>





    
</body>
</html>









