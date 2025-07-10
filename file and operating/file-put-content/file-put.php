<?php
$file ='people.txt';
$current =file_get_contents($file);
$current .="this is a new person\n";
file_put_contents( $file,  $current);






?>