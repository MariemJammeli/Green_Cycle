<?php
// Replace with your database connection setup
require 'db_connection.php'; 

// Get the POSTed data sent via AJAX
$filters = json_decode(file_get_contents('php://input'), true);

// Build the base query for fetching walks
$query = "SELECT * FROM walks WHERE 1=1";

// Initialize an array to store query parameters
$params = [];

/* Replace the table fields and parameters with your actual column names */
if (!empty($filters['date'])) {
    // Assuming 'date' is a column in your database table
    $query .= " AND date = :date";
    $params[':date'] = $filters['date'];
}

if (!empty($filters['timeOfDay'])) {
    // Assuming 'time_of_day' is a column in your database table
    // Uses placeholders and binds array values
    $placeholders = implode(',', array_fill(0, count($filters['timeOfDay']), '?'));
    $query .= " AND time_of_day IN ($placeholders)";
    $params = array_merge($params, $filters['timeOfDay']);
}

if (!empty($filters['duration'])) {
    // Assuming 'duration' is a column in your database table
    $placeholders = implode(',', array_fill(0, count($filters['duration']), '?'));
    $query .= " AND duration IN ($placeholders)";
    $params = array_merge($params, $filters['duree']);
}

if (!empty($filters['price'])) {
    // Assuming 'price' is a column in your database table
    $query .= " AND price <= :price";
    $params[':price'] = $filters['price'];
}

// Prepare and execute the query with the parameters
$stmt = $db->prepare($query);
$stmt->execute($params);

// Fetch the results as an associative array
$walks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return the results as JSON so it can be used in JavaScript
echo json_encode($walks);
?>
