<?php
// echo $_POST["topic"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hamromart";
session_start();

if($_SESSION["username"] == "Guest"){
    echo '<script> window.location.replace("http://localhost/hamromart/login.php"); </script>';
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// print_r($_SESSION);
//show in page
?>
<?php
$stat = "";
$statlink = "";
// session_start();
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
// print_r($_SESSION);
// echo "<p class='textadmin'> ID here:".$_SESSION['username']."</p>";
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
    <title>Cart</title>

    <link rel="stylesheet" href="../main.css">
    <div class="home">
    <div class="nav">
        <div class="logo">
        <p class="name">HamroMart.com</p>
       </div>
        <div class="search">
        <form action="search.php" method="$_GET">
            <input type="text" placeholder=" Search.." name="name" class="boxsearch">
            <button type="submit"class="searchbutton"><img src="../accet/search.png" alt="search" height="50px"> </button>
            </form>
        </div>
        <div class="user">
            <img src="../accet/profile.png" alt="user" height="40px">
        </div>
        <p class="usertext">
                <?php echo $_SESSION["username"]; ?>

        </p>
         <img src="../accet/cart.png" alt="cart" class="cartimg" height="40px">
         <a href="#" class="cartre">Add Cart</a>
       
        <br>
        </div>
    </div>
    <div class="navbar">
  <a href="http://localhost/hamromart/index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Mobile Phones
 
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/hamromart/AMI.php">Mi</a>
      <a href="http://localhost/hamromart/Asamsung.php">Samsung</a>
      <a href="http://localhost/hamromart/AApple.php">Apple</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Lifestyle 
     
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/hamromart/Aclock.php">Wallclock</a>
      <a href="http://localhost/hamromart/Acycle.php">Bicycle</a>
      <a href="http://localhost/hamromart/Astudy.php">Study Table</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">
      Books
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/hamromart/Ahistory.php">History</a>
      <a href="http://localhost/hamromart/Areligion.php">Religious</a>
    </div>
  </div>
 <br>
</div>
</head>
<body>
<?php
$tempimg = "";
$tempprice = "";
$tempname = "";
 $sql = "SELECT * FROM product WHERE prodid = '".$_POST['topic']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
   $tempname = $row['name'];
   $tempprice = $row['price'];
   $tempimg = "../".$row['imgloco'];
  }
  
} else {
  echo "0 results";
} 

?>
<div class="container">
    <div class="imgshowpart">
<img src=<?php echo '"'.$tempimg.'"'; ?> alt="Img here" height="400px">
<div class="cartshow">
    <p class="itemname"><?php echo $tempname; ?></p>
</div>
</div>
<div class="datacollect">
    <p class="itemname">Per 1 Rs: <?php echo $tempprice ?></p>
    <form action="addercart.php" method="post">
        <input type="hidden" name="nameproduct" value=<?php echo '"'.$tempname.'"' ?>><br>
        <input type="hidden" name="perprice" value=<?php echo '"'.$tempprice.'"' ?>><br>
        <input type="text" class="itembox" name="number"><br>
        <input type="submit" name="submit" value="Add" class="addbtn">
    </form>
    
</div>
</div>
<footer>
      <div class="bottom">
        <div class="section2">
            <p class="titleboot">
                About Us
            </p>
            <p class="infoboot">
                About Hamro Mart
            </p>
            <p class="infoboot">
                Return,Refund and Privacy Policy
            </p>
            
        </div>
        <div class="section">
            <p class="titleboot">
                Payment Method
            <br><br>
            <p class="imgboot">
                <a href="https://login.connectips.com/">
                <img src="../accet/connect.png" height="20px" class="imgboot">Connect Ips</a>
                <br>
                <br>
            </p>
            <p class="imgboot">
            <a href="https://esewa.com.np/#/home">
                <img src="../accet/esewa.png" height="20px" class="imgboot">E-Sewa</a>
                <br>
                <br>
            </p>
            <p class="imgboot">
            <a href="https://khalti.com/login/#/">
                <img src="../accet/khalti.png" height="20px" class="imgboot">Khalti</a>
            </p>
          </div>
        <div class="section">
            <p class="titleboot">
                Follow us on
            </p>
            <p class="infoboot">
                @Hamromart
            </p>
            <br>
            <br>
            <p class="imgboot">
                <a href="https://www.facebook.com/">
                <img src="../accet/facebok.png" height="20px" class="imgboot">
                </a>
            </p>
            <p class="imgboot">
            <a href="https://www.instagram.com/">
                <img src="../accet/insta.png" height="20px" class="imgboot">
            </a>
            </p>
            <p class="imgboot">
            <a href="https://youtube.com/">
                <img src="../accet/youtube.png" height="20px" class="imgboot"</a>
            </p>
        </div>
        <div class="section1">
            <p class="titleboot">
                Customer Support
            </p>
            <p class="infoboot">
                Call us at 015200605
            </p>
            <p class="infoboot">
                Hamromart Customer Service Hours:
            </p>
            <p class="infoboot">
                Sunday-Saturday: 9 AM to 5 PM (Call Center)
            </p>
            <p class="infoboot">
                Email:support@hamromart.com
            </p>
        </div>
    </div>
    <center>
        <div class="footer">
            <p class="forfoot">
            HamroMart Pvt Ltd. Maitidevi,Kathmandu
            </p>
        </div>
    </center>
</footer>
</body>
</html>

