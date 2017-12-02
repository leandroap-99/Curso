
<?php 
class conect
{
	private static $instance = null;

	private function __construct() {}
	public static function getinstance ()
	{
		if (self::$instance == null){
			self::$instance = new PDO ('pgsql:host = localhost;dbname = dexter_lite','dexter','123456');
		}
		return self::$instance;
	} 





}

$inst2 = conect::getinstance();




 ?>




