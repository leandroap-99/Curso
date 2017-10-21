<?php 

echo '<pre>';

$_GET['nome'] = 'Lucas';
$_POST['nome'] = 'Lucas Marques';
var_dump($_GET);
var_dump($_POST);
// var_dump($_REQUEST);


//  url ?chave=valor&chave=valor

session_start();

$_SESSION['logado'] = true;

var_dump($_SESSION);

setcookie("Nome", "Lucas");

var_dump($_COOKIE['Nome']);

var_dump($_SERVER);

var_dump($_ENV);

var_dump($GLOBALS);