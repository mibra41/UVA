<!DOCTYPE html>
<html>

<body>
<?php 
    libxml_use_internal_errors(true);
    $xml = simplexml_load_file("friends.xml") or die("Error!");
    if ($xml === false) {
        foreach (libxml_get_errors() as $error) {
            echo "$error->message <br/>";
        }
    }


    echo $xml->friend[0]->name . "<br/>";
    echo $xml->friend[0]->email . "<br/>";

    foreach($xml->children() as $friends) {
        echo $friends->name . ", " . $friends->email . "<br/>";
    }

    // attributes
    echo $xml->friend[0]['met'] . ", " . $xml->friend[0]['current'] . "<br/>";

    // all attributes
    foreach($xml->children() as $friends) {
        
    }

?>


</body>


</html>