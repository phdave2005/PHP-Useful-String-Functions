<?php

function str_wrap($str, $tag, $attributes) {
	
	$htmlArr = array("a", "abbr", "acronym", "address", "applet", "area", "article", "aside", "audio", "b", "base", "basefont", "bdi", "bdo", "big", "blockquote", "body", "br", "button", "canvas", "caption", "cite", "code", "col", "colgroup", "datalist", "dd", "del", "details", "dfn", "dialog", "dir", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption", "figure", "footer", "form", "frame", "frameset", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "hr", "html", "i", "iframe", "img", "input", "ins", "kbd", "keygen", "label", "legend", "li", "link", "main", "map", "mark", "menu", "menuitem", "meta", "meter", "nav", "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "pre", "progress", "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "source", "span", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td", "textarea", "tfoot", "th", "thead", "time", "title", "tr", "track", "u", "ul", "var", "video", "wbr");
	
	if (is_array($str) || is_null($str)) {
	    $output = "The first argument must be a string";	
	} else if (!in_array($tag, $htmlArr)) {
	    $output = "The second argument does not represent a valid html tag";	
	} else if (!is_array($attributes)) {
	    $output = "The third argument must be an array of attributes";	
	} else {
		
		$attributeStr = '';
		foreach($attributes as $key=>$value) {
		    $attributeStr .= $key . '="' . $value . '" ';			
		}
		$attributeStr = rtrim($attributeStr, " ");
		
		$output = "<" . $tag . " " . $attributeStr . ">" . $str . "</" . $tag . ">";
	}
	
	return $output;

}

?>
