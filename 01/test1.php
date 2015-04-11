<?php 
$host = "localhost";
$user = "root";
$pwd = "root";
$dbname = "yangyang";
$dbtable = "food";
// connect to database 
$con = mysql_connect($host, $user, $pwd) or die("Couldn't connect Mysql server!".mysql_error());
@MySQL_select_db($dbname,$con);
@MySQL_query("SET NAMES 'UTF8'"); 
$query = "select title,address,pic,html from ".$dbtable;
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
//	echo $resArray[$index];
	$index++;
}
//create xml file
	//version and coding
	$doc=new DOMDocument('1.0','utf-8');
	// display document in browser as plain text  
	// for readability purposes  
	//header("Content-Type:text/xml");  

	//formatOutput
	$doc->formatOutput = true;

	//creat root node
	$root = $doc->createElement($dbtable);
	$doc->appendChild($root);

	$key=1;
	foreach ($resArray as $res) {
     	// 建立food节点下子节点 
    	$record = $doc->createElement("list"); 
    	$root->appendChild($record);
    	//create attribute
    	$id = $doc->createAttribute("id");
    	$record->appendChild($id);
    	//create attribute value node
    	$idValue = $doc->createTextNode($key++);
    	$id->appendChild($idValue);
    	// 建立food节点下的各项  
     	for ($i = 0; $i < $fieldNum; $i++) {  
          // 表字段  
        	$node[$i] = $doc->createElement($dbtField[$i]);  
         // 表字段的值  
        	$node[$i]->appendChild($doc->createTextNode($res[$dbtField[$i]]));  
         	$record->appendChild($node[$i]); 

    }  
}  

 
	echo $doc->saveXML(); 
	$doc->save('yangshen.xml');
	//close database connection
	mysql_close($con);
?>