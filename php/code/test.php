<?php

      $mysql = new mysqli("localhost","root","","okjee_DB");
        if($mysql->connect_errno){
          die($mysql->connect_errno);
        }
      $mysql->query("set names utf8");
      $sqlstr = "select * from goods_info where goods_id =1";
      $result = $mysql->query($sqlstr);
      // var_dump($result);
     $myArray = array();
      // fetch_assoc():查询出每一条在result中的数据；
      while ($record = $result->fetch_assoc()) {
            array_push($myArray,$record);
       }
       $ar =  json_encode($myArray);
       echo $ar;
?>