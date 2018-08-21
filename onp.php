<?php
function is_number($char) {
    return (($char == '.') || ($char >= '0' && $char <= '9') || ($char >= 'a' && $char <= 'z'));
}

function readnumber($string, $i) {
    $number = '';
    while (is_number($string{$i})) {
        $number .= $string{$i};
        $i++;
    }
    return $number;
}
function is_operator($char) {
    static $operators = array('+', '-', '/', '*','^', '%');
    return in_array($char, $operators);
}


function mathexp_to_rpn($mathexp) {
    $precedence = array(
        '(' => 0,
        '^' => 2,
        '-' => 3,
        '+' => 3,
        '*' => 6,
        '/' => 6,
        '%' => 6
    );

    $i = 0;
    $final_stack = array();
    $operator_stack = array();
    while ($i < strlen($mathexp)) {
        $char = $mathexp{$i};
        if (is_number($char)) {
            $num = readnumber($mathexp, $i);
            array_push($final_stack, $num);
            $i += strlen($num); continue;
        }
        if (is_operator($char)) {
            $top = end($operator_stack);
            if ($top && $precedence[$char] <= $precedence[$top]) {
                $oper = array_pop($operator_stack);
                array_push($final_stack, $oper);
            }
            array_push($operator_stack, $char);
            $i++; continue;
        }
        if ($char == '(') {
            array_push($operator_stack, $char);
            $i++; continue;
        }
        if ($char == ')') {
            // transfer operators to final stack
            do {
                $operator = array_pop($operator_stack);
                if ($operator == '(') break;
                array_push($final_stack, $operator);
            } while ($operator);
            $i++; continue;
        }
        $i++;
    }
    while ($oper = array_pop($operator_stack)) {
        array_push($final_stack, $oper);
    }
    return $final_stack;
}

function mathexp_to_rpm_to_str($mathexp)
{
    return implode(mathexp_to_rpn($mathexp));
}




$stdin = fopen('php://stdin', 'r');
// Get first line
$number_test_case = intval(fgets($stdin));

// echo $number_test_case;
// echo "\n";
for($test_case_i = 0; $test_case_i < $number_test_case; $test_case_i++)
{
    $line_m = fgets($stdin);    // Get third line
    // echo mathexp_to_rpm_to_str("((a+t)*((b+(a+c))^(c+d)))");
    echo mathexp_to_rpm_to_str($line_m);
    echo "\n";
}

fclose($stdin);