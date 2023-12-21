<?php 
require_once('../functions/usercrud.php');
require_once('../functions/function.php');
require_once('../utils/connexion.php');
require_once('../functions/validation.php');
session_start();

//var_dump($_SESSION['panier']);
$panier=$_SESSION['panier'];
$myProduct=afficherProduct();
//var_dump($myProduct);
 if(isset($_POST['id'])){

var_dump($_POST['id']);
$id=$_POST['id'];
 unset($_SESSION['panier'][$id]);
}





?>







<?php //session_start();
require_once('../utils/connexion.php');
require_once('../functions/usercrud.php');
//$myProduct=getProductByIdPannier($i);
//var_dump($myProduct);

?>
<?php if(!empty($_SESSION['panier'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="../styles/register.css" /> -->
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
</head>
<body>

<header>
   
    <div class="container-fluid">
      
    <a class="navbar-brand" href="#">
      <img src="../styles/DUSSOLIER.png" alt="Logo" width="150" height="120" class="d-inline-block align-text-top">
       <h2 class="logo">Dussollier</h2>
    </a>
  </div>
    <!-- <nav class="navigation">
    <a href="./gestionProduit.php"><button type="submit" class="btn btn-primary">gestion de produit</button></a>
    <a href="./updateProduct.php"><button type="submit" class="btn btn-primary">Cliquer ici pour modifier un produit</button></a> -->
        <!-- <a href=""></a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">contact</a> -->
        <!-- <a href="../pages/accueil1.php"><button class="btnLogin-popup">home</button></a> -->



    <!-- </nav> -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pages/accueil1.php"><button type="button" class="btn btn-primary">boutique</button></a>
        </li>

      </ul>
      
    </div>
  </div>
</nav>
</header>
<div class="wrapper">
    <div class="form-box-login">
      <center><h2>bienvenue dans votre panier</h2></center>  
        <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

    </div>
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> 

    <table class="table">
    
  <thead>
    <tr>
      
      <th scope="col">name</th>
      <th scope="col">quantity</th>
      <th scope="col">image</th>
      <th scope="col">Total price</th>
      <th scope="col">supprimer</th>


    </tr>
  </thead>
  <tbody>
    
    <tr>

      <?php 
       
      foreach( $panier as $key=>$product) {
       $pannierID= getProductByIdPannier($key);
      
       //var_dump($pannierID);
      
        ;?>

      <td><?php echo $pannierID['name'] //$key $product[1]?></td>
      <td><?php echo $product?></td>
     
      <td><img  src="<?php echo  $pannierID['img_url']  ?> " class="card-img-top" alt="..."  style="width: 9rem;"></td>
       <td><?php  echo  $pannierID['price']*$product //$product[3]?>$ CAD</td>
        <form action="" method="post">
        <input type="text" hidden name="id" value="<?php echo $key ?>">
      <td> <button type="submit" class="btn btn-light"> <img  src="../styles/supprimer.png"  class="card-img-top" alt="..."  style="width: 3rem;"></button></td>

        </form>
        
    
     </tr> 
    
  </tbody> <?php

  
}?>
 

</table>
<button type="button" class="btn btn-info">payer</button>
    </div>
    
    <div>

    </div>
    <?php } else
  {
    echo 'le panier est vide';
      $url='../pages/accueil1.php';
    header('location:'.$url);

  }?>
    
</body>
</html>
