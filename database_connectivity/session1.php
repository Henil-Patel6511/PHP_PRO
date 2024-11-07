<html>
<body>
<?php

$uname=$_GET['uname'];
$pass=$_GET['pass'];

session_start();

$_SESSION['user']=$uname;
echo "<br>username is:".$uname;
echo "<br><br>:";
echo "password is:".$pass;


if(!isset($_SESSION['user']))
{
	echo "<br><br>session not created";
}
else
{
	echo "<br><br>session value is:".$_SESSION['user'];
	echo "<br><br>session id=".session_id();
}

include "footer_ex.html";

?>

<a href="session2.php">go to next page</a>
</body>
</html>


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

?>

// if($r)
// {
//     // echo "record inserted successfuly";
//     echo "record updated successfully";
// }
