<?php
/*
	//db info
	$link=mysql_connect('localhost','root','root') or die("Connect eroor:".mysql_error());

	//init db
	$sql = "drop database my_db";
	@mysql_query($sql,$link);

	//create db
	$sql = 'create database my_db';
	mysql_query($sql,$link) or die('create my_db error:'.mysql_error());

	@mysql_select_db("my_db",$link);
	@mysql_query("SET NAMES 'UTF8'");
*/	
//XML file operation
	$xml = simplexml_load_file("../xml/hotel.xml");
/*	
	//create table
	$sql="create table hotel(title varchar(40) primary key,address varchar(40),pic varchar(40),html varchar(40),ch1 varchar(40))";
	mysql_query($sql,$link) or die("Couldn't create table!".mysql_error());
*/
	$resArray = array();
//	$resArray=array('title','address','pic','html','ch1');
	
	$dataArray = array();
	$j=0;
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
		
/*
		//insert data to previous created table
		$sql="insert into hotel('title','address','pic','html','ch1') 
		values($dataArray[j][0],$dataArray[j][1],$dataArray[j][2],$dataArray[j][3],$dataArray[j][4])";

		mysql_query($sql,$link);
*/
		echo $dataArray[$j][0];
		$j++;

	}
//	print_r($dataArray);
	
//	print_r($dataArray[0]);


?>