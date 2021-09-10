<?php $title = "Home Page";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hamromart";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<?php include 'head.php';?>
 <body>
 <link rel="stylesheet" href="main.css">
    <p class="showname">
        Top Sell Phones 
    </p>
    <div class="showcase">
    <?php
    $showprodd = "select * from product where type='AMI'";
    $result = $conn->query($showprodd);
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
        $i++;
        if($i > 5){
            break;
        }
        echo "<div class='productbox'>";
        echo "<img src=".$row['imgloco']." height='200px'>";
        echo "<p class='productname' >".$row["name"]."</p>";
        echo "<p class='productprice'> Rs ".$row["price"]."</p>";
        echo '<center><form action="cartpanel/addcartconf.php" method="post"><input type = "hidden" name = "topic" value = "'.$row["prodid"].'" /><input type="submit" class="cartbtn" value="Add to Cart" name="submit"></form></center>';
        echo '</div>';
        }
        
      } else {
        echo "0 results";
      }
    ?>

    </div>
    <p class="showname">
        Top Sell Lifestyle
    </p>
    <div class="showcasemerch">
    <?php
    $showprodd = "select * from product where type='Aclock'";
    $result = $conn->query($showprodd);
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
        $i++;
        if($i > 5){
            break;
        }
        echo "<div class='productbox'>";
        echo "<img src=".$row['imgloco']." height='200px'>";
        echo "<p class='productname' >".$row["name"]."</p>";
        echo "<p class='productprice'> Rs ".$row["price"]."</p>";
        echo '<center><form action="cartpanel/addcartconf.php" method="post"><input type = "hidden" name = "topic" value = "'.$row["prodid"].'" /><input type="submit" class="cartbtn" value="Add to Cart" name="submit"></form></center>';
        echo '</div>';
        }
      } 
      else
      {
        echo "0 results";
      }
?>
  
    </div>   
    <p class="showname">
        Top Sell books
    </p>
    <div class="showcase">
    <?php
    $showprodd = "select * from product where type='Areligion'";
    $result = $conn->query($showprodd);
    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
        $i++;
        if($i > 4){
            break;
        }
        echo "<div class='productbox'>";
        echo "<img src=".$row['imgloco']." height='200px'>";
        echo "<p class='productname' >".$row["name"]."</p>";
        echo "<p class='productprice'> Rs ".$row["price"]."</p>";
        echo '<center><form action="cartpanel/addcartconf.php" method="post"><input type = "hidden" name = "topic" value = "'.$row["prodid"].'" /><input type="submit" class="cartbtn" value="Add to Cart" name="submit"></form></center>';
        echo '</div>';
        }
        
      } else {
        echo "0 results";
      }
    ?>
    <br>
    <br><br>
    <center><p>Our Feature:</p></center></p>
    <img src="accet/features.png">
    </div>
    <?php 
    include("footer.php");
    ?>
</body>
</html>