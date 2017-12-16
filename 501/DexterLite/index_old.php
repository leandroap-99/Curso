<?php 
class conect
{
	private static $instance = null;

	private function __construct() {}
	public static function getinstance ()
	{
		if (self::$instance == null){
			self::$instance = new conect();
		}
		return self::$instance;
	} 





}

$inst2 = conect::getinstance();
var_dump($inst2);




 ?>