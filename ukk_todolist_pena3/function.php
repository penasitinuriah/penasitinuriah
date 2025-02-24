<?php
$host = "localhost";
$user = "root"; 
$pass = ""; 
$db   = "ukk_todolis_pena3"; 

$con = mysqli_connect("localhost","root","","ukk_todolist_pena3");

if(!$con){
    die("koneksi Gagal: ".mysqli_connect_error());
}
?>

