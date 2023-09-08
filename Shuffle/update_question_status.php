<?php

//Start a PHP session
session_start();

// Include the database connection file
include_once('../auth/connection.php');

// Get the question ID from the AJAX request
$question_id = $_POST['question_id'];

// SQL query to update the questions_list table (assuming 'questions_list' is the table name)
$updateQuestionStatusQuery = "UPDATE questions_list SET status = 'solved' WHERE question_id = $question_id";

if ($database_handler->query($updateQuestionStatusQuery) === TRUE) {
    // The questions_list table was updated successfully
    echo json_encode(array("success" => true));
} else {
    // Error occurred while updating the questions_list table
    echo json_encode(array("error" => "Error updating questions_list table: " . $database_handler->error));
}

$database_handler->close();
?>
