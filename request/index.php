<?php
header("Content-Type:application/json");

require"../response.php";

require"../controller/addRequest.php";

require"../controller/getAllRequests.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$userName=$_POST["userName"];
$hospitalName=$_POST["hospitalName"];
$address=$_POST["address"];
$bloodType=$_POST["bloodType"];
$phone=$_POST["phone"];



$result=addRequest($userName,$hospitalName,$address,$bloodType);

if($result){
return response("200","ok",null);
}else{
return response("400","Bad Request!",null);
}
}else if($_SERVER['REQUEST_METHOD'] === 'GET'){

              $result=getAllRequests();
if($result){
return response("200","ok",$result);
}else{
return response("400","Bad Request!",null);
}

}

?>
