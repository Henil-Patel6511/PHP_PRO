<?php
//Way 1:
$sdata=array("sid"=>007,"sname"=>"Thomas Shelby","sadd"=>"UK");
echo $sdata["sid"]."<br>";
echo $sdata["sname"]."<br>";
echo $sdata["sadd"]."<br>";

foreach($sdata as $s)
{
    echo "<br>";
    echo $s;
}

//Way 2:
$edata["eid"]=009;
$edata["dept"]="admin";
$edata["salary"]=5000000;
echo "eid=".$edata["eid"]."<br>";
echo "department=".$edata["dept"]."<br>";
echo "salary=".$edata["salary"]."<br>";
?>