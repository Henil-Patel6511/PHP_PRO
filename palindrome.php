<?php
function isPalindrome($num) 
{
    $originalNum = $num;
    $reverseNum = 0;
    
    while ($num > 0) 
    {
        $digit = $num % 10;
        $reverseNum = ($reverseNum * 10) + $digit;
        $num = (int)($num / 10);
    }
    
    if ($originalNum == $reverseNum) 
    {
        return true;
    } 
    else 
    {
        return false;
    }
}

$number = 123; 
if (isPalindrome($number)) 
{
    echo $number . " is a palindrome number.";
} 
else 
{
    echo $number . " is not a palindrome number.";
}
?>
