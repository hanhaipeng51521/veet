<?php
$mysql= new mysqli("localhost","root","","veet");
if($mysql->connect_errno){
	die($mysql->connect_errno);
}

$mysql->query('set names utf8');
$sqlstr = "select * from about_lunbo";

$result = $mysql->query($sqlstr);
$myArray = array();
  while($record = $result->fetch_assoc()){
    array_push($myArray,$record);
  }
  $a = json_encode($myArray);
  echo $a;


?>
