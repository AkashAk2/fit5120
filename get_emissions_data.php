<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "wp_user";
$password = "Monash@27";
$dbname = "wp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$postcode = intval($_POST['Postcode']);

$sql = "SELECT * FROM opendata WHERE Postcode = $postcode ORDER BY Year";
$result = $conn->query($sql);

$data = array(); // array to hold the data

if ($result) {
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        // No results found
        http_response_code(204); // No Content
        echo json_encode(array('message' => 'No results found.'));
    }
} else {
    // Error in the database query
    http_response_code(500); // Internal Server Error
    echo json_encode(array('message' => 'Database query error: ' . mysqli_error($conn)));
}

$conn->close();

header('Content-type: application/json');
echo json_encode($data);
?>

