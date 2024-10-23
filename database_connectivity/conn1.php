<?php
$con=mysqli_connect("localhost:3306","root","","bca_stud");
if($con!=null)
{
    echo "connection success";
}
else
{
    echo "error like:";
}
?>