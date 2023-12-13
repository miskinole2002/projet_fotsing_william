<?php 
session_start();
$userName='';
if(isset($_SESSION['form_signup']['user_name']))
{
    $userName=$_SESSION['form_signup']['user_name'];
}
$name='';
if(isset($_SESSION['form_signup']['name']))
{
    $name=$_SESSION['form_signup']['name'];
}
$fname='';
if(isset($_SESSION['form_signup']['name']))
{
    $fname=$_SESSION['form_signup']['first_name'];
}
$email='';
if(isset($_SESSION['form_signup']['email']))
{
    $email=$_SESSION['form_signup']['email'];
}
$pwd='';
if(isset($_SESSION['form_signup']['pwd']))
{
    $pwd=$_SESSION['form_signup']['pwd'];
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/register.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<header>
    <h2 class="logo">logo</h2>
    <nav class="navigation">
        <a href="#">home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">contact</a>
        <a href="./login.php"><button class="btnLogin-popup">login</button></a>



    </nav>
</header>
<div class="wrapper">
    <div class="form-box-login">
        <h2>enregistrement</h2>
<form action="../results/resultSignUp.php" method="post">
<div>


<input type="text" name="user_name" id="user_name" value=" <?php echo $userName ?> "> 
<i class='bx bxs-user'></i>
<p style="color: red; font-size: 0.8rem;"> <?php echo  isset($_SESSION['errors']['user_name'])? $_SESSION['errors']['user_name'] : '' ?></p>


</div>
<div>
<label for="name">nom</label>
<input type="text" name="name" id="name" value="<?php echo $name ?>"> 
<p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['errors']['name'])? $_SESSION['errors']['name'] : '' 

?></p>


</div>
<div>
<label for="first_name">prenom</label>
<input type="text" name="first_name" id="first_name" value="<?php echo $fname ?>"> 
<p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['errors']['lname'])? $_SESSION['errors']['lname'] : '' ?></p>

</div>
<div>
<label for="email">Email</label>
<input type="text" name="email" id="email" value="<?php echo $email ?>"> 
<p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['errors']['email'])? $_SESSION['errors']['email'] : '' ?></p>


</div>
<div>
<label for="pwd">mot de passe </label>
<input type="password" name="pwd" id="pwd" value="<?php echo $pwd ?>"> 
<p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['errors']['pwd'])? $_SESSION['errors']['pwd'] : '' ?></p>


</div>
<div>
    <button type="submit"> enregistrer</button>
</div>
</form>
</div>
</div>

    
</body>
</html>









