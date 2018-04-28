<?php
function delReq($userName,$hospitalName,$address,$bloodType){
require "../model/connect.php";
$result=connectToDB();
if($result!==false){
$connect=$result;
@mysqli_query($connect,"DELETE FROM `requests` WHERE userName='$userName'");
}else{
$result=false;
}
if($result!==false)
$result=true;
return $result;
}



?>
