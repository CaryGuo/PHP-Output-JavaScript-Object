<?php

/**
 * Get a String according to JavaScript object format 
 * @param  array $array 
 * @return string
 */
function jsobj_encode($array)
{
	$json = json_encode($array);
	$pattern = "/\"([^,\"]*?)\":.*?/";
	$result =  preg_replace_callback($pattern, function($matches){
		return $matches[1].":";
	}, $json);
	return $result;
}
