<?php
// condição Aprovado -> Nota ->= 7 && Frequencia >=8;
// condição Recuperacao -> Nota ->= 5 && AND <70 && Frequencia >=8;
// condição Reprovado -> Nota <5 || or Frequencia <8;
$nota = 8;
$frequencia = 8;
switch (true){
case ($nota >= 7 && $frequencia >=8);
echo "APROVADO";
break;
case ($nota >=5 && $nota <7 && $frequencia >=8);
echo "RECUPERACAO";
break;
case ($nota <5|| $frequencia <8);
echo "Reprovado";
break;
default: echo  ".";
}