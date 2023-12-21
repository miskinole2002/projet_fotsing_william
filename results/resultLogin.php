<?php 
require_once('../functions/usercrud.php');
require_once('../functions/function.php');
require_once('../utils/connexion.php');
require_once('../functions/validation.php');
session_start();
var_dump($_POST);
$userName=userNameExist($_POST["user_name"]);
var_dump($userName);





if (isset($_POST)){
    unset($_SESSION['errorLogin']);
    $fieldExist=true;
    if(empty($_POST['user_name'] and $_POST['pwd'])){

     $url='../pages/login.php';
        header('location:'.$url);
    }if($userName['exist']==false) {
    
        $fieldExist=false;
   }if($fieldExist==true){
        $userData= getUserByUsername( $_POST['user_name']);
    
        if($userData){
            $enteredPwdEncoded=encodePwd($_POST['pwd']);
            if($userData['pwd']==$enteredPwdEncoded){
                $token = hash('sha256', random_bytes(32));
                echo '</br></br>Mon token : </br>';
                
                var_dump($token);
                //enregistrer le token en Session et dans la DB

                echo "C'est le bon mdp ";
                $data=[
                    'user_name'=>$userData['user_name'],
                    'token'=>$token
                ];
                $updateToken=updateUser($data);

                $_SESSION['authen']=[
                    'id'=>$userData['id'],
                    'role_id'=>$userData['role_id'],
                    'token'=>$token,
                    

                ];
                var_dump($_SESSION['authen']);

                    
                if(($_SESSION['authen']['role_id']==2)or($_SESSION['authen']['role_id']==3))
                    {
                        //require_once('');
                        $url='../pages/accueil1.php';
                        header('location:'.$url);
                    
                    }
              }else { 
                
                $_SESSION['errorLogin'] =[
                    'user_name' => $userName['message'],
                    'pwd' => 'mot de passe incorrect '];
                    
                    $url='../pages/login.php';
                    header('location:'.$url);

            // echo "C'est pas  le bon mdp ";
            
            }
        }
    }else{
         $_SESSION['errorLogin'] =[
            'user_name' => $userName['message'],
             'pwd' => 'mot de passe incorrect '];
        
            $url='../pages/login.php';
            header('location:'.$url);
    }
} else{
   
    $url='../pages/login.php';
    header('location:'.$url);
}






?>