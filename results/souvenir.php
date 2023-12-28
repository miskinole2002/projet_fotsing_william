<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php  //var_dump( $_POST) ;
          
require_once('../functions/usercrud.php');
require_once('../functions/function.php');
require_once('../utils/connexion.php');
require_once('../functions/validation.php');
 session_start();

//var_dump($search);





if (isset($_POST)){

$user=$_POST['search'];

$search=userProductExistByName($user);


    unset($_SESSION['errorSearch']);
    $fieldExist=true;
   
    if($search['exist']==false) {
    
        $_SESSION['errorSearch'] =[
           'search' => $search['message'],
           ];
           $url='../pages/accueil1.php';
           header('location:'.$url);

   }
   if($search['exist']==true){
        
        $searchProduct=afficherProductSearch($user);
       // var_dump($searchProduct);?>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php  foreach($searchProduct as $product){ ?>
  
    <div class="col">
          <div class="card shadow-sm" style="width: 18rem;">
            
            <img src="<?php echo $product[4] ?>" class="card-img-top" alt="...">
            <text x="50%" y="50%" fill="#eceeef" dy=".3em"> <H3><?php echo $product[1] ?></H3></text>
            <div class="card-body">
              <p class="card-text"><?php echo $product[5] ?> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">acheter</button> -->
                  <form action="../pages/accueil1.php" method="post">
                  <input type="text" hidden name="action" value="addToCart">


                    <input type="text" hidden name="id" value="<?php echo $product[0] ?>">
                    <!-- <input type="text" name="quantity"> -->
                   
                    <button type="submit" class="btn btn-primary">Ajouter au panier</button>

                  
                </form>

                 <!-- <a href="#" class="card-link"><button type="submit" class="btn btn-primary">Ajouter au panier</button></a> -->
                </div>
                <small class="text-body-secondary"><?php echo $product[3] ?> $CAD</small>
              </div>
            </div>
          </div>
        </div>
<?php } ?>
    </div>
    </div>
</div>
        
           
   
    
    
    
    <?php }
          
      else{    
      ?> 
      <?php }} ?>
      <a class="nav-link active" aria-current="page" href="../pages/accueil1.php"><button type="button" class="btn btn-primary">boutique</button></a>