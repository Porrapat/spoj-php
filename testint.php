<?php
$stdin = fopen('php://stdin', 'r');
// Get first line
$n = intval(fgets($stdin));
$m = intval(fgets($stdin));

echo $n + $m;
echo "\n";

fclose($stdin);