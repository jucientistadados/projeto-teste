<?php
// 1. Variáveis
$nome = "Maria"; // variável do tipo string
$idade = 25; // variável do tipo inteiro
$altura = 1.70; // variável do tipo float
$temCarteira = true; // variável do tipo boolean

// 2. Operadores básicos
$soma = 10 + 5;
$subtracao = 10 - 5;
$multiplicacao = 10 * 5;
$divisao = 10 / 2;

// 3. Operadores lógicos e condicionais
if ($idade >= 18 && $temCarteira) {
    echo "$nome pode dirigir!\n";
} else {
    echo "$nome não pode dirigir.\n";
}

// 4. Loops
// Loop For
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i\n";
}

// Loop While
$contador = 1;
while ($contador <= 5) {
    echo "Contador: $contador\n";
    $contador++;
}

// 5. Funções
// Função simples que soma dois números
function somar($a, $b) {
    return $a + $b;
}

// Chamando a função
$resultado = somar(3, 7);
echo "Resultado da soma: $resultado\n";

// Função com condicional
function verificaPar($numero) {
    if ($numero % 2 == 0) {
        return "$numero é par.";
    } else {
        return "$numero é ímpar.";
    }
}

// Chamando a função
echo verificaPar(10);
?>
