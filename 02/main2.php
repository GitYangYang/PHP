<?php
//setting mysql database information 
$host = "localhost";
$user = "root";
$pwd = "root";
$dbname = "mytest";
// connect to mysql server
$link = mysql_connect($host, $user, $pwd) or die("Couldn't connect Mysql server!".mysql_error());
echo 'Connected successfully<br/>';

//create database
//mysql_create_db undefined
//mysql_create_db($dbname,$link) or die("Couldn't create database!<br/>");
$sql = "create database $dbname";
mysql_query($sql, $link) or die("Couldn't connect Mysql server!".mysql_error());

echo 'create database successfully<br/>';


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
    $i = 0 ;    
   	foreach ($xml->children() as $child){  
       
        foreach ($child->children() as $kid){  
        	switch($i){
        		case 0:
        			$title = $kid;
        			$i++;
        			break;
        		case 1:
        			$address = $kid;
        			$i++;
        			break;
        		case 2:
        			$pic = $kid;
        			$i++;
        			break;
        		case 3:
        			$html = $kid;
        			$i++;
        			break;
        		case 4:
        			$ch1 = $kid;
        			$i=0;
        			break;
        	}
        }  
        $sql = "insert into $dbtname(title,address,pic,html,ch1) 
        values('$title','$address','$pic','html','ch1')" ;  
        mysql_query($sql,$link);
    }
}
?>