<?php
include_once("read_pv.php");

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

<style>

.notShow{
    display:none;
  }
  
#bigPic {
	width: 200px;
    margin-left: 100px;
	transition: transform 1.5s ease-out;
} 

.icPic {
	width: 40px;
	transition: transform 0.5s ease-out;
} 

.icPic:hover {
	cursor: pointer;
	transform: scale(0.90);
	border: 1px solid;
    padding: 5px;
    box-shadow: 3px -4px 2px red;
}

.icActive {
	width: 40px;
	border: 1px solid;
    padding: 5px;
    box-shadow: 3px -4px 2px blue;
}

</style>

<body>
  <div id="mm">
 <div class="half" style="vertical-align:top;">
      <h2 class='ct rb'>預告片介紹</h2>
      <div class="rb tab" style="width:95%;">
        <div id="abgne-block-20111227">			
			<p id='bigName' class="ct"><?=$pvName[1]?></p>
			<img id='bigPic' src="<?=$pvPic[1]?>">
			<br>&nbsp;
			<table class='c rb' align='center' width="99%">         
            <tr>
				<td align="center" width="16%" rowspan='2'>
					<p id='leftA' class='triangle_left' onclick="sendL();"></p></td>
				<td align="center" width="16%">
					<img id='icPic1' class='icActive' src="<?=$pvPic[1]?>" onclick="sendP1();"></td>
				<td align="center" width="16%">
					<img id='icPic2' class='icPic' src="<?=$pvPic[2]?>" onclick="sendP2();"></td>
				<td align="center" width="16%">
					<img id='icPic3' class='icPic' src="<?=$pvPic[3]?>" onclick="sendP3();"></td>
				<td align="center" width="16%">
					<img id='icPic4' class='icPic' src="<?=$pvPic[4]?>" onclick="sendP4();"></td>
				<td align="center" width="16%" rowspan='2'>
					<p id='rightA' class='triangle_right' onclick="sendR();"></p></td>
            </tr>
			<tr style="font-size:12px">
				<td id='icName1' align="center"><?=$pvName[1]?></td>
				<td id='icName2' align="center"><?=$pvName[2]?></td>
				<td id='icName3' align="center"><?=$pvName[3]?></td>
				<td id='icName4' align="center"><?=$pvName[4]?></td>
				
            </tr>
        </table> 
        </div>
      </div>
    </div>
	
    <div class="half">
      <h2 class='ct rb'>院線片清單</h2>
      <div class="rb tab" style="width:95%;">
        <div class="half" style=" height:200; float:left; border:1px solid #fc3;">
			<img src="data_b/03B01.png" style="width:40%; margin:10px; float:left">
			<p style="margin:3px">電子世界</p>
			<p style="margin:3px"><img src="data_c/03C01.png" style="display:inline-block;">普通級 </p>
			<p style="margin:3px">上映日期：2014/02/14</p>
			<p style="margin:3px">
				<input type="button" value="劇情簡介" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
				<input type="button" value="線上訂票" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
			</p>  
		</div>
		<div class="half" style=" height:200; float:left; border:1px solid #fc3;">
			<img src="data_b/03B02.png" style="width:40%; margin:10px; float:left">
			<p style="margin:3px">超級配線員</p>
			<p style="margin:3px"> <img src="css/03C04.png" style="display:inline-block;">限制級 </p>
			<p style="margin:3px">上映日期：2014/02/14</p>
			<p style="margin:3px">
				<input type="button" value="劇情簡介" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
				<input type="button" value="線上訂票" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
			</p>  
		</div>
		<div class="half" style=" height:200; float:left; border:1px solid #fc3;">
			<img src="data_b/03B03.png" style="width:40%; margin:10px; float:left">
			<p style="margin:3px">花物語</p>
			<p style="margin:3px"><img src="css/03C04.png" style="display:inline-block;">限制級 </p>
			<p style="margin:3px">上映日期：2014/02/14</p>
			<p style="margin:3px">
				<input type="button" value="劇情簡介" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
				<input type="button" value="線上訂票" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
			</p>  
		</div>
		<div class="half" style=" height:200; float:left; border:1px solid #fc3;">
			<img src="data_b/03B04.png" style="width:40%; margin:10px; float:left">
			<p style="margin:3px">食神傳奇</p>
			<p style="margin:3px"> <img src="css/03C04.png" style="display:inline-block;">限制級 </p>
			<p style="margin:3px">上映日期：2014/02/14</p>
			<p style="margin:3px">
				<a href="interview.htm" target='imain'>
				<input type="button" value="劇情簡介" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
				</a>
				<a href="online.htm" target='imain'>
				<input type="button" value="線上訂票" onclick="lof(&#39;?do=ord&amp;id=4&#39;)" style="padding:2px 4px" class="b2_btu">
				</a>
			</p>  
		</div>
		<br>
        <div class="ct"> 1 2 </div>
		<br>
      </div>
    </div>
  </div>
</body>
</html>

<script>
var seq = 0, xstop = 0;
var pic = <?php echo json_encode($pvPic) ?>;
//var name = <?php echo json_encode($pvName, JSON_UNESCAPED_UNICODE) ?>;
var tcnt = "<?=$pvTotal?>";

function update(){			
	if(seq>=tcnt || seq==0){ 
		seq=0; 		
		//disply null,1,2,3,4,>
		$("#leftA").hide();
		$("#rightA").show();
		document.getElementById("bigPic").src = pic[0];
		document.getElementById("bigName").innerHTML = "<?=$pvName[0]?>";
		document.getElementById("icPic1").src = pic[0];
		document.getElementById("icName1").innerHTML = "<?=$pvName[0]?>";
		document.getElementById("icPic2").src = pic[1];
		document.getElementById("icName2").innerHTML = "<?=$pvName[1]?>";
		document.getElementById("icPic3").src = pic[2];
		document.getElementById("icName3").innerHTML = "<?=$pvName[2]?>";
		document.getElementById("icPic4").src = pic[3];
		document.getElementById("icName4").innerHTML = "<?=$pvName[3]?>";
		
		document.getElementById("icPic1").className = "icActive";
		document.getElementById("icPic2").className = "icPic";
		document.getElementById("icPic3").className = "icPic";
		document.getElementById("icPic4").className = "icPic";		
	} else if(seq>=(tcnt-4)) {
		//disply <,tcnt-4,tcnt-3,tcnt-2,tcnt-1,null
		$("#leftA").show();
		$("#rightA").hide();
		document.getElementById("bigPic").src = pic[seq];
		document.getElementById("icPic1").src = pic[tcnt-4];
		document.getElementById("icPic2").src = pic[tcnt-3];
		document.getElementById("icPic3").src = pic[tcnt-2];
		document.getElementById("icPic4").src = pic[tcnt-1];
		document.getElementById("icName1").innerHTML = "<?=$pvName[$pvTotal-4]?>";
		document.getElementById("icName2").innerHTML = "<?=$pvName[$pvTotal-3]?>";
		document.getElementById("icName3").innerHTML = "<?=$pvName[$pvTotal-2]?>";
		document.getElementById("icName4").innerHTML = "<?=$pvName[$pvTotal-1]?>";
		
		document.getElementById("icPic1").className = "icPic";
		document.getElementById("icPic2").className = "icPic";
		document.getElementById("icPic3").className = "icPic";
		document.getElementById("icPic4").className = "icPic";	
		if(seq==(tcnt-4)){ 
			document.getElementById("icPic1").className = "icActive"; 
			document.getElementById("bigName").innerHTML = "<?=$pvName[$pvTotal-4]?>";		
		}
		if(seq==(tcnt-3)){ 
			document.getElementById("icPic2").className = "icActive";
			document.getElementById("bigName").innerHTML = "<?=$pvName[$pvTotal-3]?>";				
		}
		if(seq==(tcnt-2)){ 
			document.getElementById("icPic3").className = "icActive";
			document.getElementById("bigName").innerHTML = "<?=$pvName[$pvTotal-2]?>";	
		}
		if(seq==(tcnt-1)){ 
			document.getElementById("icPic4").className = "icActive"; 
			document.getElementById("bigName").innerHTML = "<?=$pvName[$pvTotal-1]?>";	
		}
		
	} else {
		//disply <,n,n+1,n+2,n+3,>
		$("#leftA").show();
		$("#rightA").show();
		document.getElementById("bigPic").src = pic[seq];
		document.getElementById("icPic1").src = pic[seq];
		document.getElementById("icPic2").src = pic[seq+1];
		document.getElementById("icPic3").src = pic[seq+2];
		document.getElementById("icPic4").src = pic[seq+3];
		/*
		document.getElementById("icName1").innerHTML = "<?=$pvName[$pvCnt+2]?>";
		document.getElementById("icName2").innerHTML = "<?=$pvName[$pvCnt+3]?>";
		document.getElementById("icName3").innerHTML = "<?=$pvName[$pvCnt+4]?>";
		document.getElementById("icName4").innerHTML = "<?=$pvName[$pvCnt+5]?>";
		*/
		idx = seq;		
		$.post("utf8_api.php",{idx},function(dd){
			document.getElementById("bigName").innerHTML = dd;
			document.getElementById("icName1").innerHTML = dd;
		});
		
		idx++;		
		$.post("utf8_api.php",{idx},function(dd){
			document.getElementById("icName2").innerHTML = dd;
		});
		idx++;
		$.post("utf8_api.php",{idx},function(dd){
			document.getElementById("icName3").innerHTML = dd;
		});
		idx++;
		$.post("utf8_api.php",{idx},function(dd){
			document.getElementById("icName4").innerHTML = dd;
		});
		
		document.getElementById("icPic1").className = "icActive";
		document.getElementById("icPic2").className = "icPic";
		document.getElementById("icPic3").className = "icPic";
		document.getElementById("icPic4").className = "icPic";	
	}
}

function sendP1(){		
	if(seq>(tcnt-4)){seq=tcnt-4;}
	update();
}

function sendP2(){		
	if(seq>(tcnt-4)){seq=tcnt-3;}
	else if(seq<4){seq=1;}
	else {seq++;}
	update();
}

function sendP3(){		
	if(seq>(tcnt-4)){seq=tcnt-2;}
	else if(seq<4){seq=2;}
	else {seq++;}
	update();
}

function sendP4(){		
	if(seq>(tcnt-4)){seq=tcnt-1;}
	else if(seq<4){seq=3;}
	else {seq++;}
	update();
}

function sendL(){	
	seq--;
	if(seq<0){seq=0;}
	update();
}

function sendR(){	
	seq++;	
	if(seq>=tcnt){seq=0;}
	update();
}
	
function now_load(){	
	seq++;
	if(seq>=tcnt){seq=0;}
	update();
	
	setTimeout(function(){	
		if(xstop==0){ 
			now_load(); 
		} 
		//alert(); 
	},5000); //1000=1秒 
}

now_load();

</script>