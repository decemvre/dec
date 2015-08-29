<?php

namespace dec\components;

class Assets
{
	
    public static $css = [
        'css/site.css',
    ];
    public static $js = [
        'js/site.js',
    ];

	public static function registerCSS()
	{
		foreach (self::$css as $value) {
			echo '<link rel="stylesheet" href="'.$value.'" type="text/css">'."\n";
		}
	}

	public static function registerJS()
	{
		foreach (self::$js as $value) {
			echo '<script type="text/javascript" src="'.$value.'"></script>'."\n";
		}
	}

}