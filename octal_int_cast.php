<?php

function octal_int_cast($str) {
	
	$str 	= strtolower((string)$str);
    $length = strlen($str);
    
    $returnVal = '';
    
    for($i = 0; $i < $length; $i++) {
    
        $ord = ord($str[$i]); 
    
        if ($ord === 48) {
	
			if ($returnVal === '') {
				
				continue;
			
			} else {
			
				$returnVal .= $str[$i];
				
			}
			
		} else if ($ord > 48 && $ord < 56) {
            
            $returnVal .= $str[$i];
        
        } else {
        
            break;
        
        }
    }
    return (strlen($returnVal) > 0) ? $returnVal : 0;
}

?>
