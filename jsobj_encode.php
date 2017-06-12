<?php

/**
 * 创建一个JavaScript对象格式的字符串
 * Get a String according to JavaScript object format 
 * @param  array $array 
 * @return string
 * @author  Guo Kexin <kexin.guo@gmail.com>
 * @date(2017/5/24)
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
