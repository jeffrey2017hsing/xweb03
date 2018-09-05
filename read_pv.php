<?php

$pvTotal = 8;
$pvName = array('電子世界','超級配線員','花物語','食神傳奇','機械戰士','神奇雕手','餐桌奇緣','網頁世界');
$pvPic = array("data_b/03B01.png","data_b/03B02.png","data_b/03B03.png",
	"data_b/03B04.png","data_b/03B05.png","data_b/03B06.png","data_b/03B07.png","data_b/03B08.png");

session_start();
$link = mysqli_connect('localhost', 'root', '','dbxx');
mysqli_query($link,'set names utf8');


$sql = 'select * from tb3_pv where pvShow=1 and pvDel=0';
$ro =  mysqli_query($link,$sql);
$pvTotal = mysqli_num_rows($ro);

for($i=0;$i<$pvTotal;$i++){
	$row = mysqli_fetch_assoc($ro);
	$pvPic[$i] = 'data_a/'.$row['pvPic'];
	$pvName[$i] = $row['pvName'];
}	

$mvTotal = 0;
$mvTotalPage = 0;

$sql = 'select * from tb3_mv where mvShow="1" and mvDel="0"';
$ro =  mysqli_query($link,$sql);
$mvTotal = mysqli_num_rows($ro);
$mvTotalPage = $mvTotal/4;
if(($mvTotal%4)!=0){ $mvTotalPage++;}

for($i=0;$i<$pvTotal;$i++){
	$mv[$i] = mysqli_fetch_assoc($ro);
}	
$mv[$pvTotal] = "";

?>