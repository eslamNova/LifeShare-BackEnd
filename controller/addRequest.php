<?php
function addRequest($hospitalName,$userName,$bloodType){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;
@mysqli_query($connect,"insert into requests (hospitalName,userName,email,bloodType) values ('$name','$userName','$bloodType')");
}else{
$result=false;
}
if($result!==false)
$result=true;
return $result;
}



?>
