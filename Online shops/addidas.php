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

<?php
$adidas1 = 900;
$adidas2 = 700;
$adidas3 = 350;
$adidas4 = 500;
?>

<div class="row">
 <div class="column">
    <img class="imgs" src="img/addidas1.jpeg" alt="nike">
    <label for="price">R<?php echo $adidas1 ?></label>
    <form method="post" action="">
        <button class="btn-pay" name="submit1" type="submit">&#128722;Buy</button>
    </form>
 </div>
 
 <div class="column">
    <img class="imgs" src="img/addidas2.jpeg" alt="nike">
    <label for="price">R<?php echo $adidas2 ?></label>
    <form method="post" action="">
        <button class="btn-pay" name="submit2" type="submit">&#128722;Buy</button>
    </form>
 </div>

 <div class="column">
    <img class="imgs" src="img/addidas3.jpeg" alt="nike">
    <label for="price">R<?php echo $adidas3 ?></label>
    <form method="post" action="">
        <button class="btn-pay" name="submit3" type="submit">&#128722;Buy</button>
    </form>
 </div>

 <div class="column">
    <img class="imgs" src="img/addidas4.jpeg" alt="nike">
    <label for="price">R<?php echo $adidas4 ?></label>
    <form method="post" action="">
        <button class="btn-pay" name="submit4" type="submit">&#128722;Buy</button>
    </form>
 </div>
</div>

<?php
include 'database.php';

if(isset($_POST['submit1'])){
    $item_name = "adidas 1";
    $item_price = $adidas1;
    $photo = "img/addidas1.jpeg";

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO carts (item_names, item_prices, photo) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $item_name, $item_price, $photo);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Item 1 added to cart successfully.";
    } else {
        echo "Failed to add item 1 to cart.";
    }

    $stmt->close();
}

if(isset($_POST['submit2'])){
    $item_name = "adidas 2";
    $item_price = $adidas2;
    $photo = "img/addidas2.jpeg";

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO carts (item_names, item_prices, photo) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $item_name, $item_price, $photo);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Item 2 added to cart successfully.";
    } else {
        echo "Failed to add item 2 to cart.";
    }

    $stmt->close();
}

if(isset($_POST['submit3'])){
    $item_name = "adidas 3";
    $item_price = $adidas3;
    $photo = "img/addidas3.jpeg";

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO carts (item_names, item_prices, photo) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $item_name, $item_price, $photo);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Item 3 added to cart successfully.";
    } else {
        echo "Failed to add item 3 to cart.";
    }

    $stmt->close();
}

if(isset($_POST['submit4'])){
    $item_name = "adidas 4";
    $item_price = $adidas4;
    $photo = "img/addidas4.jpeg";

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO carts (item_names, item_prices, photo) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $item_name, $item_price, $photo);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Item 4 added to cart successfully.";
    } else {
        echo "Failed to add item 4 to cart.";
    }

    $stmt->close();
}

$conn->close();
?>

</body>
</html>
