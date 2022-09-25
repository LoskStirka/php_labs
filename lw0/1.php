<?php
$calculatingString = "";
function calculator(string $calculatingString) : string
{
    $correctChars = ' 0123456789+-';
    for ($i = 0; $i < strlen($calculatingString); $i++) {
        if (!strpos($correctChars, $calculatingString[$i])) return 'ошибка ввода';
    }
    for ($i = 0; $i < strlen($calculatingString); $i++) {

        if (is_numeric($calculatingString[$i]))
            $numbers[$i] = $calculatingString[$i];
    }
    $sum = 0;
    foreach (str_split($calculatingString) as $key => $value) {
        if ($key === 0) {
            if ($value === '+') $sum += $numbers[$key] + $numbers[$key + 1];
            if ($value === '-') $sum += $numbers[$key] - $numbers[$key + 1];
        } else {
            if ($value === '+') $sum += $numbers[$key + 1];
            if ($value === '-') $sum -= $numbers[$key + 1];
        }
    }
    $calculatingString = $sum;
    return $calculatingString;
}
echo calculator($argv[1]);