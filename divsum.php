<?php
$stdin = fopen('php://stdin', 'r');
// Get first line
$number_test_case = intval(fgets($stdin));

for($test_case_i = 0; $test_case_i < $number_test_case; $test_case_i++)
{
    $n = intval(fgets($stdin));    // Get next line

    $sum = 0;
    $v = [];
    $t = 0;
    $sqrt_n = (int)sqrt($n);
    for ($i = 1; $i <= $sqrt_n; $i++)
    {
        if ($n % $i == 0)
        {
            // check if divisors are equal
            if ((int)$n / $i == $i) 
            {
            }
            else
            {
                $sum += $i;
 
                // push the second 
                // divisor in the vector
                $v[$t++] = (int)$n / $i;
            }
        }
    }
 
    // The vector will be
    // printed in reverse
    for ($i = count($v) - 1; $i >= 0; $i--)
    {
        if($v[$i] != $n)
        {
            $sum += $v[$i];
        }
    }

    echo $sum;
    if($test_case_i < $number_test_case-1)
    {
        echo PHP_EOL;
    }
}

fclose($stdin);