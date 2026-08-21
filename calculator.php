<?php
declare(strict_types=1);

function calculator(int|float $a, int|float $b, string $action): mixed
{
    $answer = match($action) {
        '+' => $a+$b,
        '-' => $a-$b,
        '*' => $a*$b,
        '/' => $a/$b,
        
        default => 'ERROR!'


    };

    return $answer;
}

$try1 = calculator(4, 5, '+');
echo $try1 . '<br>';

$try2 = calculator(4, 5, '-');
echo $try2 . '<br>';

$try3 = calculator(4, 5, '*');
echo $try3 . '<br>';

$try4 = calculator(4, 5, '/');
echo $try4 . '<br>';

$try5 = calculator(4, 1, '/');
echo $try5 . '<br>';