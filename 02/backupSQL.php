<?php 
$host = "localhost";
$user = "root";
$pwd = "root";
$dbname = "mydatabase";
$filename=date("Y-m-d_H-i-s")."-".$dbname.".sql"; 
header("Content-disposition:filename=".$filename);//所保存的文件名 
header("Content-type:application/octetstream"); 
header("Pragma:no-cache"); 
header("Expires:0"); 

//备份数据 
$i = 0; 
$crlf="\r\n"; 
global $dbconn; 
$dbconn = mysql_connect($host,$username,$pwd]);//数据库主机，用户名，密码 
$db = mysql_select_db($dbname,$dbconn); 
mysql_query("SET NAMES 'utf8'"); 
$tables =mysql_list_tables($dbname,$dbconn); 
$num_tables = @mysql_numrows($tables); 
print "-- filename=".$filename; 
while($i < $num_tables) 
{ 
$table=mysql_tablename($tables,$i); 
print $crlf; 
echo get_table_structure($dbname, $table, $crlf).";$crlf$crlf"; 
//echo get_table_def($dbname, $table, $crlf).";$crlf$crlf"; 
echo get_table_content($dbname, $table, $crlf); 
$i++; 
} 

/*新增的获得详细表结构*/ 
function get_table_structure($db,$table,$crlf) 
{ 
global $drop; 

$schema_create = ""; 
if(!empty($drop)){ $schema_create .= "DROP TABLE IF EXISTS `$table`;$crlf";} 
$result =mysql_db_query($db, "SHOW CREATE TABLE $table"); 
$row=mysql_fetch_array($result); 
$schema_create .= $crlf."-- ".$row[0].$crlf; 
$schema_create .= $row[1].$crlf; 
Return $schema_create; 
} 

/* 
//原来别人的取得数据库结构，但不完整 
function get_table_def($db,$table,$crlf) 
{ 
global $drop; 

$schema_create = ""; 
if(!empty($drop)) 
$schema_create .= "DROP TABLE IF EXISTS `$table`;$crlf"; 

$schema_create .= "CREATE TABLE `$table` ($crlf"; 
$result = mysql_db_query($db, "SHOW full FIELDS FROM $table"); 
while($row = mysql_fetch_array($result)) 
{ 
$schema_create .= " `$row[Field]` $row[Type]"; 

if(isset($row["Default"]) && (!empty($row["Default"]) || $row["Default"] == "0")) 
$schema_create .= " DEFAULT '$row[Default]'"; 
if($row["Null"] != "YES") 
$schema_create .= " NOT NULL"; 
if($row["Extra"] != "") 
$schema_create .= " $row[Extra]"; 
if($row["Comment"] != "") 
$schema_create .= " Comment '$row[Comment]'"; 
$schema_create .= ",$crlf"; 
} 
$schema_create = ereg_replace(",".$crlf."$", "", $schema_create); 
$result = mysql_db_query($db, "SHOW KEYS FROM $table"); 
while($row = mysql_fetch_array($result)) 
{ 
$kname=$row['Key_name']; 
if(($kname != "PRIMARY") && ($row['Non_unique'] == 0)) 
$kname="UNIQUE|$kname"; 
if(!isset($index[$kname])) 
$index[$kname] = array(); 
$index[$kname][] = $row['Column_name']; 
} 

while(list($x,$columns) = @each($index)) 
{ 
$schema_create .= ",$crlf"; 
if($x == "PRIMARY") 
$schema_create .= " PRIMARY KEY (".implode($columns,", ") . ")"; 
elseif (substr($x,0,6) == "UNIQUE") 
$schema_create .= " UNIQUE ".substr($x,7)." (" . implode($columns, ", ") . ")"; 
else 
$schema_create .= " KEY $x (" . implode($columns, ", ") . ")"; 
} 

$schema_create .= "$crlf)"; 
return (stripslashes($schema_create)); 
} 
*/ 

//获得表内容 
function get_table_content($db, $table, $crlf) 
{ 
$schema_create = ""; 
$temp = ""; 
$result = mysql_db_query($db, "SELECT * FROM $table"); 
$i = 0; 
while($row = mysql_fetch_row($result)) 
{ 
$schema_insert = "INSERT INTO `$table` VALUES ("; 
for($j=0; $j<mysql_num_fields($result);$j++) 
{ 
if(!isset($row[$j])) 
$schema_insert .= " NULL,"; 
elseif($row[$j] != "") 
$schema_insert .= " '".addslashes($row[$j])."',"; 
else 
$schema_insert .= " '',"; 
} 
$schema_insert = ereg_replace(",$", "",$schema_insert); 
$schema_insert .= ");$crlf"; 
$temp = $temp.$schema_insert ; 
$i++; 
} 
return $temp; 
} 
?> 