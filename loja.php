<!DOCTYPE html>
<?php 
    $usuario = ["nome"=>"Anaê"];
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
    <title>Loja Virtual</title>
</head>
<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img style="width: 10%;padding:10px" src="images/logo.png"/>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <?php
                    if(isset($usuario) && $usuario != ""){
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario['nome'];?></a>
                    </li>
                <?php }else{?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                </ul>
                <?php } ?>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
            </div>
        </nav>
    </header>
    <main>  
        <section class="container d-flex flex-direction-row justify-content-around align-item-center mt-5">
            <div class="card text-center" style="width: 18rem;">
            <h3>HTML 5 e CSS3</h3>
                <img src="images/html.svg" class="card-img-top" alt="logo do html">
                    <div class="card-body">
                        <h5 class="card-title">HTML 5 e CSS 3</h5>
                            <p class="card-text">R$ 1.800,00</p>
                            <a href="#" class="btn btn-primary">Comprar</a>    
                    </div>    
            </div>
            <div class="card text-center" style="width: 18rem;">
            <h3>PHP 7</h3><br>
                <img src="images/php.png" class="card-img-top" alt="logo do php">
                <br>
                    <div class="card-body">
                        <h5 class="card-title">PHP 7</h5>
                            <p class="card-text">R$ 4.000,00</p>
                            <a href="#" class="btn btn-primary">Comprar</a>    
                    </div>    
            </div>
            <div class="card text-center" style="width: 19rem;">
            <h3>JavaScript</h3><br>
                <img src="images/js.png" class="card-img-top" alt="logo do javascript"><br>
                    <div class="card-body">
                        <h5 class="card-title">JavaScript</h5>
                            <p class="card-text">R$ 3.000,00</p>
                            <a href="#" class="btn btn-primary">Comprar</a>    
                    </div>    
            </div>
        </section>
    </main>
    <footer>

    </footer>

</body>
</html>