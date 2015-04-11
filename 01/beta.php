<?php 
$doc=new DOMDocument();
$doc->load('test3.xml');
echo $doc->saveXML();
$doc->save('beta.xml');
//returns the number of bytes written or FALSE if an error occurred.
 ?>