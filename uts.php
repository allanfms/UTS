<?php 
$file = fopen("db.html","r"); 
while(! feof($file)) 
 { 
 echo fgets($file); 
 } 
fclose($file); 
?>