<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
while (true) {
    $input = trim(fgets($stdin));
    if ($input == 42) {
        flush();
        break;
    } else {
        echo $input;
        echo "\n";
    }
}
fclose($stdin);