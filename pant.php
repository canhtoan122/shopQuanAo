
<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "shopquanao"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch employee data
$sql = `SELECT * FROM quan`;
$result = $conn->query($sql);
$pants = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pants[] = $row;
    }
}

// Close the database connection
$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($pants);
?>
