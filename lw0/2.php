<?php
$firstTime = '10:20:30';
$secondTime = '10:20:30';
$thirdTime = 0;
function sunTime(string $thirdTime) : string
{
    $correctChars = ' 0123456789:';
    for ($i = 0; $i < strlen($firstTime); $i++) {
        if (!strpos($correctChars, $firstTime[$i])) return 'ошибка';
    }
    for ($i = 0; $i < strlen($secondTime); $i++) {
        if (!strpos($correctChars, $secondTime[$i])) return 'ошибка';
    }
    return $thirdTime;
}
echo sunTime($thirdTime);