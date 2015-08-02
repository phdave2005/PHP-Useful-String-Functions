<?php 
function str_clip($str, $clipStr, $multiple, $side) {
	
    $clippedStr = (string)$str;
    $clippedStrLength = strlen($clippedStr);
    $reverseStr = strrev($clippedStr);
    $clipStr = (string)$clipStr;
    $clipLength = strlen($clipStr);
    $reverseClipStr = strrev($clipStr);
	
    
    if ($clippedStrLength > 0 && $clipLength > 0 && ($clipLength <= $clippedStrLength) && strpos($clippedStr, $clipStr) !== false) {
		
      	$maxIterations = ($multiple === true) ? ceil($clippedStrLength / (2 * $clipLength)) : 1;
		
      	for ($i = 0; $i < $maxIterations; $i++) {
        
            if ($side !== 'right') {
        
                if (strpos($clippedStr, $clipStr) === 0) {
                    $clippedStr = substr($clippedStr, $clipLength, strlen($clippedStr));
                    $reverseStr = strrev($clippedStr);
                }
                  
	       	      if (strpos($reverseStr, $reverseClipStr) === 0) $clippedStr = strrev(substr($reverseStr, $clipLength, strlen($clippedStr)));
                
	          } else {
                
                //Clip from the right side in this case
	              if (strpos($reverseStr, $reverseClipStr) === 0) $clippedStr = strrev(substr($reverseStr, $clipLength, strlen($clippedStr)));
              
	              if (strpos($clippedStr, $clipStr) === 0) $clippedStr = substr($clippedStr, $clipLength, strlen($clippedStr));
                
	          }
	        
	      }
			
        if (strpos($clippedStr, $clipStr) === false) break;
    
    }
    
    return $clippedStr;
}
?>
