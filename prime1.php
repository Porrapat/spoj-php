<?php

$time_start = microtime(true); 

$stdin = fopen('php://stdin', 'r');
// Get first line
$number_test_case = intval(fgets($stdin));

// echo $number_test_case;
// echo "\n";
for($test_case_i = 0; $test_case_i < $number_test_case; $test_case_i++)
{
    // $n = intval(fgets($stdin)); // Get second line
    $line_m = fgets($stdin);    // Get third line

    $arr_m = explode(" ", $line_m);

    $first = $arr_m[0];

    $second = $arr_m[1];


    for($n = $first; $n <= $second; $n++)
    {
        if($n <= 1)
        {
            continue;
        }
        else if($n <= 3)
        {
            echo $n."\n";
        }
        else if($n % 2 == 0 || $n % 3 == 0)
        {
            continue;
        }
        else
        {
            $i = 5;
            $to_return = true;
            while($i * $i <= $n)
            {
                if(($n % $i == 0) || ($n % ($i + 2) == 0))
                {
                    $to_return = false;
                    break;
                }
                $i = $i + 6;
            }

            if($to_return == true)
            {
                echo $n."\n";
            }
        }
        // if n ≤ 1
        //     return false
        // else if n ≤ 3
        //     return true
        // else if n mod 2 = 0 or n mod 3 = 0
        //     return false
        // let i ← 5
        // while i * i ≤ n
        //     if n mod i = 0 or n mod (i + 2) = 0
        //         return false
        //     i ← i + 6
        // return true
        
    }

    // echo $first." ".$second;

    if($test_case_i < $number_test_case-1)
    {
        echo "\n";
    }
}

fclose($stdin);