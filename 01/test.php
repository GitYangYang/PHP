<?php 
$arr = array('1' => array("延吉远航按摩中心","电话:0433-2851299","gg/am_1.png","gg/am_1.html"), 
	'2' => array("延吉银铺","电话:0433-2763377","gg/am_2.png","gg/am_2.html"),
	'3'=>array("延吉市温泉桑拿洗浴中心","电话:0433-5006777","gg/am_3.png","gg/am_3.html"));
$index=0;
	foreach($arr as $key=>$val) {
	 echo $key."=>".$val[$index].";";
	 $index=$index+1;
 }
 ?>