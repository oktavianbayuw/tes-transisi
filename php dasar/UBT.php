<?php
    $input = (string)readline('Masukan Kata: ');
    
    function ubt($str) {
      // unigram
      $unigram = preg_replace('#\s+#',',',trim($str));
      echo 'unigram : '.$unigram.'';
      echo "\r\n";
      
      // bigram and trigram
      $newStr = explode(' ', $str);
      $x = 0;
      $y = 0;
  		$bigram = '';
  		$trigram = '';
  		foreach ($newStr as $item) {
  			if ($x < 1) {
  				$bigram .= $item.' ';
  				$x++;
  			} else {
  				$bigram .= $item.', ';
  				$x = 0;
  			}
  			
  			if ($y < 2) {
  				$trigram .= $item.' ';
  				$y++;
  			} else {
  				$trigram .= $item.', ';
  				$y = 0;
  			}
  		}
		  $bigram = substr($bigram, 0, -1);
		  $trigram = substr($trigram, 0, -2);
		  echo 'bigram : '.$bigram.'';
		  echo "\r\n";
		  
		  echo 'trigram : '.$trigram.'';
		  echo "\r\n";
    }
    
    ubt($input);
?>