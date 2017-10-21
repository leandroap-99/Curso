<?php 
$senha = '123456';
echo md5($senha);
echo '<hr>';
echo hash ('sha1',$senha);
echo '<hr>';
if (md5($senha)=='e10adc3949ba59abbe56e057f20f883e');
echo "Logado";




 ?>