<?php
$xml =<<<EOT
<?xml version="1.0"?>
<config>
  <section id="section1">
   <param name="param1">value1</param>
   <param name="param2">value2</param>
  </section>
  <section id="section2">
   <param name="param3">value3</param>
  </section>
</config>
EOT;

$dom = new DomDocument;
$dom->preserveWhiteSpace = FALSE;
$dom->loadXML($xml);
$params = $dom->getElementsByTagName('param');

foreach ($params as $param) {
       echo $param -> getAttribute('name').'<br/>';
}
?>
