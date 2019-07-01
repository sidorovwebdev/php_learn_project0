<?php

function getSortedArray(array $array, $start = 'start', $end = 'end'){
    $start = array_column($array, $start);
    $end = array_column($array, $end);
    array_multisort($start, SORT_DESC, $end, SORT_DESC, $array);
    return $array;
}