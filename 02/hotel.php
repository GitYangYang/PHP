<?php 
	//read hotel.xml
	$filename="E:\YangYang\htdocs\xml\hotel.xml";
	$article_array = array();

	$dom = new DOMDocument('1.0','utf-8');
	$dom->load($filename);

	//get node
	$lists = $dom->getElementsByTagName('list');
	$headlines = array();

	foreach ($lists as $list) {
		$headline = array();
		if ($list->childNodes->length) {
			foreach ($list->childNodes as $i) {
				headline[$i -> nodeName] = $i->nodeValue;
			}
		}
		$headlines[] = $headline;
	}
	if(!empty($headlines)){
		$hc = 0;
		echo '<ul>';
		foreach ($headlines as $headline) {
			if(++$hc<=5){
				echo '<li>'
				.$headline['ch1'].'<br/>'.$headline['html'].'<br />'
				.$headline['pic'].'<br/>'.$headline['address'].'<br/>'.$headline['title'].'</li>';
			}
		}
		echo '</ul>';
	}
 ?>