<?php 
$host = "localhost";
$user = "root";
$pwd = "root";
$dbname = "yangyang";
$dbtable = "food";
// connect to database 
$con = mysql_connect($host, $user, $pwd) or die("Couldn't connect Mysql server!".mysql_error());
@MySQL_select_db($dbname,$con);
@MySQL_query("SET NAMES 'UTF-8'"); 
$query = "select * from ".$dbtable;
$result = @MYSQL_QUERY($query) or die("invalid query:".mysql_error());

$fieldNum = mysql_num_fields($result);
$resultNum = count($result);

$dbtField = array ();

for($i =0;$i<$fieldNum;$i++){
	$dbtField[$i] = mysql_field_name($result, $i);
}

//get record array
$resArray = array ();
$index=0;
while($row = mysql_fetch_array($result)){
	$resArray[$index] = $row;
	$index++;
}

//create xml file
	//version and coding
	$doc=new DOMDocument('1.0','utf-8');
	// display document in browser as plain text  
	// for readability purposes  
	header("Content-Type: text/xml");  

	//formatOutput
	$doc->formatOutput = true;

	//creat root node
	$root = $doc->createElement($dbname);
	$doc->appendChild($root);

	foreach ($resArray as $res) {  
     	// 建立food节点下子节点list id  
    	$record = $doc->createElement($dbtable);  
    	$food->appendChild($record);  
    	// 建立food节点下的各项  
     	for ($i = 0; $i < $fieldNum; $i++) {  
          // 表字段  
        	$node[$i] = $doc->createElement($dbtField[$i]);  
         // 表字段的值  
        	$node[$i]->appendChild($doc->createTextNode($res[$dbtField[$i]]));  
         	$record->appendChild($node[$i]); 
         	echo "</ch1>";
    }  
}  

 
	echo $doc->saveXML(); 
	$doc->save('./yangshen.xml');
	//close database connection
	mysql_close($con);
?>