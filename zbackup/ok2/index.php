﻿<?php
session_start();
$tt = strtotime("+6hour");
$tt2 = date("Y-m-d H:i:s",$tt);

if(empty($_SESSION["talk_no"])){
  $tt3 = date("YmdHis",$tt);
  $_SESSION["talk_no"] = $tt3;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)? -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>影城</title>
<link href="css/s1.css" rel="stylesheet" type="text/css">
<link href="css/s2.css" rel="stylesheet" type="text/css">
<script src="scripts/jquery-1.9.1.min.js"></script>
</head>

<body>
<div id="main">
  <div id="top" class="ct" style=" background:#999 center; background-size:cover; " title="ABC影城">
    <h1>ABC影城</h1>
  </div>
  <div id="top2"> <a href="index.htm">首頁</a> 
  <a href="online.htm" target='imain'>線上訂票</a> 
  <a href="#">會員系統</a> 
  <a href="xadmin.htm" target='imain'>管理系統</a> 
  </div>
  <div id="text"> <span class="ct">最新活動</span>
    <marquee direction="right">
    ABC影城票價全面八折優惠1個月
    </marquee>
  </div>
	<iframe width='100%' height='580px' name="imain" src="main.php"></iframe>    
  <div id="bo"> ©Copyright 2010~2018 ABC影城 版權所有 </div>
</div>
</body>
</html>