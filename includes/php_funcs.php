<?php
// php_funcs.php 2013 December 18
// This was originally created to handle the case where we want to 
// add extra things to the side menu. It might turn out to be useful 
// for other purposes.


/////////////////
function add_menu($inmenu) {
	global $additional_menu;
	
	$additional_menu = $inmenu;
}

//////////////
function showArray($inArray){
	if(is_array($inArray)){
		echo "<pre style=\"text-align:left\">\n";
		print_r($inArray);
		echo "</pre><br/>\n";
	} else {
		echo "not an array<br/>\n";
	}
}


//////////////
function showDebug( $string ) {
	echo 'DEBUG: ' . $string . '<br/>' . "\n";
}

//////////
// from https://stackoverflow.com/questions/399332/fastest-way-to-retrieve-a-title-in-php
function get_title($url) {
    $fp = file_get_contents($url);
    if (!$fp){return null;} 
             
    $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
    if (!$res) 
        return null; 

    $h3 = trim($title_matches[1]);
    return $h3;
}



////////////////////////////////////
// from http://stackoverflow.com/questions/9219795/truncating-text-in-php
// truncates a string to the nearest whitespace to the maximum length 
function truncate($text, $chars = 25) {
	$orig_text = $text;
	$text .= ' ';
	$text = substr($text,0,$chars);
	$text = substr($text,0,strrpos($text,' '));
	if( $orig_text != $text ) {
		$text .= '...';
	}
	return $text;
}


/////////////
// 2014-04-22 
// We need to figure out something for potentially obfuscating email addresses.
// Currently, we just have the entire mailto: etc. string in a few files. This will
// just take a string of the format "E-mail: user@domain.wisc.edu and return the whole
// E-maile: <a href="mailto:etc.">etc.</a> where etc. might be an obfuscation.
// This is mostly used for the staff and faculty listings. Some things just 
// call obfuscate_with_html directly.
function gen_email ($mailstring) {
	
	$pair = preg_split('/:/', $mailstring );
	$address = trim($pair[1]);
	
	$address = obfuscate_with_html($address);
// 	$mailto_str = 'E-mail: <a href="mailto:' . $address . '">' . $address . '</a>';
	$mailto_str = 'E-mail: <a href="mailto:' . $address . '">' . $address . '</a>';
	return $mailto_str;
}



/////////////
// This can actually take any string and convert it to a string of html 
// equivalent characters. It is meant to mainly convert email addresses
// to hide them from the less powerful spam-bots.
function obfuscate_with_html ($address) {
	$addy_array = preg_split('//', $address);
	
	$char_html_hash = get_html_chars();
	$obs_str = '';
	foreach($addy_array as $char) {
		$obs_str .= $char_html_hash[$char];
	}
	return $obs_str;
}



/////////////
// This returns an array to be used for email ambiguation. It is 
// a quick conversion between leters and the html equivalent.
function get_html_chars() {
return array(
"!" => "&#33;",
"#" => "&#35;",
"$" => "&#36;",
"%" => "&#37;",
"&" => "&#38;",
"'" => "&#39;",
"*" => "&#42;",
"+" => "&#43;",
"," => "&#44;",
"-" => "&#45;",
"." => "&#46;",
"/" => "&#47;",
"0" => "&#48;",
"1" => "&#49;",
"2" => "&#50;",
"3" => "&#51;",
"4" => "&#52;",
"5" => "&#53;",
"6" => "&#54;",
"7" => "&#55;",
"8" => "&#56;",
"9" => "&#57;",
":" => "&#58;",
";" => "&#59;",
"<" => "&#60;",
"=" => "&#61;",
">" => "&#62;",
"?" => "&#63;",
"@" => "&#64;",
"A" => "&#65;",
"B" => "&#66;",
"C" => "&#67;",
"D" => "&#68;",
"E" => "&#69;",
"F" => "&#70;",
"G" => "&#71;",
"H" => "&#72;",
"I" => "&#73;",
"J" => "&#74;",
"K" => "&#75;",
"L" => "&#76;",
"M" => "&#77;",
"N" => "&#78;",
"O" => "&#79;",
"P" => "&#80;",
"Q" => "&#81;",
"R" => "&#82;",
"S" => "&#83;",
"T" => "&#84;",
"U" => "&#85;",
"V" => "&#86;",
"W" => "&#87;",
"X" => "&#88;",
"Y" => "&#89;",
"Z" => "&#90;",
"^" => "&#94;",
"_" => "&#95;",
"`" => "&#96;",
"a" => "&#97;",
"b" => "&#98;",
"c" => "&#99;",
"d" => "&#100;",
"e" => "&#101;",
"f" => "&#102;",
"g" => "&#103;",
"h" => "&#104;",
"i" => "&#105;",
"j" => "&#106;",
"k" => "&#107;",
"l" => "&#108;",
"m" => "&#109;",
"n" => "&#110;",
"o" => "&#111;",
"p" => "&#112;",
"q" => "&#113;",
"r" => "&#114;",
"s" => "&#115;",
"t" => "&#116;",
"u" => "&#117;",
"v" => "&#118;",
"w" => "&#119;",
"x" => "&#120;",
"y" => "&#121;",
"z" => "&#122;",
"~" => "&#126;");
}

