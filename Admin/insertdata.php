<?php
include 'config.php';

$sql = "INSERT INTO topics(topic,sub_topic) VALUES('Aptitude','Heights and Distances')";
if(mysqli_query($con, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
?>