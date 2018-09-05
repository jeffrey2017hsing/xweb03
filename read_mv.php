<?php
$tstamp = strtotime('+6hour');
$dtmNow = date('Y-m-d H:i:s',$tstamp);
$dayNow = date('Y-m-d', $tstamp);
$ttt = strtotime("+6hour-3day");
$day3B4 = date("Y-m-d",$ttt);

$page=1;
$blocks = 4;

if(!empty($_GET["page"])){ $page = $_GET["page"];}

$readStart = ($page -1) * $block; 

$sql = "select * from tb3_mv where mvShow=1 and mvDel=0 and mvDay > '$day3B4'";
$ro = mysqli_query($link,$sql);
$total = mysqli_num_rows($ro);
$total_page = ceil($total/$blocks);

$sql = "select * from tb3_mv where mvShow=1 and mvDel=0 and mvDay > '$day3B4' order by mvPri desc limit $readStart,$blocks";
$ro = mysqli_query($link,$sql);
$mv = mysqli_fetch_assoc($ro);

?>

<link href="css/s1.css" rel="stylesheet" type="text/css">
<link href="css/s2.css" rel="stylesheet" type="text/css">

<div class="rb tab" style="width:95%;">
<?php do{?>	

		<div class="half" style=" height:200; float:left; border:1px solid #fc3;">
			<img src="data_b/03B02.png" style="width:40%; margin:10px; float:left">
			<p style="margin:3px"><?=$mv['mvName']?></p>
			<p style="margin:3px"> <img src="css/03C04.png" style="display:inline-block;">限制級 </p>
			<p style="margin:3px">上映日期：2014/02/14</p>
			<p style="margin:3px">
				<input type="button" value="劇情簡介" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
				<input type="button" value="線上訂票" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
			</p>  
		</div>
			
<?php }while($mv = mysqli_fetch_assoc($ro));?>
	<br>
    <div class="ct">
		<?php for($i=1; $i<=$totalPage ; $i++){?> <a href="main.php?page=<?=$i?>"><?=$i?></a> <?php }?>
	</div>
	<br>
</div>
	  