<?php
$directory = dirname(__FILE__);

$files = glob($directory . '/*');

foreach ($files as $file) {
    echo basename($file) . "<br>";
}
?>
