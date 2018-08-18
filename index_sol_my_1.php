<?php
$stdin = fopen('php://stdin', 'r');

$sum = 0;
while (true) {
    $input = fgets($stdin);
    if ($input == -1) {
        echo $sum;
        break;
    } else {

        $sum += intval($input);
        // echo $input;
    }
}
fclose($stdin);
