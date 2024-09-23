<?php
function compare_numbers($a, $b)
{
    if ($a > $b) 
    {
        return "$a is bigger<br>\n$b is smaller";
    } else 
    {
        return "$b is bigger<br>\n$a is smaller";
    }
}

$result = compare_numbers(7, 11);
echo $result;
?>
