# PHP-Output-JavaScript-Object
Use PHP to output a JavaScript object format 
PHP输出JavaScript对象格式的字符串

Exp:

    <?php
    $array = ['string'=>'jefja','array'=>['a',2],'num'=>123];

    echo jsobj_encode($array);

    function jsobj_encode($array)
    {
	    $json = json_encode($array);
	    $pattern = "/\"([^,\"]*?)\":.*?/";
	    $result =  preg_replace_callback($pattern, function($matches){
		    return $matches[1].":";
	    }, $json);
	    return $result;
    }

It will be output a string, like this:
以上代码输出:

{string:"jefja",array:["a",2],num:123}
