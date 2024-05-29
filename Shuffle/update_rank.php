<?php

//Start a PHP session
session_start();

// Include the database connection file
include_once('../auth/connection.php');

// Get the user ID from the AJAX request
$user_id = $_POST['user_id'];

// SQL query to update the rank table (assuming 'rank' is the table name)
$updateRankQuery = "UPDATE rank SET questions_practiced = questions_practiced + 1 WHERE user_id = $user_id";

if ($database_handler->query($updateRankQuery) === TRUE) {
    // The rank table was updated successfully
    echo json_encode(array("success" => true));
} else {
    // Error occurred while updating the rank table
    echo json_encode(array("error" => "Error updating rank table: " . $database_handler->error));
}

$database_handler->close();
?>
