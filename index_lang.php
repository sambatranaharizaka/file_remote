<?php
$chemin = './';
$elements = glob($chemin . '*', GLOB_MARK);
foreach($elements as $element){
    echo basename($element),"<br>";
}
?>
