<?php
	$index=0;
	$resArray=array();
	$dataArray=array();
	$xml = simplexml_load_file("../xml/hotel.xml");
	foreach ($xml->children() as $list) {
		//$index=$list['id'];
		echo $list['id']."<br/>";
		foreach ($list->children() as $node) {
			echo $node."<br/>";
			/*
			$resArray[$index]=$node;
			$dataArray[$index]=$resArray;
			$index++;
			*/
		}
	}
//	print_r($resArray);
//	echo "<br/>";
//	print_r($dataArray);


//php manual:http://php.net/manual/en/simplexmlelement.children.php
 ?>


