<?php

$host = "localhost";
$user = "root";
$pwd = "root";
$dbname = "yangyang";
$dbtable = "food";

// connect to database 
$con = mysql_connect($host, $user, $pwd) or die ("Couldn't connect Mysql server!".mysql_error());
@MySQL_select_db($dbname,$con);
@MySQL_query("SET NAMES 'UTF-8'"); 
$query = "select * from ".$dbtable;
$result = @MYSQL_QUERY($query) or die("invalid query:".mysql_error());

while($rom = mysql_fetch_array($result))
{
	$arr[] = array(
	'title'=>$row['title']),
	'address'=>$row['address'],
	'pic'=>$row['pic'],
	'html'=>$row['html']
	);
}

//create xml file
//version and coding
	$doc=new DOMDocument('1.0','utf-8');

	//formatOutput
	$doc->formatOutput=true;

	//creat food node
	$r = $doc->createElement("food");
	$doc->appendChild($r);

	$i=1;
	foreach($arr as $dat){
		$b = $doc->createElement("list id=$i"); 

	    $title = $doc->createElement("title"); 
	    $title->appendChild($doc->createTextNode($dat['title'])); 
	    $b->appendChild($title); 
	 
	    $address = $doc->createElement("address"); 
	    $address->appendChild($doc->createTextNode($dat['address'])); 
	    $b->appendChild($address); 

	    $pic = $doc->createElement("pic"); 
	    $pic->appendChild($doc->createTextNode($dat['pic'])); 
	    $b->appendChild($pic);
	 
	    $html = $doc->createElement("html"); 
	    $html->appendChild($doc->createTextNode($dat['html'])); 
	    $b->appendChild($html); 
	    </ch1>

	    $i=$i+1;
	    $r->appendChild($b); 
	} 
 
	echo $doc->saveXML(); 
	$dic->save('yangshen.xml');
	//close database connection
	mysql_close($con);
?>