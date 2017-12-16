<?php

namespace src;

class View {
	
	public static function render($data, $file, $header = 'View/Base/privateCabecalho.php') {

		//var_dump($data);

		require $header;
		require $file;



	}

}