<?php 

$senha = '123456';
$senha2 = '123456';

echo md5($senha);

echo '<hr>';

echo md5($senha2);

echo '<hr>';

echo hash('sha1',$senha);

echo '<hr>';

$senhaBD = 'e10adc3949ba59abbe56e057f20f883e';


if (md5($senha) == $senhaBD) {
	echo 'Logado';
}


