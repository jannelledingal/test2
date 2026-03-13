<?php

$conn = mysqli_connect("localhost", "root", "", "labexam2",3306);

if(!$conn){
die("Connection Failed: " .mysqli_connect_error());
}
?>