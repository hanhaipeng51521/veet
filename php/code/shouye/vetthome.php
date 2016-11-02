<?php
//1.连接数据库 参数1  数据库地址 参数2 数据库登录账号 参数3 数据库名称
$mysql= new mysqli("localhost","root","","veet");
//判断数据库链接是否正确，如果不正确 调用die函数结束
// echo $mysql->connect_errno;
if($mysql->connect_errno){
	die($mysql->connect_errno);
}

//2.将要查询的内容设置为utf8编码格式
$mysql->query('set names utf8');
//3.创建将要执行的sql语句
$sqlstr = "select * from home_lunbo";
//4.执行sql语句并返回执行的结果

$result = $mysql->query($sqlstr);
$myArray = array();
  //fetch_assoc : 查询出每一条在result中的数据
  while($record = $result->fetch_assoc()){
    array_push($myArray,$record);
  }
  // print_r($myArray);
  $a = json_encode($myArray);
  echo $a;


?>
