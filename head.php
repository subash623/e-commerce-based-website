<?php
$stat = "";
$statlink = "";
session_start();
if(empty($_SESSION["username"])){
  $_SESSION["username"] = "Guest";
  $stat = "Login";
  $statlink = "login.php";
}
else{
  $stat = "Logout";
  $statlink = "logout.php";
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
if(empty($_SESSION["username"])){
  $usernamemain = "Guest";
}
else{
  $usernamemain = $_SESSION["username"];
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="main.css">
    <div class="home">
    <div class="nav">
        <div class="logo">
        <p class="name">HamroMart.com</p>
        </div>
        <div class="search">
        <form action="search.php" method="$_GET">
            <input type="text" placeholder=" Search..." name="name" class="boxsearch">
            <button type="submit"class="searchbutton"><img src="accet/search.png" alt="search" height="50px"> </button>
            </form>
        </div>
        <div class="user">
            <img src="accet/profile.png" alt="user" height="40px">
        </div>
        <p class="usertext">
                <?php echo $_SESSION["username"]; ?>
        </p>
         <img src="accet/cart.png" alt="cart" class="cartimg" height="40px">
         <a href="cartpanel/carddatashow.php" class="cartre">Add Cart</a>
       
        <br>
        </div>
    </div>
<div class="navbar">
  <a href="index.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Mobile Phones
     
    </button>
    <div class="dropdown-content">
      <a href="AMI.php">Mi</a>
      <a href="Asamsung.php">Samsung</a>
      <a href="AApple.php">Apple</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Lifestyle 
     
    </button>
    <div class="dropdown-content">
      <a href="Aclock.php">Wallclock</a>
      <a href="Acycle.php">Bicycle</a>
      <a href="Astudy.php">Study Table</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">
      Books
    </button>
    <div class="dropdown-content">
      <a href="Ahistory.php">History</a>
      <a href="Areligion.php">Religious</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">
      Show ALL
    </button>
    <div class="dropdown-content">
      <a href="priceall.php">By price</a>
      <a href="all.php">By name</a>
    </div>
  </div>
  <a href=<?php echo '"'.$statlink.'""'; ?> style="float: right; padding-right:60px;" ><?php echo $stat;?></a>
  <br>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script>
    
</head>
