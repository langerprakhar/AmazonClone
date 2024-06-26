<?php
// Database connection parameters
$servername = "localhost:3360";
$username = "root";
$password = "";
$dbname = "Clone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the clothes table
$sql = "SELECT * FROM clothes";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Output the data for clothes
    echo "<h2>Clothes</h2>";
    echo "<div class='category'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='item'>";
        echo "<p>Name: " . $row['name'] . "</p>";
        echo "<p>Description: " . $row['description'] . "</p>";
        echo "<p>Price: $" . $row['price'] . "</p>";
        echo "<p>Size: " . $row['size'] . "</p>";
        echo "<p>Color: " . $row['color'] . "</p>";
        echo "</div>";
    }
    echo "</div>";
} else {
    // No data found for clothes
    echo "<p>No clothes found.</p>";
}

// Close the database connection
$conn->close();
?>