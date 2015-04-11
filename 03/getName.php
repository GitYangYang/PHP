<?php
	include 'example.php';
	$sxe = new SimpleXMLElement($xmlstr);
	
	echo $sxe->getName()."\n";
	
	foreach ($sxe->children() as $child)
	{
	echo $child->getName()."\n";
	}
/**
 * Result in browsr
 * movies movie
**/
 ?>