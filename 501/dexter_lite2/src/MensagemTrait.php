<?php

namespace src;

trait MensagemTrait {

	private function saveMessage($msg){

		$_SESSION['msg'] = $msg;

	}

	public static function hasMessage() {

		if( isset($_SESSION['msg']) ) {
			$msg = $_SESSION['msg'];
			unset( $_SESSION['msg'] );
			return $msg;
		}

	}

}