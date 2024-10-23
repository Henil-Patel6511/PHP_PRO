<?php
$f=fopen("e:\\f1.txt","r");

if($f)
{
    echo "your file open successfully";
}
else
{
    echo "file is not open";
}

fclose($f);
?>