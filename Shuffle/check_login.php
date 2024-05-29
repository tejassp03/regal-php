<?php
//Start a PHP session
session_start();

// Initialize the response data
 $response = array();

 // Check if a user is logged in (you can implement your own authentication mechanism)
 if (isset($_SESSION['cand_id'])) {
    // User is logged in, provide the user ID in the response
    $response['logged_in'] = true;
    $response['cand_id'] = $_SESSION['cand_id'];
 } else {
     // User is not logged in
     $response['logged_in'] = false;
}

// Send the response as JSON
echo json_encode($response);