<?php 

require_once('../functions/usercrud.php');
require_once('../functions/function.php');
require_once('../utils/connexion.php');
require_once('../functions/validation.php');
session_start();
var_dump($_POST);
$user=$_POST["user_name"];
$userName=userNameExist($_POST["user_name"]);

var_dump($userName);





if (isset($_POST)){
    unset($_SESSION['error']);
    $fieldExist=true;
    if(empty($_POST['user_name'] )){

     $url='../pages/deleteUser.php';
        header('location:'.$url);
    }if($userName['exist']==false) {
    
        $_SESSION['error'] =[
           'user_name' => $userName['message'],
           ];
           $url='../pages/deleteUser.php';
           header('location:'.$url);

   }
    else{
        
       $userDelete=deleteUser($user);
           
   }
    
    
    
    }



?>