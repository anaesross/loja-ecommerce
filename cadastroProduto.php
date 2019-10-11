<?php
    function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
        $nomeArquivo = "produto.json";
        if(file_exists($nomeArquivo)){

        } else {
            $produtos = [];

            //mesma coisa que a função array_push inputa valores dentro da array

            $produtos[] = ["nome"=>$nomeProduto, "descricao"=>$descProduto, "imagem"=>$imgProduto, "preco"=>$precoProduto];


            // echo"<pre>";
            // var_dump($produtos);
            
        }

    }

    if($_POST){
        cadastrarProduto($_POST['nome'],$_POST['descricao'], $_POST['imagem'], $_POST['preco']);
    }

?>
<!DOCTYPE html>
<?php include_once("assets/functions/variaveis.php");?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
    <title>Cadastro produtos</title>
</head>
<?php
include_once("assets/functions/menu.php");
include_once("assets/functions/categorias.php");
?>

    <main class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center p-5">
                <h1>Cadastro de Produtos</h1>
            </div>
        </div>
            <div class="col-12">
                <form method="post" action="#">
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Título</label>
                            <input type="text" class="form-control" placeholder="Digite o nome do produto" name="nome"/>
                        </div>
                        <div class="form-group col-6">
                            <label>Descrição</label>
                            <input type="text" class="form-control" placeholder="Digite a descrição do produto" name="descricao"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Imagem</label>
                            <input type="file" class="form-control" placeholder="Insira a imagem do produto" name="imagem"/>
                        </div>
                        <div class="form-group col-6">
                            <label>Preço</label>
                            <input type="text" class="form-control" placeholder="Digite o valor do produto" name="preco"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success d-flex justify-content-end">Cadastrar</button>
                </form>
            </div>
        </div>
    </main>