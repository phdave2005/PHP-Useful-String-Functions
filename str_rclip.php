<?php 
function str_rclip($str, $clipStr, $multiple) {
	
    $clippedStr = (string)$str;
    $clippedStrLength = strlen($clippedStr);
    $clipStr = (string)$clipStr;
    $clipLength = strlen($clipStr);
	
    
    if ($clippedStrLength > 0 && $clipLength > 0 && ($clipLength <= $clippedStrLength) && strpos($clippedStr, $clipStr) !== false) {
		
	      $maxIterations = ($multiple === true) ? ceil($clippedStrLength / $clipLength) : 1;
		
      	for ($i = 0; $i < $maxIterations; $i++) {
			
			      $reverseStr = strrev($clippedStr);
		      	$reverseClipStr = strrev($clipStr);
                  
		      	if (strpos($reverseStr, $reverseClipStr) === 0) $clippedStr = strrev(substr($reverseStr, $clipLength, strlen($clippedStr)));
            if (strpos($clippedStr, $clipStr) === false) break;
            
	      } 
    }
    
    return $clippedStr;
    
}
?>
