<?php
// condição Aprovado -> Nota ->= 7 && Frequencia >=8;
// condição Recuperacao -> Nota ->= 5 && AND <70 && Frequencia >=8;
// condição Reprovado -> Nota <5 || or Frequencia <8;
$nota = 6;
$frequencia = 8;
if ($nota >= 7 && $frequencia >=8) {
echo "Aprovado!";
}
elseif ( $nota >=5 && $nota <7 && $frequencia >=8){
	echo "Recuperacao";
}else if ($nota <5|| $frequencia <8) {
	echo "reprovado";
}