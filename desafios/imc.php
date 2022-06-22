<?php

$altura = 1.82;
$peso = 82;
$imc = $peso / $altura ** 2;

if ($imc < 18)
    echo "abaixo";
else if ($imc < 25)
    echo "dentro";
else
    echo "acima";

echo " do recomendado";
