<?php

// To use it on unix system with PHP command line
// php -v
// cat example_1.txt | php example_1.php

// Use PHP standard input.
$stdin = fopen('php://stdin', 'r');

// Get first line
$number_test_case = intval(fgets($stdin));

for($i = 0; $i < $number_test_case; $i++)
{
    $n = intval(fgets($stdin)); // Get second line
    $line_m = fgets($stdin);    // Get third line

    $arr_m = explode(" ", $line_m);

    $sum = 0;
    for($j = 0; $j < $n; $j++)
    {
        $sum += intval($arr_m[$j]);
    }

    // Print output each line.
    echo "Case #".$i.": ".$sum;
    echo "\n";
}

fclose($stdin);