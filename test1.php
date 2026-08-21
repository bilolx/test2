<?php

declare(strict_types=1);

/* function checkStats(string $dateOfBirth, int $cupsQuantity): string
{
    $ageGapInSeconds = (time() - strtotime($dateOfBirth));
    $ageGapInYears = floor($ageGapInSeconds/31536000);
    if ($ageGapInYears < 16) {
        throw new Exception("Access denied. Player is under 16. <br>");
    }

    if ($cupsQuantity < 15000) {
        throw new Exception("Access denied: Not enough trophies. <br>");
    }

    return "Welcome to the tournament, champion! <br>";
}

try {
    $player1 = checkStats("2012-05-10", 16000);
    echo $player1;

    $player2 = checkStats("2000-05-10", 16000);
    echo $player2;

    $player3 = checkStats("2002-05-10", 1000);
    echo $player3;

    $player4 = checkStats("2016-05-10", 200);
    echo $player4;
} catch (Exception $e) {
   echo  "<span style='color: red;'>{$e->getMessage()}</span>"; 

} finally {
    echo "Registration attempt logged. <br>";
}

echo 2; */

include 'functiown.php';
require 'functioned.php';