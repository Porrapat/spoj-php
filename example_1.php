<?php
$stdin = fopen('php://stdin', 'r');

$number_test_case = intval(fgets($stdin));

// echo $number_test_case;

for($i = 0; $i < $number_test_case; $i++)
{
    $n = intval(fgets($stdin));
    $line_m = fgets($stdin);

    // echo $line_m;

    $arr_m = explode(" ", $line_m);

    // for
    $sum = 0;
    for($j = 0; $j < $n; $j++)
    {
        $sum += intval($arr_m[$j]);
    }

    echo "Case #".$i.": ".$sum;
    echo "\n";



    // echo $n;
    // echo "\n";
    // echo "\n";
    // echo $i;
    // echo "\n";
}

fclose($stdin);