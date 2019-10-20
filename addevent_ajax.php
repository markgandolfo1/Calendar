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
session_start();
$username = $_SESSION['username'];
//$username = "ronald";

echo json_encode(array(
    "success" => $title
));

//Insert into database:
$stmt = $mysqli->prepare("insert into events (user, title, date, time) values (?, ?, ?, ?)");
if(!$stmt){
	printf("Query Prep Failed: %s\n", $mysqli->error);
	exit;
}

$stmt->bind_param('ssss', $username, $title, $date, $time);

$stmt->execute();

$stmt->close();
   

?>