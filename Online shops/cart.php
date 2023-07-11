


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="css/mains.css">
    <link rel="stylesheet" href="css/shoes.css">
</head>
<body>
<nav>
    <ul>
        <li id="left"><a href="JNR.php">back</a></li>
        <!-- <li id="rightside"><a href="cart.php">Cart</a></li> -->
    </ul>
</nav>






   <?php
   include 'database.php';
   
   ?>
<?php
$sql = "SELECT * FROM carts";
$result = $conn->query($sql);

while($row= mysqli_fetch_assoc($result)){
    ?>
    <div class="card">
        <div class="images">
            <img class="imgs" src="<?php echo $row['photo']  ?>" alt="">
        </div>
        <p  id="id-name" class="product_name"><?php echo $row['item_names'] ?></p>
        <p class="price">R<?php echo $row['item_prices'] ?></p>
        <form method="post" action="">
        <button class="delete" name="delete">delete </button>
        </form>

       
    </div>
    <?php 
}
?>
<?php
$sql= "SELECT sum(item_prices) AS total_price FROM carts";
$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <p>Total price : R<?php echo $row['total_price'] ?></p>
   
    <?php
}
?>
<?php
if (isset($_POST['delete'])) {
   
$query = "SELECT id FROM carts";
$result = mysqli_query($conn, $query);

if ($result) {
    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row in the result set
        while ($row = mysqli_fetch_assoc($result)) {
            // Access the ID value from the row
            $id = $row['id'];

            // Use the ID in the delete query
            $sql = "DELETE FROM carts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
        }
    } else {
        echo "No records found.";
    }
} else {
    echo "Query failed: " . mysqli_error($conn);
}
}
    
    $conn->close();

    ?>
<form method="post" action="">
    <button name="check" class="check_out">check out</button>
</form>

<?php
// Assuming you have already established a database connection ($conn)

if (isset($_POST['check'])) {

    echo " '<script> alert(' payment complete');</script>' ";

}

   
    
    

?>


</body>
</html>



