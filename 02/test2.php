<?php 
//xml array : all xml files
$xmlfiles = array(0=>'food1Data',
	1=>'food2Data',2=>'food3Data',
	3=>'food4Data',4=>'hotel',5=>'jingdian',
	6=>'shopping',7=>'yangshen',8=>'yule');
foreach ($xmlfiles as $value) {
	$dbtname = $value;

	//create table
	$sql="create table $dbtname(title varchar(40) primary key,address varchar(40),pic varchar(40),html varchar(40),ch1 varchar(40))";
	mysql_query($sql,$link) or die("Couldn't create table!".mysql_error());

	//load xml file
	$xml = simplexml_load_file("../xml/".$value.".xml");

	//
	$title = "";  
    $address = "";
    $pic = "";
    $html = "";
    $ch1 = "";
    $i = 0 ; 
    //
    $dataArray = array()();
    $i=0;$j=0;
    foreach ($xml ->children() as $list) {
    	foreach ($list->children() as $node) {
    		$dataArray[$i->$j] = $node;
    		j++;
    	}
    	i++;
    }
 ?>