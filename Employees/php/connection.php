<?php
$dbServername="localhost";//numele serverului
$dbUsername="root";//numele de utilizator pt server
$dbPassword="";//parola pentru server
$dbName="proiectphp";//numele bazei de date

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);//conexiunea la baza de date
if(!$conn){
  die("Conexiune esuata:".mysqli_connect_error());
}
?>