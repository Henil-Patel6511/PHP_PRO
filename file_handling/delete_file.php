<?php
$d=unlink("e:\\f1.txt");
if($d)
{
    echo "file successfully deleted";
}
else
{
    echo "file not deleted";
}
?>