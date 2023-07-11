 <?php
include 'database.php';



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_DEFAULT);

  $itemName = "nike 1";
    $itemPrice = $nike1;




// Step 2: Prepare the SQL Statement
$sql = "INSERT INTO usersnames (names, email, passwords) VALUES (?, ?, ?)";

// Step 3: Bind Values to the Prepared Statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $password_hash);

// Step 4: Execute the SQL Statement
$stmt->execute();

// Step 5: Check for Success or Error
if ($stmt->affected_rows > 0) {
    // echo "Data inserted successfully.";
} else {
    echo "Failed to insert data.";
}

// Step 6: Close the Database Connection
$stmt->close();
// $conn->close();





if(isset($_POST['submit'])){
    $nike1 = 900;
    $html = '<img class="imgs" src="img/nike1.jpeg"';
    $regex = '/src="([^"]+)"/';
    preg_match($regex, $html, $matches);
    $imageSrc = $matches[1];
    // echo 'hello';
    echo $itemName . $itemPrice . $imageSrc;
    
    echo $conn->error; // Display any database-related errors 
    echo $conn->prepare($query); // Display any database-related errors
 $query = "INSERT INTO carts (item_names, item_prices, photo) VALUES (?, ?, ?)"; 
    // Prepare the SQL statement
   
    $stmt = $conn->prepare($query);
    // echo "hello world";
    $stmt->bind_param("sds", $itemName, $itemPrice, $imageSrc);

    // Set the values for the placeholders
    $itemName = "nike 1";
    $itemPrice = $nike1;
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Failed to insert data into the database.";
    }
    // echo "hello world";
    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>






?> 


