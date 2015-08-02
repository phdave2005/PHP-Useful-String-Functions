<?php 
function str_lclip($str, $clipStr, $multiple) {
	
    $clippedStr = (string)$str;
    $clippedStrLength = strlen($clippedStr);
    $clipStr = (string)$clipStr;
    $clipLength = strlen($clipStr);
	
    
    if ($clippedStrLength > 0 && $clipLength > 0 && ($clipLength <= $clippedStrLength) && strpos($clippedStr, $clipStr) !== false) {
		
	$maxIterations = ($multiple === true) ? ceil($clippedStrLength / $clipLength) : 1;
		
	for ($i = 0; $i < $maxIterations; $i++) {
        
            if (strpos($clippedStr, $clipStr) === 0) $clippedStr = substr($clippedStr, $clipLength, strlen($clippedStr));
	       	
            if (strpos($clippedStr, $clipStr) === false) break;
            
        }
    }
    
    return $clippedStr;
}
?>
