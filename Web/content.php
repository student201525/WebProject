<?php

class Content
{
	public static $menu = array(
	1 => array('link' => 'Start', 'index' => 'assets/start.html'),
	2 => array('link' => 'About', 'index' => 'assets/about.html'),
	3 => array('link' => 'Top List', 'index' => 'assets/topList.html')
	);
	
	static public function getPage($var)
	{
		return file_get_contents(self::$menu[$var]['index']);

	}	
}

?>