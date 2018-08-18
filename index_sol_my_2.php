<?php
$fp = fopen("php://stdin", "r");
fscanf($fp, "%d\n", $count);
$numbers = explode(" ", trim(fgets($fp)));
foreach ($numbers as &$number)
{
    $number = intval($number);
}
sort($numbers);
echo $count;