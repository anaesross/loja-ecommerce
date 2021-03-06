<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sucesso</title>
</head>
<body>
    <?php 

    include_once("assets/functions/menu.php");
    include_once("assets/functions/validacoes.php");

    $nomeUsuario = $_POST['nomeCompleto'];
    validaNome($nomeUsuario);

    $cpf = $_POST['cpf'];
    validaCpf($cpf);

    if( count($erros) == 0 ){ // conta as posições do array
    echo "<h1> Olá $nomeUsuario, a sua compra foi realizada com sucesso </h1>";
    } else {
        foreach($erros as $mensagemDeErro){ //percorrer o array $erros
            echo "<h2>$mensagemDeErro</h2>";
        }
    }
    ?>
</body>
</html>

