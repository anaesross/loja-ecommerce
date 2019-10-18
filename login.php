<?php

    // cadastro do usuário no banco de dados
    $usuario = ["email"=>"anae08@gmail.com", "senha"=>'$2y$10$GYE7JjnPo8JChGOhKMHBreWqrCO9SLIKq.EFrHRbPRt4tA84.ilLG']; // usar aspas simples no hash

    if($_POST) {
        $email = $_POST["email"]; // name dentro do formulário
        $senha = $_POST["senha"]; 

        //validando email
        if($email == $usuario["email"]){
            if(password_verify($senha, $usuario["senha"])){ //validadno a senha
                session_start(); //criar uma sessão para o usuário que vai logar
                $_SESSION["usuario"] = ["nome" => "Anaê"];
                header("Location:index.php"); // para redirecionar o usuário pra outra página

            } else {
                echo "E-mail ou senha inválidas";
            }

        } else {
            echo "E-mail ou senha inválidas";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

    <?php include_once("assets/functions/menu.php");?>
    <?php include_once("assets/functions/categorias.php"); ?>

    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="login.php" method="post" class="card p-2">
            <div class="form-group">
                <label for="email">E-mail</label> <!-- id liga com o for -->
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label> <!-- id liga com o for -->
                <input type="password" name="senha" id="senha" class="form-control" required> <!-- command D com a palavra selecionada para selecionar mais -->
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Logar</button>
            </div>
        </form>
    </main>
    
</body>
</html>