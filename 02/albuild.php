<?php
//db info
//
	$dbname = "mytest";
	$link=mysql_connect('localhost','root','root') or die("Connect eroor:".mysql_error());

	//init db
	$sql = "drop database $dbname";
	@mysql_query($sql,$link);

	//create db
	$sql = "create database $dbname";
	mysql_query($sql,$link) or die("create $dbname error:".mysql_error());

	@mysql_select_db($dbname,$link);
	@mysql_query("SET NAMES 'UTF8'");

//XML filename array
	$xmlfiles = array(0=>'food1Data',
						1=>'food2Data',2=>'food3Data',
						3=>'food4Data',4=>'hotel',5=>'jingdian',
						6=>'shopping',7=>'yangshen',8=>'yule');
	foreach ($xmlfiles as $value) {
	//get each table name
		$dbtname = $value;
	
	//XML file operation
		$xml = simplexml_load_file("../xml/".$value.".xml");
	
	//create table
		$sql="create table $dbtname(title varchar(40) primary key,address varchar(40),pic varchar(40),html varchar(40),ch1 varchar(40))";
		mysql_query($sql,$link) or die("Couldn't create table!".mysql_error());

		$resArray = array();
//	$resArray=array('title','address','pic','html','ch1');
	
		$dataArray = array();
		$j=0;

		$title = "";  
	    $address = "";
	    $pic = "";
	    $html = "";
	    $ch1 = "";

//	$dataArray = array('0'=>array())
/*	$xmlfiles = array(0=>'food1Data',
				1=>'food2Data',2=>'food3Data',
				3=>'food4Data',4=>'hotel',5=>'jingdian',
				6=>'shopping',7=>'yangshen',8=>'yule');

*/	
		foreach ($xml->children() as $list){
			$i=0;
			foreach ($list->children() as $node) {
				$resArray[$i] = $node;
				$i++;
			}
			while ($i--) {
				$dataArray[$j]=$resArray;
			}
			
	///*
			$title = $resArray[0];
			$address=$resArray[1];
			$pic = $resArray[2];
			$html = $resArray[3];
			$ch1 = $resArray[4];
			//insert data to previous created table    /* values("$dataArray[$j][0]","$dataArray[$j][1]","$dataArray[$j][2]","$dataArray[$j][3]","$dataArray[$j][4]"); */
			$sql="insert into $dbtname(title,address,pic,html,ch1) 
			values('$title','$address','$pic','$html','$ch1')";
			mysql_query($sql,$link) or die("insert error :".mysql_error());

			$j++;
	//*/
		}
	}
//	print_r($dataArray);
//	echo $dataArray;
//	print_r($dataArray[0]);
	mysql_close($link);
?>