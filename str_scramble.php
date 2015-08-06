<?php

function str_scramble($str) {
	
    if (is_array($str)) {
        $randomizedStr = "Not a string";
    } else {
        $str = (string)$str;//Force numbers to be strings
        $strLength = strlen($str);
        $strMultiple = 100 * $strLength;
        $keyvalArray = $numberArray = $tempArray = array();
        $randomizedStr = '';
	
        for($i = 0; $i < $strLength; $i++) {
            $rand = mt_rand(1, $strMultiple);
	    $keyvalArray += array($str[$i] => $rand);
	}
	
	$counter = 0;
	foreach($keyvalArray as $key=>$value) {
	    $tempStr = '';
	    $tempArray = array();
	    if ($counter > 0) {
	        for($j = 0; $j < $counter; $j++) {
	            if ($value >= $numberArray[$j]) {
	                $tempStr = $randomizedStr;
	                $tempArray = $numberArray;
	                for($k = $j; $k < $counter; $k++) {
	                    $randomizedStr[$k + 1] = $tempStr[$k];
		            $numberArray[$k + 1] = $tempArray[$k];	
		        }
		        $randomizedStr[$j] = $key;
		        $numberArray[$j] = $value;
		        break;
		    } else if ($j == ($counter - 1)) {
		        $randomizedStr .= $key;
		        $numberArray[] = $value;
		    } else ;			
		}			
	    } else {
	        $randomizedStr = $key;
	        $numberArray[] = $value;
	    }
	    $counter++;
	}
    }
    return $randomizedStr;
}

?>
