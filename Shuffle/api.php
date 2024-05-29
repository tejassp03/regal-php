<?php
//Start a PHP session
session_start();

// Include the database connection file
include_once('../auth/connection.php');

// Initialize regular variables to store the data
$category = '';
$subcategory = '';
$question = '';
$optionA = '';
$optionB = '';
$optionC = '';
$optionD = '';
$correctAnswer = '';
$explanation = '';
$theory = '';

// SQL query to retrieve unsolved questions with related data (assuming only one question is fetched)
$sql = "SELECT q.id, t.topic AS category, t.sub_topic AS subcategory, q.subtopicid, q.question, q.opt_a, q.opt_b, q.opt_c, q.opt_d, q.correct_ans, q.explanation
        FROM questions_list q
        INNER JOIN topics t ON q.subtopicid = t.id 
        WHERE q.status = 'unsolved' LIMIT 1";


$result = $database_handler->query($sql);

if ($result->num_rows > 0) {
    // Fetch the data (assuming only one question is fetched)
    $row = $result->fetch_assoc();
    $question_id = $row["id"];
    $category = $row["category"];
    $subcategory = $row["subcategory"];
    $question = $row["question"];
    $optionA = $row["opt_a"];
    $optionB = $row["opt_b"];
    $optionC = $row["opt_c"];
    $optionD = $row["opt_d"];
    $correctAnswer = $row["correct_ans"];
    $explanation = $row["explanation"];

    // Create an associative array to store the question data
    $questionData = array(
        "question_id" => $question_id,
        "category" => $category,
        "subcategory" => $subcategory,
        "question" => $question,
        "opt_a" => $optionA,
        "opt_b" => $optionB,
        "opt_c" => $optionC,
        "opt_d" => $optionD,
        "correct_ans" => $correctAnswer,
        "explanation" => $explanation
    );

    // Return the question data as JSON
    echo json_encode($questionData);
} else {
    // Return an error message if no unsolved questions are found
    echo json_encode(array("error" => "No unsolved questions found."));
}

$database_handler->close();
?>
