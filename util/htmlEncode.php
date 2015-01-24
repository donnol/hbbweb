<?php
	function htmlEncode($c){
		switch($c){
			case '&':
				return "&amp;";
			case '<':
				return "&lt;";
			case '>':
				return "&gt;";
			case '"':
				return "&quot";
			case ' ':
				return "&nbsp;";
			default:
				return $c;
		}
	}

	function iterString($s){
		//$temp='abcdefg'; //要遍历的字符串
		$re=array(); //定义接受字符串的数组
		$encode_string = null;
		for($i=0;$i<strlen($s);$i++)
		{
			$re[$i]=substr($s,$i,1); //将单个字符存到数组当中
			//echo $re[$i],',';
			$tmp = htmlEncode($re[$i]);
			$encode_string.=$tmp;
		}
		return $encode_string;
	}
	
	//test
	//$str = "<>& \"'";//compare with $str = "<> \"\'"; 
	//$encode_str = iterString($str);
	//echo "$encode_str";
	
?>
