<!DOCTYPE html>

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
    <?php include_once("assets/functions/menu.php") ?>
    <?php include_once("assets/functions/categorias.php");?>
    <?php include_once("assets/functions/variaveis.php");?>
<!--CARDS DOS PRODUTOS-->
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
                    <img src="<?php echo $produto['imagem'];?>" class="card-img-top" alt="logo do html">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $produto["nome"];?></h5>
                                <p class="card-text"><?php echo $produto["preco"];?></p>
                                <p class="card-text"><?php echo $produto["descricao"];?></p>
                                <a href="carrinho.php?nomeProduto=<?php echo $produto['nome'];?>" class="btn btn-primary">Comprar</a>    
                        </div>    
            </div>
        <?php } ?> <!--Fechando foreach-->
        <?php }else{ //caso não tenha produtos cadastrados, mostrar mensagem abaixo
            echo "Não possuímos produtos no momento";
        }
        ?>
        </section>
    </main>
<!--FIM CARDS PRODUTOS-->
    <footer>

    </footer>

</body>
</html>