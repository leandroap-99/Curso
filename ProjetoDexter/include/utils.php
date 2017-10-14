<?php
		function verificaPagina ($pagina){
			if ((basename($_SERVER['PHP_SELF'])==$pagina)){
				return true;
			}else {
				return false;
			}
		}












