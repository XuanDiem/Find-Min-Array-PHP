<?php
$mang = array(0, -1,-2, 3, 4, 5, 6, 7, 8);

function searchMinArray($array)
{
    $min = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($min > $array[$i]) {
            $min = $array[$i];
        }
    }
    return $min;
}

echo searchMinArray($mang);
?>
