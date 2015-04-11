<?php 
$arr = array('1' => array("延吉远航按摩中心","电话:0433-2851299","gg/am_1.png","gg/am_1.html"), 
	'2' => array("延吉银铺","电话:0433-2763377","gg/am_2.png","gg/am_2.html"),
	'3'=>array("延吉市温泉桑拿洗浴中心","电话:0433-5006777","gg/am_3.png","gg/am_3.html"));
$doc=new DOMDocument('1.0','utf-8');
$doc->formatOutput = true;
$r=$doc->createElement("root");
$doc->appendChild($r);

$root = $doc->createElement($dbtable);
$doc->appendChild($root);
foreach ($resArray as $key => $res) {
	// 建立food节点下子节点list id  
    	$record = $doc->createElement("list id=".$key);  
    	$food->appendChild($record);  
    	// 建立food节点下的各项  
     	for ($i = 0; $i < $fieldNum; $i++) {  
          // 表字段  
        	$res[$i] = $doc->createElement($dbtField[$i]);  
         // 表字段的值  
        	$node[$i]->appendChild($doc->createTextNode($res[$dbtField[$i]]));  
         	$record->appendChild($node[$i]); 
         	echo "</ch1>"; 
}
 ?>