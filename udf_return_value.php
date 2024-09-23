<?php
function even_odd($x)
{
    if($x%2==0)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
$y=even_odd(8);
if($y==1)
{
    echo "even";
}
else
{
    echo "odd";
}
?>
