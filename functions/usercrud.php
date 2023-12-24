<?php
function createUser($data)
{

    var_dump("Je suis dans create user");
    
    global $conn;
    
    $query = "INSERT INTO user VALUES (NULL,?,?,?,?,?,'','','',3);";

$stmt = mysqli_prepare($conn, $query);
var_dump($stmt);
printf("Error message: %s\n", mysqli_error($conn));    

if ($stmt) {
        
        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $data['user_name'],
            $data['email'],
            $data['pwd'],
            $data['fname'], 
            $data['lname']
        );

        $result = mysqli_stmt_execute($stmt);
        
          return 'bien';
    }else{return 'mal';}
}
// recuperer tout les valeurs dans un tableau
function getAllUser( )
{
    global $conn;
// Todo : changer pour requete preparee
//SELECT * FROM user WHERE user_name = 'william2002';
    $query = "SELECT * FROM user  ;";
    $result = mysqli_query($conn, $query);
    // avec fetch row : tableau indexé
    $data = mysqli_fetch_all($result);
    return $data;
}
function getUserByUsername( $user_name)
{
    global $conn;
// Todo : changer pour requete preparee
//SELECT * FROM user WHERE user_name = 'william2002';
    $query = "SELECT * FROM user WHERE user_name = '$user_name' ;";
    $result = mysqli_query($conn, $query);
    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}
function updateUser($data){
    global $conn;
    $query= "UPDATE user SET token=? WHERE user_name=?";
    if($stmt=mysqli_prepare($conn, $query)) {
        //lecture des marqueurs 
        mysqli_stmt_bind_param($stmt,"ss", 
       
        $data["token"],
         $data["user_name"]
        );
    
    // execution de la requete 
    $result=mysqli_stmt_execute($stmt);
    echo "<br>";
    echo "modification reussie";
    var_dump($result);
    echo "<br>";
    }}

    function createProduct($data){
        global $conn;
        $query="INSERT into product VALUES(NUll,?,?,?,?,?)";
        $stmt= mysqli_prepare($conn,$query);
        var_dump($stmt);
printf("Error message: %s\n", mysqli_error($conn)); 
        if($stmt){

            mysqli_stmt_bind_param(
                $stmt,
                "sidss",
                $data['name'],
                $data['quantity'],
                $data['price'],
                $data['img_url'],
                $data['description']
            );
        $result = mysqli_stmt_execute($stmt);
        }
        return $result;
  }
  // fonction pour supprimer un produit
  function deleteProduct($id){

    global $conn;
    $query= "DELETE FROM product WHERE id=?";
    if($stmt=mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param(
            $stmt,
            "i",
            $id);


// execution de la requete 
$result=mysqli_stmt_execute($stmt);
echo "<br>";
echo "supression  reussie";
var_dump($result);
echo "<br>";
}
return $result;
}
 function afficherProduct()
 {
    
    global $conn;

    $query = "SELECT * FROM product ORDER BY id DESC ";
    $result = mysqli_query($conn, $query);
    // avec fetch row : tableau indexé
    $data = mysqli_fetch_all($result);
    return $data;
 }
 //function pour update un produit
 function updateProduct($data){
    global $conn;
    $query= "UPDATE product SET name=?,quantity=?,price=?,img_url=?,description=? WHERE id=?";
    if($stmt=mysqli_prepare($conn, $query)) {
        //lecture des marqueurs 
        mysqli_stmt_bind_param($stmt,"sidssi", 
       
        $data["name"],
         $data["quantity"],
         $data["price"],
         $data["img_url"],
         $data["description"],
         $data["id"]

         
         


        );
    
    // execution de la requete 
    $result=mysqli_stmt_execute($stmt);
    echo "<br>";
    echo "modification reussie";
    var_dump($result);
    echo "<br>";
    }
    return $result;
}
//function pour recuperrer un produit dans la db
function getProductById( $id)
{
    global $conn;
// Todo : changer pour requete preparee
//SELECT * FROM user WHERE user_name = 'william2002';
    $query = "SELECT * FROM product WHERE id = '$id' ;";
    $result = mysqli_query($conn, $query);
    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function getProductByIdPannier($id)
{
    global $conn;
// Todo : changer pour requete preparee
//SELECT * FROM user WHERE user_name = 'william2002';
    $query = "SELECT * FROM product WHERE id = '$id' ;";
    $result = mysqli_query($conn, $query);
    // avec fetch row : tableau indexé
    $data = mysqli_fetch_assoc($result);
    return $data;
}

function updateUserByAdmin($data){
    global $conn;
    $query= "UPDATE user SET role_id=? WHERE user_name=?";
    if($stmt=mysqli_prepare($conn, $query)) {
        //lecture des marqueurs 
        mysqli_stmt_bind_param($stmt,"is", 
        
        
        $data["role_id"],
        $data["user_name"] );
    
    // execution de la requete 
    $result=mysqli_stmt_execute($stmt);
    echo "<br>";
    echo "modification reussie";
    var_dump($result);
    echo "<br>";
    }
    
    return $result;
    
    }

    function deleteUser($user_name){
    
        global $conn;
        $query= "DELETE FROM user WHERE user_name=?";
        if($stmt=mysqli_prepare($conn, $query)) {
            mysqli_stmt_bind_param($stmt,
            "s",
            $user_name);
    
    
    // execution de la requete 
    $result=mysqli_stmt_execute($stmt);
    echo "<br>";
    echo "supression  reussie";
    var_dump($result);
    echo "<br>";
    }
    return $result;
    }

    //function affiche les produits du filtre 
    function afficherProductSearch($name)
 {
    
    global $conn;

    $query = "SELECT * FROM product where name='$name';";
    $result = mysqli_query($conn, $query);
    // avec fetch row : tableau indexé
    $data = mysqli_fetch_all($result);
    return $data;
 }
 //pour recuperer par le nom 
 function getProductByName( $name)
 {
     global $conn;  
 // Todo : changer pour requete preparee
 //SELECT * FROM user WHERE user_name = 'william2002';
     $query = "SELECT * FROM product WHERE name = '$name' ;";
     $result = mysqli_query($conn, $query);
     // avec fetch row : tableau indexé
     $data = mysqli_fetch_all($result);
     return $data;
 }

 // supprimer un produit dans le panier 



 //pour modifier directement une adresse
 function createAddress($data)
{
    global $conn;
    var_dump($conn);
    $query = "INSERT INTO address VALUES (NULL,?,?,?,?,?,?);";
   // $query="INSERT INTO address VALUES(NULL,?,?,?,?,?,?);";
    var_dump($query);
printf("Error message: %s\n", mysqli_error($conn));    
    if($stmt=mysqli_prepare($conn,$query))
    { var_dump($stmt);
       mysqli_stmt_bind_param($stmt,"sissss",
       $data["street_name"],
       $data["street_nb"],
       $data["country"],
       $data["city"],
       $data["zipcode"],
       $data["province"],

    );
        $william=mysqli_stmt_execute($stmt);
        return $william;
    }
    else{
        return"mal";

    }
    
}
?>