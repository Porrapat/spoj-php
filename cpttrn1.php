<?php

// Use PHP standard input.
$stdin = fopen('php://stdin', 'r');

// Get first line
$number_test_case = intval(fgets($stdin));

for($round = 0; $round < $number_test_case; $round++)
{
    $line_m = fgets($stdin);    // Get third line

    $arr_m = explode(" ", $line_m);

    $num_row = $arr_m[0];
    $num_col = $arr_m[1];

    $print_star = true;

    for($i = 0; $i < $num_row; $i++)
    {
        if($i % 2 === 0)
        {
            $print_star = true;
        }
        else
        {
            $print_star = false;
        }
        for($j = 0; $j < $num_col; $j++)
        {
            if($print_star)
            {
                echo "*";
            }
            else
            {
                echo ".";
            }
            $print_star = !$print_star;
        }
        echo "\n";
    }
    echo "\n";
}

fclose($stdin);