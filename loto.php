<?php

$name = $_POST['name'];
$usuario = [];
for ($i = 0; $i <= 50; $i++) {
    if (isset($_POST[$i])) {
        array_push($usuario, $i);
    }
};
$lista = [];
 
for ($i = 1; $i < 50; $i++) {
    array_push($lista, $i);
}
shuffle($lista);
$numeroLoto = array_slice($lista, 0, 24);
sort($usuario);
sort($numeroLoto);
$resultado = [];
for ($i = 0; $i < 24; $i++) {
    for($e= 0; $e < 24; $e++) {
        if ($usuario[$i] == $numeroLoto[$e])
        array_push($resultado, $usuario[$i]);    
    }
}
$ganhou = false;
if (count($resultado) == 0) {
    $ganhou = true;
}
if (count($resultado) == 25) {
    $ganhou = true ;
}
$valor = $_POST['valor'];
$vlganhou = $valor * 50;
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Loteria</title>
    <style>
        body {
            font-family: verdana;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            background-color: #10403B;
            padding: 10px;
            border-radius: 5px;
            font-size: 1.2em;
            text-align: center; 
            color: white;
        }
        .list {
            display: flex;
            flex-wrap: wrap;
            margin: 0 auto;
        }
        .list-item {
            background-color: #127369;
            border: 1px solid #ccc;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 3px;
            text-align: center;
            width: 50px;
            border-radius: 30px;
            color: white;
        }
        .result-count {
            font-size: 4em;
            font-weight: bold;
            text-align: center;
        }
        a{
            background-color: #127369;
            border: 1px solid #ccc;
            padding: 5px 10px;
            margin: 46%;
            border-radius: 3px;
            
            width: 50px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container" style="background-color: #BFBFBF; padding:10px; border-radius: 10px; box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);">
        <div class="section">
            <h2>Números de <?php echo htmlspecialchars($name)?></h2>
            <div class="list">
                <?php foreach ($usuario as $numero): ?>
                    <div class="list-item"><?php echo htmlspecialchars($numero); ?></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="section">
            <h2>Números Sorteados</h2>
            <div class="list">
                <?php foreach ($numeroLoto as $numero): ?>
                    <div class="list-item"><?php echo htmlspecialchars($numero); ?></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="section" style="">
            <h2>Quantidade de Acertos</h2>
            <div class="result-count"><?php echo count($resultado); ?></div>
        </div>
        <a href="index.php">Voltar</a>
    </div>
    <?php if ($ganhou == true):  ?>
        <div class="section">
        <h1 style="text-align: center">Você Ganhou <?php echo htmlspecialchars($vlganhou) ?>!</h1>
        </div>
    <?php endif; ?>
    <?php if ($ganhou != true):  ?>
        <div class="section">
        <h1 style="text-align: center">Você não ganhou!</h1>
        </div>
    <?php endif; ?>
    

</body>
</html>