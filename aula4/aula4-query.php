<?php 

   var_dump($_GET); 


   /*echo "<br>Q = " . $_GET["q"];
   echo "<br>TESTE = " . $_GET["teste"];*/

    /*$n1=0;
    $n2=0;

    if(isset($_GET["n1"])){
        $n1 = $_GET["n1"];
    }

    if(isset($_GET["n2"])){
        $n2 = $_GET["n2"];
    }



   $soma = $n1 + $n2;   
   //echo "Soma: " . $_GET["n1"] . " + " . $_GET["n2"] . "=" . $soma;

   echo "<br> Soma: $n1 + $n2 = $soma";*/


   //Operador Ternario 
   //n1 = ver se verdadeiro ? sendo verdadeiro: se nao valor padrao
    /*$n1= isset($_GET["n1"]) ? $_GET["n1"] : 0;
    $n2= isset($_GET["n2"]) ? $_GET["n2"] : 1   0;


   $soma = $n1 + $n2;   
   //echo "Soma: " . $_GET["n1"] . " + " . $_GET["n2"] . "=" . $soma;

   echo "<br> Soma: $n1 + $n2 = $soma";*/


   echo "<hr>";
   $n1 = $_GET["n1"] ?? 0;
   $n2 = $_GET["n2"] ?? 0;


  $soma = $n1 + $n2;   
  //echo "Soma: " . $_GET["n1"] . " + " . $_GET["n2"] . "=" . $soma;

  echo "<br> Soma: $n1 + $n2 = $soma";






?>