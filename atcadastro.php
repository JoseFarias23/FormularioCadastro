<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // PARA CAPTURAR OS VALORES DOS CAMPOS DO FORMULARIO
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $CEP = $_POST['cep'];
    $cidade = $_POST['cidade']; 
    $UF = $_POST['uf'];
    $cursoComplementar = $_POST['cursocomplementar'];
    $cargaHoraria = $_POST['cargahoraria'];



    if (empty($nome) || empty($matricula) || empty ($email)){
        header("Location: falha.php");
    }

    // EXIBIR OS DADOS NA TELA
    echo "<h1>Dados Recebidos: </h1>";
    echo "<p><strong>Nome: </strong> $nome</p>";
    echo "<p><strong>Matricula: </strong> $matricula</p>";
    echo "<p><strong>Curso: </strong> $curso</p>";
    echo "<p><strong>E-mail: </strong> $email</p>";
    echo "<p><strong>Telefone: </strong> $telefone</p>";
    echo "<p><strong>Endereco: </strong> $endereco</p>";
    echo "<p><strong>CEP: </strong> $CEP</p>";
    echo "<p><strong>Cidade: </strong> $cidade</p>";
    echo "<p><strong>UF: </strong> $UF</p>";
    echo "<p><strong>Curso Complementar: </strong> $cursoComplementar</p>";
    echo "<p><strong>Carga Horária: </strong> $cargaHoraria</p>";





    ?>

    
</body>
</html>