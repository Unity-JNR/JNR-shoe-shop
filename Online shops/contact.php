

<!DOCTYPE html>
<link rel="stylesheet" href="css/mains.css">
<link rel="stylesheet" href="css/shoes.css">
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<nav>
    <ul>
        <li id="left"><a href="JNR.php">Home</a></li>
        <!-- <li id="rightside"><a href="cart.php">Cart</a></li> -->
      
    </ul>
</nav>
    <h1>Contact Form</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required><br><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br><br>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Send email or process the form data in any other desired way

    echo '<p>Thank you for your message! We will get back to you soon.</p>';
}
?>




<?php
// Define latitude and longitude or address
$latitude = '40.712775';
$longitude = '-74.005973';

// Construct the Google Maps URL
$mapsUrl = "https://www.google.com/maps?q={$latitude},{$longitude}";

// Display the link
echo '<a href="' . $mapsUrl . '" target="_blank">View on Google Maps</a>';
?>

<?php
// Define latitude and longitude or address
$latitude = '40.712775';
$longitude = '-74.005973';

// Construct the Google Maps URL
$mapsUrl = "https://www.google.com/maps?q={$latitude},{$longitude}";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Google Maps</title>
</head>
<body>
    <h1>Google Maps</h1>

    <!-- Embed the Google Maps link using an iframe -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.896799716377!2d18.714314975188465!3d-33.86655041894145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc53e1184b7c41%3A0x6896c8122c4fc317!2s8%20Lindenhof%2C%20Northpine%2C%20Cape%20Town%2C%207560!5e0!3m2!1sen!2sza!4v1688999965690!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        src="<?php echo $mapsUrl; ?>" allowfullscreen></iframe>
</body>
</html>


