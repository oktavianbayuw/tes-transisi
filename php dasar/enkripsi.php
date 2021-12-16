<?php
    $input = (string)readline('Masukan Kata: ');
    function enkripsi($str) {
      $seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
      shuffle($seed);
      $rand = '';
      foreach (array_rand($seed, strlen($str)) as $k) $rand .= $seed[$k];
      echo $rand;
    }
    enkripsi($input);
?>