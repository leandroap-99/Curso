<?php 
$var = 0;
if (empty($var)){
 echo "VAZIO";
}
echo "<hr>";

if (isset($var)){
	echo 'setada';
}
echo "<hr>";
$nome = 0;
if (!isset($nome)){
	echo 'nao setada';
}
echo "<hr>";
$string = "texto aqui";
if (is_string($string)){
echo 'é uma string';
}
echo "<hr>";
$variavel = 'texto';
unset ($variavel);
var_dump($variavel);
echo "<hr>";
$artilheiro = 'Ronaldo';
$gols = 19;
$texto = 'O artilheiro do campeonato, %s tem %d gols';
printf ($texto, $artilheiro, $gols);
echo "<hr>";
$string = 'Oi mundo';
$novastring = str_replace('Oi','Tchau',$string);
echo $novastring;
echo "<hr>";
$string = '     PHP';
var_dump($string);
var_dump(trim($string));
echo "<hr>";
$string = 'Olá Mundo';
echo ucfirst($string);
echo "<hr>";
$string = 'OLA MUNDO';
echo Lcfirst($string);
echo "<hr>";
$string = 'Olá, tudo bem?';
$array = str_split($string,3);
var_dump($array);
echo "<hr>";
$nomes = 'leandro,Joao, Maria';
$nomes = explode (',',$nomes);
var_dump($nomes);
echo "<hr>";
echo "<hr>";
echo str_repeat ("@",10);
echo "<hr>";
$texto = 'Star Wars';
var_dump(str_pad($texto,20));
var_dump(str_pad($texto,20,'@'));
var_dump(str_pad($texto,20,'@',STR_PAD_LEFT));
var_dump(str_pad($texto,20,'@',STR_PAD_BOTH));
echo "<hr>";
$email = 'leandroaparecido1@hotmail.com';
$dominio = strstr($email,'@');
echo "Dominio ".$dominio;
echo '<br>';
$user = strstr($email, '@',true);
echo "Usuário ".$user;
echo "<hr>";
$string = '     Leandro Aparecido     ';
echo strlen (trim($string));
echo "<hr>";
$string = ' 9876543210';
$procurar = '3';
$pos = strpos($string,$procurar);
if ($pos === false){
	echo "a String $procurar áo foi encontrada;";
}else
{
	echo "A string $procurar foi encontrada na posicao $pos";
}

echo "<hr>";
$string = ' 98765432103333';
$procurar = '3';
$pos = strrpos($string,$procurar);
if ($pos === false){
	echo "a String $procurar áo foi encontrada;";
}else
{
	echo "A string $procurar foi encontrada na posicao $pos";
}
echo "<hr>";
$string = 'aAaaAAbbBBcccCC';
$procurar = 'a';
$pos = strripos($string,$procurar);
if ($pos === false){
	echo "a String $procurar áo foi encontrada;";
}else
{
	echo "A string $procurar foi encontrada na posicao $pos";
}
echo "<hr>";
$string = "0123456789";
$substring = substr($string,5,-2);
echo $substring;
echo "<hr>";
$string = 'hoje acordei muito cedo.';
echo substr_replace($string, 'tarde', -5, -1);/*substitua entre -5 e -1*/
echo "<hr>";
$string = "HOJE ACORDEI MUITO CEDO.";
echo strtolower($string);