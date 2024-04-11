<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"> <!-- Inclua o arquivo CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>
<body>
    <?php
    // Variáveis com informações pessoais
    $nome = "Antonio Thiago Neto";
    $idade = 30;
    $peso = 74.5;
    $altura = 1.73;
    $escolaridade = "Ensino Superior completo";
    ?>

    <!-- Div para estilização -->
    <div class="info-container"> <!-- Adicione a classe "info-container" -->
        <h1>Informações Pessoais</h1>
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>Idade:</strong> <?php echo $idade; ?> anos</p>
        <p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
        <p><strong>Altura:</strong> <?php echo $altura; ?> m</p>
        <p><strong>Grau de Escolaridade:</strong> <?php echo $escolaridade; ?></p>
    </div>
</body>
</html>
