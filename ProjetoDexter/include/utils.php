<?php
		function verificaPagina ($pagina){
			if ((basename($_SERVER['PHP_SELF'])==$pagina)){
				return true;
			}else {
				return false;
			}
		}

		function validacampo($campo){
if ($campo ==''){
	return false;
}
return true;

		}














