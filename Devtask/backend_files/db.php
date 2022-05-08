<?php session_start();

$conn = mysqli_connect('localhost', 'root', '', 'loginapp');

if(!$conn){
    die('Database connection failed');
}
?>