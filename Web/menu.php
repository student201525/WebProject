<?php

class Menu
{
	public static $menu = array(
	1 => array("link" => "Start", "index" => "assets/start.html"),
	2 => array('link' => 'About', 'index' => 'assets/about.html'),
	3 => array('link' => 'Top List', 'index' => 'assets/topList.html')
	);
	
	static public function getItem($var = 0)
	{
		echo "<ul class='menu'>";
		foreach (self::$menu as $item)
		{
				echo "<li><a href='{$item[index]}'> {$item [link]}</a></li>";
		}
	

	}	
}

?>