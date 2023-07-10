<?php

include 'database.php';



$sql = "SELECT * FROM carts";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo  " - Name: " . $row["item_name"]. " price: " . $row["item_price"]. " - photo: " . $row["photo"];
    }
  } else {
    echo "0 results";
  }



?>

