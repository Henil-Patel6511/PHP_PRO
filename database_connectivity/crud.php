<?php
include "conn1.php";

// $q="insert into student (sid,sname,sadd) values(102,'Destroyer','a1')";

$q="update student set sname='def' where sid=101";

$q1="select * from student";

$r=mysqli_query($con,$q1);
$n=mysqli_num_rows($r);
if($n>0)
{
    while($x=mysqli_fetch_assoc($r))
    {
        echo "sid= {$x['sid']}<br>";
        echo "sname= {$x['sname']}<br>";
        echo "saddress= {$x['sadd']}<br>";
        echo "-----------------<br>";
    }
    echo "record updated successfully";
}



// if($r)
// {
//     // echo "record inserted successfuly";
//     echo "record updated successfully";
// }

?>