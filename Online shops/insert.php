 <?php
include 'database.php';



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_DEFAULT);




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
$conn->close();






$sql = "INSERT INTO carts (item_names,item_prices, photo) VALUES ('nike shoes','$nike1','img/nike1.jpeg' )";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();




?> 


