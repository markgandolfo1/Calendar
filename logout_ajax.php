<?php
session_start();
$_SESSION = [];
session_destroy();
echo json_encode(array(
    "success" => true,
    "message" => "you are logged out!"
));
exit;
?>