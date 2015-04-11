<?php
#Basic_SimpkeXML_usage  Example #3 Getting <line>
/*
	Accessing elements within an XML document that contain characters not permitted
under PHP's naming convention (e.g. the hyphen) can be accomplished by encapsulating the element name within braces and the apostrophe.
*/
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);

echo $movies->movie->{'great-lines'}->line;

//The above example will output:
//PHP solves all my web problems
?>