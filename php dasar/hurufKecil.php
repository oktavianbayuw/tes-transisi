<?php
    $input = (string)readline('Masukan Kata: ');
    
    function countLowerCase($str) {
      return preg_match_all("/[a-z]/", $str);
    }
    
    echo ''.$input.' mengandung '.countLowerCase($input).' buah huruf kecil.';
?>