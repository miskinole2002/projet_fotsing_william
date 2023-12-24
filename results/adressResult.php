<?php





require_once('../functions/function.php');
require_once('../functions/usercrud.php');
require_once('../functions/validation.php');
require_once('../utils/connexion.php');
session_start();

$_SESSION['street_name']=$_POST["street_name"];
$_SESSION['street_nb']=$_POST["street_nb"];
$_SESSION['city']=$_POST["city"];
$_SESSION['province']=$_POST["province"];
$_SESSION['zip_code']=$_POST["zip_code"];
$_SESSION['country']=$_POST["country"];


var_dump($_POST);




$streetName= streetIsValid($_POST["street_name"]);
$streetNb=street_nbIsValid($_POST["street_nb"]);
$city= cityIsValid($_POST["city"]);
$province=provinceIsValid($_POST["province"]);
$zip_code=zipcodeIsValid($_POST["zip_code"]);
$country=countryIsValid($_POST["country"]);


var_dump($streetName);
var_dump($streetNb);
var_dump($city);
var_dump($province);
var_dump($zip_code);
var_dump($country);



//var_dump($userName);

if(isset($_POST))
{
    $_SESSION['form_signup']=$_POST;

    unset($_SESSION['error']);
    $fieldValidation=true;

    if (empty($_POST["street_name"] and $_POST["street_nb"] and $_POST["city"] and $_POST["province"] and $_POST["zip_code"]and $_POST["country"]))
    {
        $url='../pages/adress.php';
        header('location:'.$url);
    }
    if($streetName["is valid"]== false)
    {
        $fieldValidation= false;
    }if($streetNb["is valid"]== false)
    {
        $fieldValidation= false;
        
        
    }if($city["is valid"]==false)
    {
        $fieldValidation= false;
        

    }if($province["is valid"]==false)
    {
        $fieldValidation= false;
        
    }
    if($zip_code["is valid"]==false)
    {
        
        $fieldValidation= false;
        
        
    } if($country["is valid"]==false)
    {
        
        $fieldValidation= false;
        
        
    }
    
    if($fieldValidation==true )
    {

        var_dump("ma validation est ok");
     
        $data=[
            
            "street_name"=>$_POST["street_name"],
            "street_nb"=>$_POST["street_nb"],
            "city"=> $_POST['city'],
            "province"=>$_POST["province"],
            "zip_code"=>$_POST["zip_code"],
          "country"=> $_POST['country'], 
          
        ];

        $newAdress=createAddress($data);

        var_dump($newAdress);
        // $url='../pages/adress.php';
        // header('location:'.$url);
    } 
   /*
    else
    {

        var_dump("ma validation est fausse");

        $_SESSION['error'] =[
            'street_name' => $streetName["message"],
            'street_nb'=> $streetNb["message"] ,
            'city'=>  $city["message"] ,
            'country' => $country["message"],
            'zip_code' => $zip_code["message"],
            'province' => $province["message"]


        ];
        var_dump($_SESSION['errors'] );
        $url='../pages/adress.php';
        header('location:'.$url);
    };*/

} 
else
{
$url='../pages/adress.php';
header('location:'.$url);
}

?>

