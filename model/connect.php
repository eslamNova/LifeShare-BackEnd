<?php
function connectToDB(){
$result=true;
$host="localhost";
$user="root";
$password="";
$database="db_project";

$connect= @mysqli_connect($host,$user,$password,$database);

if($result!=false)
return $connect;
return false;
}
?>
