<?php
$num = 56465;
$n = $num;
$rem;
$res = 0;
while($num != 0)
{
    $rem = $num%10;
    $res = $res*10 + $rem;
    $num = (int) ($num/10);
}
if($res == $n){
    echo "palindrome";
}
else
{
    echo "not palindrome";
}
?>