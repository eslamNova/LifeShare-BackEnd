<?php
function addAcceptor($name,$userName,$email,$password,$phone){
require "../model/connect.php";
$result=connectToDB();
if($result!==false ){
$connect=$result;
@mysqli_query($connect,"insert into acceptor (name,userName,email,password,phone) values ('$name','$userName','$email','$password','$phone')");
}else{
$result=false;
}
if($result!==false)
$result=true;
return $result;
}



?>
