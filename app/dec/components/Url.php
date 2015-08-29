<?php

namespace dec\components;

class Url
{
	public static function to($c, $a, $params = [])
	{
		$url = 'index.php?c='.$c.'&a='.$a;
		foreach ($params as $key => $value) {
			$url.="&".$key."=".$value;
		}
		return $url;
	}
}