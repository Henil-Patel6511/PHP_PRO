<?php
function ref1(&$s)
{
    $s.="har har mahadev";
}
$x="hello everyone<br>";
ref1($x);
echo $x;
?>