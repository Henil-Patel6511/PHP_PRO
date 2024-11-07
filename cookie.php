<?php

$uname=$_GET['uname'];
$pass=$_GET['pass'];

setCookie("a1",$uname);

include "header_ex.html";
echo "<br><br>user name is:".$uname;
echo "<br><br>password is:".$pass;

echo "<br><br><br>";

if(!isset($_COOKIE['a1']))
{
	echo "cookie is not found";
}
else
{
	echo "<br><br>";
	echo "<br>cookie value is:".$_COOKIE['a1'];
}

include "footer_ex.html";

?>