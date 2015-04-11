<?php
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);

/* For each <character> node, we echo a separate <name>. */
foreach ($movies->movie->characters->character as $character) {
	echo $character->name, ' played by ', $character->actor, '<br/>';
/*    echo $character->name, ' played by ', $character->actor, PHP_EOL;
   PHP_EOL 换行符
   unix 系列用\n，windows系列用\r\n，mac用\r
   php中用PHP_EOL替代，提高代码的源代码可移植性
*/
}

?>
/*
Example #4 Accessing non-unique elements in SimpleXML<br/>
When multiple instances of an element exist as children of a single parent element, normal iteration techniques apply.<br/>

The above example will output:<br/>
Ms. Coder played by Onlivia Actora<br/>
Mr. Coder played by El ActÓr<br/>

Note:<br/>
Properties ($movies->movie in previous example) are not arrays. They are iterable and accessible objects.<br/>
*/