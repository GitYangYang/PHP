<?php
$xml = new SimpleXMLElement(
'<person>
//
 <child role="son">
      <child role="daughter"/>
 </child>
 //
 <child role="daughter">
      <child role="son">
          <child role="son"/>
      </child>
 </child>
</person>');
$a ="1";$b="2";$c="3";
foreach ($xml->children() as $second_gen) {
    echo "<br/>".$a;
    echo ' The person begot a ' . $second_gen['role'];
    echo "<br/>".$a;
    foreach ($second_gen->children() as $third_gen) {
        echo "<br/>".$b;
        echo ' who begot a ' . $third_gen['role'] . ';';
        echo "<br/>".$b;
        foreach ($third_gen->children() as $fourth_gen) {
            echo "<br/>".$c;
            echo ' and that ' . $third_gen['role'] .
                ' begot a ' . $fourth_gen['role'];
                echo "<br/>".$c;
        }
    }
}
?>