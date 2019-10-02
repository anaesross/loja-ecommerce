<!DOCTYPE html>
<?php 
    $usuario = ["nome"=>"Anaê"];
    $produtos =[
        ["nome"=>"Curso HTML e CSS", "preco"=>1200.00, "duracao"=>"5 meses","img"=>"images/html.svg"],
        ["nome"=>"PHP", "preco"=>1000.00, "duracao"=>"8 meses","img"=>"images/php.png"],
        ["nome"=>"Javascript", "preco"=>1500.00, "duracao"=>"12 meses","img"=>"images/js.png"],
    ];
    $categorias=["Cursos","Palestras", "Artigos","Livros","Ebook"];
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
            </div>
        </nav>
    </header>
    
    <div class="container-fluid">
    <hr style="background-color:orange">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                    if(isset($categorias) && $categorias != []){
                ?>
                <?php 
                    foreach($categorias as $categoria){
                ?>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $categoria;?></a>
                        </li>
                    </ul>
                <?php } ?>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
                    <?php }else{
                        echo "Não possuímos categorias";
                    }
                    ?>
            </div>
        </nav>
                
    </div>
    <main>  
        <section class="container d-flex flex-direction-row justify-content-around align-item-center mt-5">
        <?php
            if(isset($produtos) && $produtos != []){ //se existir produtos cadastrados mostrar foreach abaixo
        ?>
        <?php    
        foreach($produtos as $produto){  //nomeei os arrays de produtos para $produto          
        ?>
            <div class="card text-center" style="width: 18rem;">
                <h3><?php echo $produto["nome"];?></h3>
                    <img src=<?php echo $produto['img'];?> class="card-img-top" alt="logo do html">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $produto["nome"];?></h5>
                                <p class="card-text"><?php echo $produto["preco"];?></p>
                                <p class="card-text"><?php echo $produto["duracao"];?></p>
                                <a href="#" class="btn btn-primary">Comprar</a>    
                        </div>    
            </div>
        <?php } ?> <!--Fechando foreach-->
        <?php }else{ //caso não tenha produtos cadastrados, mostrar mensagem abaixo
            echo "Não possuímos produtos no momento";
        }
        ?>
        </section>
    </main>
    <footer>

    </footer>

</body>
</html>