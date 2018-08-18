<?php
$stdin = fopen('php://stdin', 'r');
// Get first line
$number_test_case = intval(fgets($stdin));

for($test_case_i = 0; $test_case_i < $number_test_case; $test_case_i++)
{
    $n = intval(fgets($stdin));    // Get next line

    $sum = 0;
    for($i = 1; $i< $n; $i++)
    {
        if($n % $i == 0)
        {
            $sum += $i;
        }
    }
    echo $sum;
    echo "\n";
}

fclose($stdin);