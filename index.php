<?php
$stdin = fopen('php://stdin', 'r');
while (true) {
    $input = fgets($stdin);
    if ($input == 42) {
        break;
    } else {
        echo $input;
    }
}
fclose($stdin);