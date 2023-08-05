<?php
// Replace with your WordPress database credentials
$hostname = "localhost";
$username = "wp_user";
$password = "Monash@27";
$database = "wp";

// Establish a connection to the database
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get the total numbers from the "opendata" table
$query = "SELECT COUNT(*) as total FROM opendata";

// Execute the query
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch the result as an associative array
    $data = mysqli_fetch_assoc($result);
    // Close the database connection
    mysqli_close($connection);
    // Return the data as JSON
    echo json_encode($data);
} else {
    // If the query fails, return an error message
    echo json_encode(["error" => "Failed to fetch data"]);
}
?>
