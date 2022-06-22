<?php
$idade = 18;
$acompanhado = true;

echo "Você só pode entrar se já for maior de idade, mas, se for menor de idade, só poderá entrar se estiver acompanhado." . PHP_EOL;

/*
 * Condições
 * E -> && OU and
 * OU -> || OU or
 * NEGADO -> !(CONDIÇÃO)
 */

if ($idade >= 18) {
    echo "Você tem $idade anos, pode entrar!";
} else if($acompanhado == true) {
    echo "Você tem $idade anos, e está acompanhado, pode entrar!";
} else {
    echo "Você não tem mais do que 18 anos, não pode entrar!";
}

//Condição ternária
$segundaIdade = 19;
$mensagem = $segundaIdade > 18 ? "Você é maior de idade" : "Você não é maior de idade";
echo $mensagem;

echo PHP_EOL . "Solução finalizada!";