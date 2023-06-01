<?php
// Retrieve the search query from the form submission
$search = $_POST['search'];

// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Construct the SQL query to search for data
$query = "SELECT * FROM collect_data WHERE name LIKE '%$search%'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Display the search results
    while ($row = $result->fetch_assoc()) {
        echo "<p>Name: " . $row['name'] . "</p>";
        echo "<p>Join Date: " . $row['date'] . "</p>";
        echo "<hr>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>
