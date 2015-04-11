<?php  
    $link = mysql_connect("localhost","root","root") or die('Couln\'t connect to mysql : '.mysql_error());  
    @mysql_select_db("study",$link);
    @MySQL_query("SET NAMES 'UTF8'");
    $sql='create table yule(title varchar(40) primary key,address varchar(40),pic varchar(40),html varchar(40),ch1 varchar(40))';
	mysql_query($sql,$link) or die("Couldn't create table!".mysql_error());
    $xml = simplexml_load_file("../xml/yule.xml");  
    $title = "";  
    $address = "";
    $pic="";
    $html="";
    $ch1="";  
   foreach ($xml->children() as $child){  
       $i = 0 ;  
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
        $sql = "insert into hotel(title,address,pic,html,ch1) 
        values('$title','$address','$pic','html','ch1')" ;  
        mysql_query($sql,$link);  
    }  
?>  
