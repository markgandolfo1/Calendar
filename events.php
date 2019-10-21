<?php

require 'databaselink.php';

session_start();
$username = $_SESSION['username'];

//$username = "ronald";
$title_array = array();
$year_array = array();
$month_array = array();
$day_array = array();
//$date_array = array();
$time_array = array();
$eventid_array = array();
$num = 0;

//Check passwords:
$stmt = $mysqli->prepare("SELECT title, year(date), month(date), day(date), time, eventid FROM events WHERE user=?");

// Bind the parameter
$stmt->bind_param('s', $username);
$stmt->execute();

// Bind the results
$stmt->bind_result($title, $year, $month, $day, $time, $eventid);



while($stmt->fetch()){
array_push($title_array,$title);
array_push($year_array,$year);
array_push($month_array,$month);
array_push($day_array,$day);
//array_push($date_array,$date);
array_push($time_array,$time);
array_push($eventid_array,$eventid);
$num++;
}

$stmt->close();

header("Content-Type: application/json"); 
$event_array = array(
    "title" => $title_array,
    "year" => $year_array,
    "month" => $month_array,
    "day" => $day_array,
    "time" => $time_array,
    "num" => $num,
    "eventid" => $eventid_array
);

echo json_encode($event_array);





?>
