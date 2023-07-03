<?php
$host = "localhost";
$uname = "root";
$upass = "";
$db = "student_id";

$conn =new mysqli($host, $uname, $upass, $db);
if(!$conn){
    die( "Failed to connect with Database");
}

?>