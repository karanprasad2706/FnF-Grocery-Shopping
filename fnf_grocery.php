<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="css/style1.css">
     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width-device-widht, initial-scale=1.0">
  <title>GROCERY</title>
</head>
<body>
    <section class="menu">
    <div class="nav">
        <div class="logo"><h1>FnF<b>Grocery</b></h1></div>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                
                
            </ul> 
            <div class="buttons">
                <button class="login" id="loginButton">LogIn</button><br><br>
                
                <div class="buttons">
                <button  class="register" id="registerButton">Register</button>
                </div>  
            </div>  
    </div>

    </section>
    <section class="grid">
        <div class="content">
            <div class="content-left">
                <div class="info">
                    <h2>Order Your Best<br>Grocery Items Anytime 24/7</h2>
                    <p>Hey, Our delicious Grocery food is waiting for you,<br>
                    We are always near  to you with fresh item of Grocery</p>
                </div>
                <button>Explore Items</button>
            </div>
            <div class="content-right">
                   <!-- Photo for Roatet--> 
                     <img src="image/image4.png"  alt="">  
            </div>
        </div>





<?php include 'footer.php'; ?>
<?php include 'footer2.php'; ?>



<script src="js/script.js"></script>

</body>
</html>


