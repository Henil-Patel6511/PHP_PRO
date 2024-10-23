<?php
$f=fopen("e:\\f1.txt","r");
$r=fread($f,filesize("e:\\f1.txt"));
echo $r;
fclose($f);
?>