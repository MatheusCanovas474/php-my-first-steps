<?php

$idade = 18;

//Concatenando com aspas simples (LIDO SOMENTE COMO UMA STRING COMUM)
echo 'Olá mundo! Minha idade é ' . $idade . ' anos';
//Caracteres especiais sempre são processados pela aspas duplas, não funciona em aspas simples
echo "\n";
//Para mais caracteres especiais só procurar por "Sequências de escape" na documentação do PHP,
// lá tem todos os caracteres especiais que você pode percisar

//Concatenando com aspas duplas (INTERPRETAÇÃO POR PARTE DO PHP MAIS COMPLEXA E COMPLETA)
echo "Olá mundo! Minha idade é $idade anos \n";

//Quebra de linha de forma mais legível
echo "Olá mundo! Minha idade é $idade anos" . PHP_EOL;
