Example #5 Using attributes<br/>

So far, we have only covered the work of reading element names and their values. SimpleXML can also access element attributes. Access attributes of an element just as you would elements of an array.
<br/>
<?php
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);

/* Access the <rating> nodes of the first movie.
 * Output the rating scale, too. */
foreach ($movies->movie[0]->rating as $rating) {
    switch((string) $rating['type']) { // Get attributes as element indices
    case 'thumbs':
        echo $rating, ' thumbs up';
        break;
    case 'stars':
        echo $rating, ' stars';
        break;
    }
}
?>
<br/>
The above example will output:<br/>
7 thumbs up5 stars