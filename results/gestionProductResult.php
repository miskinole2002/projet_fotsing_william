<?php 
require_once('../functions/usercrud.php');
require_once('../utils/connexion.php');
if(isset($_POST)){
    if(empty($_POST['name'] and $_POST['quantity']and $_POST['price'] and $_POST['img_url'] and $_POST['description'])){

        $url='../pages/gestionProduit.php';
        header('location:'.$url);
    }else{

        $data=[
            'name'=>$_POST['name'],
            'quantity'=>$_POST['quantity'],
            'price'=>$_POST['price'],
            'img_url'=>$_POST['img_url'],
            'description'=>$_POST['description'],

        ];
            
        var_dump($data);
        $createProduct= createProduct($data);

       $url='../pages/accueil1.php';
        header('location:'.$url);
 }

 

} 
?>