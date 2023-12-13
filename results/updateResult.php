<?php 
session_start();
require_once('../functions/function.php');
require_once('../functions/validation.php');
require_once('../functions/usercrud.php');
require_once('../utils/connexion.php');
$i=$_POST['id'];
$productId=userProductExist($i);
$fieldExist=true;

if(isset($_POST)){
     unset($_SESSION['errorUpdate']);

    if(empty($_POST['id'] )){//and $_POST['name'] and $_POST['quantity']and $_POST['price'] and $_POST['img_url'] and $_POST['description']

        $url='../pages/upadeProduct.php';
        header('location:'.$url);
    }if($productId['exist']==false) {
        $_SESSION['errorUpdate'] =[
            'id' => $productId['message'],
           ];
            
            $url='../pages/updateProduct.php';
            header('location:'.$url);
    
    }else{

        $data=[
            'id'=>$_POST['id'],
            'name'=>$_POST['name'],
            'quantity'=>$_POST['quantity'],
            'price'=>$_POST['price'],
            'img_url'=>$_POST['img_url'],
            'description'=>$_POST['description'],

        ];
       $update=updateProduct($data);
    
    }
    
    
    
}




?> 