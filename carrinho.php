<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Carrinho</title>
</head>
<body>
    <?php include_once("assets/functions/menu.php");?>
    <?php include_once("assets/functions/categorias.php"); ?>

    <main>

    <section class="container">
       <div class="row">
            <div class="col-12">
                <h1>Carrinho de compras</h1>
            </div>    
            <div class="col-12">
                <div class="row card">
                    <div class="col-12">
                        <h3>Você está comprando o curso <?php echo $_GET['nomeProduto']; ?></h3>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form class= "d-flex flex-column p-3" method="post" action="sucesso.php">
                            <input class="form-control" type="text" name="nomeCompleto" placeholder="Digite seu nome"><br>
                            <input class="form-control" type="text" name="cpf" placeholder="Digite seu CPF"><br>
                            <input class="form-control" type="text" name="cartao" placeholder="Digite o número do cartão"><br>
                            <input class="form-control" type="date" name="validadecartao" placeholder="Digite a data de validade"><br>
                            <input class="form-control" type="password" name="codigoCartao" placeholder="Digite o CCV"><br>
                            <button class="btn btn-success" type="submit">Finalizar Compra</button>
                        </form>
                    </div>
                </div>
            </div>
       </div>         
    </section>
    </main>
    
</body>
</html>