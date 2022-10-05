<?php
//passing by reference 
function bubble_sorting(&$arr)
{
    $swapped = true;
    while ($swapped) {
        $swapped = false;
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                list($arr[$i], $arr[$i + 1]) = array($arr[$i + 1], $arr[$i]);
                $swapped = true;
            }
        }
    }
}
$arr = [4, 2, 3, 1, 0, 5, -1];
bubble_sorting($arr);
print_r($arr);
