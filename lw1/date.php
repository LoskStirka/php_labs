<?php
function sumTime(string $firstString, string $secondString) : string
{
    $correctChars = ' 0123456789:';
    for ($i = 0; $i < strlen($firstString); $i++) {
        if (!strpos($correctChars, $firstString[$i])) return 'ошибка ввода';
    }
    for ($i = 0; $i < strlen($secondString); $i++) {
        if (!strpos($correctChars, $secondString[$i])) return 'ошибка ввода';
    }
    $firstArr = explode(":", $firstString);
    $secondArr = explode(":", $secondString);
    for ($i = 0; $i < 3; ++$i) {
        $thirdArr[$i] = $firstArr[$i] + $secondArr[$i];
    }
    while ($thirdArr[0] >= 24) {
        $thirdArr[0] = $thirdArr[0] - 24;
    }
    while ($thirdArr[1] >= 60) {
        $thirdArr[1] = $thirdArr[1] - 60;
    }
    while ($thirdArr[2] >= 60) {
        $thirdArr[2] = $thirdArr[2] - 60;
    }
    $thirdString = implode(":", $thirdArr);
    return $thirdString;
}
echo sumTime($argv[1], $argv[2]);