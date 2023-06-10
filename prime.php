<?php
$num = 2;
$count = 0;
for($i = 1; $i < $num ; $i++)
{
    if($num % $i == 0)
    $count++;
}
if($count == 1)
    echo "prime";
else
    echo "not prime";
?>