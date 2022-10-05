<?php
$arr = [3, 1, 4, 2, 5];
for ($i = 0; $i < count($arr); $i++) {
    $small = $i;
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$j] < $arr[$small]) {
            $small = $j;
        }
    }
    list($arr[$small], $arr[$i]) = array($arr[$i], $arr[$small]);
}
print_r($arr);
