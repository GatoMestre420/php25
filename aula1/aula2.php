<?php 

$nome = "Luan";
$valorProduto = 3.2;
$chuva = false;

//var_dump($nome);
//var_dump($valorProduto);
//var_dump($chuva);

echo "<h2>Olá $nome!</h2>\n";
print "<p>O valor do produto é R$ $valorProduto.</p>";

$num1 = 5;
$num2 = 70.3;
$soma = $num1 + $num2;

echo "<h3>$num1 + $num2 = $soma</h3>"; // string
echo "<h3>$num1 + $num2 = ". $num1 * $num2 . "</h3>"; //concatenação fecha aspas concatena com o ponto e abre aspas


echo "<br> > $num1";
$num1 += 1;
echo "<br> > $num1";
$num1 ++;
echo "<br> > $num1";

echo "---------------------------<br>";
$num3 = "80";
$num4 = 4;
$soma = $num3 + $num4;

echo "$num3 + $num4 =$soma";



?>