<?php

$primeiroContador = 1;
while ($primeiroContador <= 15) {
    if ($primeiroContador == 9)
        break;
    echo "#$primeiroContador".PHP_EOL;
    $primeiroContador++;
}

/* geralmente na estrutura do for é usado como uma variável de controle denominada "i"
 Exemplo de 0 a 10;
    for($i = 0; i >= 10; i++) {
        echo "$i" . PHP_EOL;
    }

*/
for ($segundoContador = 1; $segundoContador <= 15; $segundoContador++) {
    if($segundoContador == 13)
        continue;
    echo "#$segundoContador".PHP_EOL;
}

/*
 * Para dar continuidade ao loop é só usar a palavra chave "continue"
 * e para parar o loop é só usar a palavra chave "break"
 */

/*
 * Utilizar o break quer dizer que a nossa condição do loop está errada
 * e é mais prático concertarmos a condição do quebrar o loop
 */
