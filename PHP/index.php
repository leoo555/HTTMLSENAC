<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lista de Exercícios PHP</title>
</head>
<body>
<h1>Lista de Exercícios PHP</h1>
<?php
   function mostrar($titulo, $conteudo) {
       echo "<h3>$titulo</h3><pre>$conteudo</pre>";
   }
   // 1 - Positivo, negativo ou zero
   $num1 = 5;
   if ($num1 > 0) {
       mostrar("1 - Positivo/Negativo/Zero", "$num1 é positivo");
   } elseif ($num1 < 0) {
       mostrar("1 - Positivo/Negativo/Zero", "$num1 é negativo");
   } else {
       mostrar("1 - Positivo/Negativo/Zero", "$num1 é zero");
   }
   // 2 - Maior ou menor de idade
   $idade = 20;
   mostrar("2 - Maior ou Menor de Idade", $idade >= 18 ? "Maior de idade" : "Menor de idade");
   // 3 - Par ou ímpar
   $num2 = 7;
   mostrar("3 - Par ou Ímpar", $num2 % 2 === 0 ? "Par" : "Ímpar");
   // 4 - Números de 1 a 10
   $res4 = "";
   for ($i = 1; $i <= 10; $i++) {
       $res4 .= $i . " ";
   }
   mostrar("4 - Números de 1 a 10", $res4);
   // 5 - Pares de 1 a 20
   $res5 = "";
   for ($i = 1; $i <= 20; $i++) {
       if ($i % 2 === 0) $res5 .= $i . " ";
   }
   mostrar("5 - Pares de 1 a 20", $res5);
   // 6 - Soma de 1 a 100
   $soma = 0;
   for ($i = 1; $i <= 100; $i++) {
       $soma += $i;
   }
   mostrar("6 - Soma de 1 a 100", $soma);
   // 7 - Vogal ou Consoante
   $letra = "a";
   $vogais = ["a", "e", "i", "o", "u"];
   mostrar("7 - Vogal ou Consoante", in_array(strtolower($letra), $vogais) ? "Vogal" : "Consoante");
   // 8 - Dias do mês
   $mes = 2;
   if (in_array($mes, [1,3,5,7,8,10,12])) {
       $dias = 31;
   } elseif (in_array($mes, [4,6,9,11])) {
       $dias = 30;
   } else {
       $dias = 28;
   }
   mostrar("8 - Dias do Mês", "$dias dias");
   // 9 - Aumento salarial
   $salario = 1500;
   if ($salario < 1000) {
       $novoSalario = $salario * 1.20;
   } elseif ($salario <= 2000) {
       $novoSalario = $salario * 1.15;
   } else {
       $novoSalario = $salario * 1.10;
   }
   mostrar("9 - Aumento Salarial", "Salário novo: R$ " . number_format($novoSalario, 2, ",", "."));
   // 10 - Fibonacci
   $fib = [0, 1];
   for ($i = 2; $i < 10; $i++) {
       $fib[] = $fib[$i - 1] + $fib[$i - 2];
   }
   mostrar("10 - Fibonacci", implode(", ", $fib));
   // 11 - Inverter string
   $str = "PHP";
   $invertida = strrev($str);
   mostrar("11 - Inverter String", $invertida);
   ?>
</body>
</html>