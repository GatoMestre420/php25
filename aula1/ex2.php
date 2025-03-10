<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>

    <h2>VERIFICAÇÃO DE ACESSO</h2>

    <?php 
    
        $idade = 18;
        $ingresso = true;

        if($idade >= 18 && $ingresso){
            echo "<p style='color:green;'> Acesso Liberado !!</p>";
        }else{
            echo "<p> Acesso Negado !!</p>";
        }
    
    ?>

    <?php if($idade >= 18 && $ingresso): ?>
        <p style="color: green"> Acesso Liberado! (<?= $idade ?>)</p>
        <?php endif; ?>



<h1>Média das notas</h1>

<?php 
    $notas = [10.0, 10.0, 10.0, 10.0 ];
    $media = array_sum($notas) / count($notas);

    if($media >= 7.0){
        echo "<strong>Aluno aprovado com nota :</strong> " . number_format($media, 2, ".", ",");
    }else{
        echo "<strong>Aluno reprovado com nota:</strong> " . number_format($media, 2, ".", ",");
    }

?>




</body>
</html>