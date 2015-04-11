<?php 
	$xmlfiles = array(0=>'food1Data',
	1=>'food2Data',2=>'food3Data',
	3=>'food4Data',4=>'hotel',5=>'jingdian',
	6=>'shopping',7=>'yangshen',8=>'yule');
	//$index=0;
	$i=0;
	$resArray=array();
	$dataArray=array();
	foreach ($xmlfiles as $value){


	//
	
		$data = array();   //title
		$data1 = array();  //address
		$data2 = array();  //pic
		$data3 = array();  //html
		$data4 = array();  //ch1

		
		$xml = simplexml_load_file("../xml/".$value.".xml");
		foreach ($xml->children() as $list){
			//echo $list["id"]."<br/>";
			$index=0;
	        foreach ($list -> children() as $node) {
	        	$dataArray[$index]=$node;
	        	$resArray[$i]=$dataArray[$index];                         //bug   i not clear up
	        	$index++;
	        }

	        $i++;   
	    }
	    
	  //  print_r($resArray);
 /*   	$i=0;
	    foreach ($resArray[$i] as $res) {
	    	echo $res.'<br/>';

	    	$i++;
	    }
*/	
	    for ($j=0; $j < $i; $j++) { 
	    	echo $resArray[$j].'<br/>';
	    }
	    echo "---------------------------------------<br/>";
	}
	
?>