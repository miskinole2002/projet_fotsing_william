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



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../styles/register.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   

<!-- Custom styles for this template -->
<link href="sign-in.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">



    


<main class="form-signin w-100 m-auto">
   <header>
     <nav class="navbar navbar-expand-lg bg-body-tertiary" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
   <form method="post" action="../pages/accueil1.php">
            <input type="hidden"name="img"  >
        <button type="submit" class="btn btn-primary">home</button>
        </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./login.php"> <button class="btn btn-primary">connexion</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>
</header>
  <form action="../results/resultSignUp.php" method="post">
    <img class="mb-4" src="../styles/DUSSOLIER.png" alt="" width="150" height="100">
   <center><h1 class="h3 mb-3 fw-normal">plesae register in</h1></center> 

    <div class="form-floating" >
        
     <i class='bx bxs-user'></i> <input type="text" class="form-control" id="user_name" placeholder="Dussolier123" name="user_name" value=" <?php echo $userName ?>">
     <p style="color: red; font-size: 0.8rem;"> <?php echo  isset($_SESSION['errors']['user_name'])? $_SESSION['errors']['user_name'] : '' ?></p>
      <label for="user_name">user_name</label>
    </div>
    
    <div class="form-floating">
      <input type="text"   class="form-control me-2" id="name" placeholder="Dussolier123" name="name" value=" <?php echo $name ?>">
    
    <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['errors']['name'])? $_SESSION['errors']['name'] : '' ?></p>
      <label for="name">name</label>
    </div>
    
    <div class="form-floating">
      <input type="text" class="form-control" id="first_name" placeholder="Dussolier123" name="first_name" value="<?php echo $fname ?>">
 
    <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['errors']['lname'])? $_SESSION['errors']['lname'] : '' ?></p>
      <label for="first_name">fisrt name</label>
    </div>
    
    <div class="form-floating">
      <input type="text" class="form-control" id="email" placeholder="Dussolier123" name="email" value="<?php echo $email ?>">
      
    <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['errors']['email'])? $_SESSION['errors']['email'] : '' ?></p>
      <label for="email">email</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd" value=" <?php echo $pwd ?>">

    <p style="color: red; font-size: 0.8rem;"><?php echo isset($_SESSION['errors']['pwd'])? $_SESSION['errors']['pwd'] : '' ?></p>

      <label for="pwd">Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>
</div>


    
</body>
</html>









