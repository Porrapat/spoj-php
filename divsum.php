<?php

$time_start = microtime(true); 

$stdin = fopen('php://stdin', 'r');
// Get first line
$number_test_case = intval(fgets($stdin));

for($test_case_i = 0; $test_case_i < $number_test_case; $test_case_i++)
{
    $n = intval(fgets($stdin));    // Get next line

    if($n == 1)
    {
        echo 0;
        if($test_case_i < $number_test_case-1)
        {
            echo "\n";
        }
    }
    else
    {
        $sum = 0;
        $v = [];
        $t = 0;
        $sqrt_n = (int)sqrt($n);
        for ($i = 1; $i <= $sqrt_n; $i++)
        {
            if ($n % $i === 0)
            {
                // check if divisors are equal
                if ((int)($n / $i) === $i) 
                {
                    $sum += $i;
                }
                else
                {
                    $sum += $i;
    
                    // push the second 
                    // divisor in the vector
                    $v[$t++] = (int)($n / $i);
                }
            }
        }
    
        // The vector will be
        // printed in reverse
        for ($i = count($v) - 1; $i >= 0; $i--)
        {
            if($v[$i] !== $n)
            {
                $sum += $v[$i];
            }
        }

        echo $sum;
        if($test_case_i < $number_test_case-1)
        {
            echo "\n";
        }
    }
}

// function convert($size)
// {
//     $unit=array('b','kb','mb','gb','tb','pb');
//     return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
// }

// echo "\n";
// echo convert(memory_get_usage())."\n";

// $time_end = microtime(true);

// //dividing with 60 will give the execution time in minutes otherwise seconds
// $execution_time = ($time_end - $time_start);

// //execution time of the script
// echo 'Total Execution Time: '.$execution_time.' Seconds'."\n";

fclose($stdin);