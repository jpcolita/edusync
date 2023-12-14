<?php



$host="localhost";
$username="root";
$password="";
$database="sis";



$conn = new mysqli($host,$username,$password,$database);


if(!$conn){
echo "Connection Error";
}










?>