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
      <img src="../styles/img.jpg" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
       <h2 class="logo">Dussollier</h2>
    </a>
  </div>
    
    <!-- <nav class="navigation">
    <a href="./deleteProduct.php"><button type="submit" class="btn btn-primary">Cliquer ici pour supprimer un produit</button></a>
    <a href="../pages/updateProduct.php"><button type="submit" class="btn btn-primary">Cliquer ici pour modifier un produit</button></a> -->
        <!-- <a href="">home</a>
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
          <a class="nav-link active" aria-current="page" href="../pages/accueil1.php"><button type="button" class="btn btn-primary">Home</button></a>
         
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./deleteProduct.php"><button type="submit" class="btn btn-primary">Cliquer ici pour supprimer un produit</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/updateProduct.php"><button type="submit" class="btn btn-primary">Cliquer ici pour modifier un produit</button></a>
        </li>
        
       
      </ul>
      
    </div>
  </div>
</nav>
</header>
<div class="wrapper">
    <div class="form-box-login">
        <center><h2>ajouter un poduit</h2></center>
        <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<form action="../results/gestionProductResult.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">quantite</label>
    <input type="text" class="form-control" id="quantity" name="quantity" >
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">prix</label>
    <input type="text" class="form-control" id="price" name="price"  >
  </div>
  <div class="mb-3">
    <label for="img_url" class="form-label">image_url</label>
    <input type="text" class="form-control" id="img_url"name="img_url"  >
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    <input type="text" class="form-control" id="description" name="description" >
  </div>

  <button type="submit" class="btn btn-primary">Ajouter un nouveau produit</button>
  <p></p>
  <p></p>
  <p></p>
 
 
</form> 
<!-- <div>
 <a href="./deleteProduct.php"><button type="submit" class="btn btn-primary">Cliquer ici pour supprimer un produit</button></a>   
</div> -->
    </div>
    <div>

    </div>
    
</body>
</html>
 