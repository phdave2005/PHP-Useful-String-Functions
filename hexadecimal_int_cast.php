<?php

function hexadecimal_int_cast($str) {
	
	$str 	= strtolower((string)$str);
    $length = strlen($str);
    
    $returnVal = '';
	
	$firstX = false;
    
    for($i = 0; $i < $length; $i++) {
    
        $ord = ord($str[$i]); 
    
        if ($ord === 48) {
	
			if ($returnVal === '') {
				
				continue;
			
			} else {
			
				$returnVal .= $str[$i];
				
			}
			
		} else if (($ord > 48 && $ord < 58) || ($ord > 96 && $ord < 103)) {
            
            $returnVal .= $str[$i];
        
        } else if ($str[$i] === 'x' && !$firstX) {
			
			$firstX = true;
			
			continue;
			
		} else {
        
            break;
        
        }
    }
    return (strlen($returnVal) > 0) ? $returnVal : 0;
}

?>
