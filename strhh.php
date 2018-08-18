<?php
$stdin = fopen('php://stdin', 'r');
// Get first line
$n = intval(fgets($stdin));

for($i = 0; $i<$n; $i++)
{
    $str = trim(fgets($stdin));    // Get next line
    // echo $str;

    $arr_str = str_split($str);
    $arr_str_count = count($arr_str);

    $arr_str_div_2 = $arr_str_count / 2;


    for($j = 0; $j < $arr_str_div_2; $j++)
    {
        if($j % 2 == 0)
        {
            echo $arr_str[$j];
        }
    }

    if($i < $n-1)
    {
        echo "\n";
    }
}

fclose($stdin);