<?php
    $nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
    $changeToComma = preg_replace('#\s+#',',',trim($nilai));
    $removeDoubleQuote = str_replace('"', '', $changeToComma);
    $arr = explode(",", $removeDoubleQuote);

    // rata rata
    $avg = array_sum($arr)/count($arr);
    print_r($avg);

    // sorting array
    sort($arr);

    // 7 nilai terendah
    $getLowestNumber = array_slice($arr, 0, 7);
    print_r($getLowestValue);

    // 7 nilai tertinggi
    $getLargestNumber = array_slice($arr, -7);
    print_r($getLargestValue);
?>