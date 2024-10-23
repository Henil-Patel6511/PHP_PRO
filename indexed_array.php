<?php
//Way 1:
$sname=array("a1","b1","c1");
echo $sname[0]."<br>";
echo $sname[1]."<br>";
echo $sname[2]."<br>";

//Way 2:
$rno[0]=007;
$rno[1]=009;
$rno[2]=001;
// echo $rno[0]."<br>";
// echo $rno[1]."<br>";
// echo $rno[2]."<br>";

for($i=0;$i<=2;$i++)
{
    echo "rollno is=".$rno[$i]."<br>";
}
?>