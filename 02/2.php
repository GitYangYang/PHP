<?php
//setting mysql database information 
$host = "localhost";
$user = "root";
$pwd = "root";
$dbname = "mydatabase";
// connect to mysql server
$link = mysql_connect($host, $user, $pwd) or die("Couldn't connect Mysql server!".mysql_error());

//create database
//mysql_create_db undefined
//mysql_create_db($dbname,$link) or die("Couldn't create database!<br/>");
$sql = "create database $dbname";
mysql_query($sql, $link) or die("Couldn't connect Mysql server!".mysql_error());

@mysql_select_db($dbname,$link);
@MySQL_query("SET NAMES 'UTF8'"); 

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
    $i = 0 ;$index=0;
    $resArray = array();
    $dataArray = array();

    //save data in array.
   foreach ($xml->children() as $list){
        foreach ($list -> children() as $node) {
        	$dataArray[$index]=$node;
        	$resArray[$i]=$dataArray[$index];
        	$index++;
        }
        $i++;      
    }

    //insert data to database from previous array.
    foreach ($resArray as $res) {
    	for($i=0;$i<;$i++){

    	}
    }
    $sql = "insert into $dbtname(title,address,pic,html,ch1) 
        values('$title','$address','$pic','html','ch1')" ;  
        mysql_query($sql,$link);
}
?>