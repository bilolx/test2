<?php

/* $ageGap = floor(time() - strtotime('2008.05.22'));
     $ageGap1 = date('Y', $ageGap);
echo $ageGap1;*/


$ageGap = floor(time() - strtotime('22-05-2002'));
$gap1 = date($ageGap/31536000);
echo floor($gap1);

echo 9;
echo 4;