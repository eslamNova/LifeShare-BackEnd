<?php
function addRequest($userName,$hospitalName,$address,$bloodType){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;
@mysqli_query($connect,"insert into requests (userName,hospitalName,address,bloodType) values ('$userName','$hospitalName','$address','$bloodType')");
}else{
$result=false;
}
if($result!==false)
$result=true;
return $result;
}



?>
