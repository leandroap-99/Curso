<?php 	
namespace src;

class view {

public static function render ($data,$file,$header = 'View/base/cabecalho.php') {

require $header;
require $file;
}

}

 ?>