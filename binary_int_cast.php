<?php

function binary_int_cast($str) {

	$str 	= (string)(strtolower($str));
    $length = strlen($str);

    $returnVal = '';
	
	$firstB = false;

    for($i = 0; $i < $length; $i++) {

        $ord = ord($str[$i]); 

        if ($ord === 48) {

			if ($returnVal === '') {
				
				continue;
			
			} else {
			
				$returnVal .= $str[$i];
				
			}

		} else if ($ord === 49) {

            $returnVal .= $str[$i];

        } else if ($str[$i] === 'b' && !$firstB) {
			
			$firstB = true;
			
			continue;
			
		} else {

            break;

        }

    }

    return (strlen($returnVal) > 0) ? $returnVal : 0;

}

?>
