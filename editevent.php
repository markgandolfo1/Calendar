<?php
// login_ajax.php
require 'databaselink.php';

header("Content-Type: application/json"); 

$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str, true);

//Variables can be accessed as such:

$title = $json_obj['title'];
$date = $json_obj['date'];
$time = $json_obj['time'];
$eventid = $json_obj['eventid'];


$stmt = $mysqli->prepare("update events set title = '$title', date = $date, time = $time where eventid=$eventid");
    if(!$stmt){
        printf("Query Prep Failed: %s\n", $mysqli->error);
        exit;
    }
    $stmt->execute();
    while($stmt->fetch()){
    }
    
    $stmt->close();
    
    ?>
    
   