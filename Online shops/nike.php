

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mains.css">
    <link rel="stylesheet" href="css/shoes.css">
</head>
<body>
<nav>
    <ul>
        <li id="left"><a href="JNR.php">back</a></li>
        <li id="rightside"><a href="cart.php">Cart</a></li>
      
    </ul>
</nav>

<?
$nike1 = 900;
$nike2 = 1500;
$nike3 = 1000;
$nike4 = 1200;


?>







<div class="row">
 <div class="column">
    <img class="imgs" src="img/nike1.jpeg" alt="nike">
    <label for="price">R<? echo $nike1 ?></label>

    <button class="btn-pay" name="submit" type="submit" id="open-modal">&#128722;Buy</button>
       

 </div>
 
 <div class="column">
    <img class="imgs" src="img/nike2.jpeg" alt="nike">
    <label for="price">R<? echo $nike2 ?></label>
    <button class="btn-pay"  type="submit">&#128722;Buy</button>
 </div>

 <div class="column">
    <img class="imgs" src="img/nike3.jpeg" alt="nike">
    <label for="price">R<? echo $nike3 ?></label>
    <button class="btn-pay" type="submit">&#128722;Buy</button>
 </div>

 <div class="column">
    <img class="imgs" src="img/nike4.jpeg" alt="nike">
    <label for="price">R<? echo $nike4 ?></label>
    <button class="btn-pay"   type="submit">&#128722;Buy</button>
 </div>


</body>
</html>

<?php
include 'database.php';

if(isset($_POST['submit'])){
$html = '<img class="imgs" src="img/nike1.jpeg"';
$regex = '/src="([^"]+)"/';
preg_match($regex, $html, $matches);
$imageSrc = $matches[1];




// Check for connection error
// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO cart (item_name,item_price) VALUES (?)");
$stmt->bind_param("s", "nike 1",$nike1,$imageSrc);

// Execute the statement
if ($stmt->execute()) {
    echo "Image source inserted successfully.";
} else {
    echo "Failed to insert image source into the database.";
}
}
// Close the statement and database connection
$stmt->close();
$conn->close();
?>