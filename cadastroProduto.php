<?php
    function cadastrarProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
        $nomeArquivo = "produto.json";
        if(file_exists($nomeArquivo)){ //se o array nao estiver vazio
            //abrindo e pegando as informações do arquivo salvo = produto.json    
            $arquivo = file_get_contents($nomeArquivo);
            //transformar o arquivo json em objeto para o PHP conseguir ler 
            //outra variavel , a variavel que esta dentro do else soh acontnece dentro do else
            $produtos= json_decode($arquivo, true); //true = transforma em array ao invéz de objeto

            //adiciona novo produto no arquivo. como se fosse um array push
            $produtos[] = ["nome"=>$nomeProduto, "descricao"=>$descProduto, "imagem"=>$imgProduto, "preco"=>$precoProduto];

            $json = json_encode($produtos); //transforma o array em json

            $deuCerto = file_put_contents($nomeArquivo, $json); //salva o json dentro de um arquivo

            if($deuCerto){ //retorna sucesso ou nao para o usuário
                echo "<script>alert('Produto Cadastrado');</script>";
            } else {
                echo "<script>alert('Falha ao cadastrar produto');</script>";
            }

            //var_dump($produtos);
            //json_decode transforma em um objeto
           
        } else {
            $produtos = []; //se o array for vazio

            //mesma coisa que a função array_push inputa valores dentro da array

            $produtos[] = ["nome"=>$nomeProduto, "descricao"=>$descProduto, "imagem"=>$imgProduto, "preco"=>$precoProduto];

            $json = json_encode($produtos); //transforma o array em json

            $deuCerto = file_put_contents($nomeArquivo, $json); //salva o json dentro de um arquivo

            if($deuCerto){
                echo "<script>alert('Produto Cadastrado');</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar Produto');</script>";
            }


            // echo"<pre>";
            // var_dump($produtos);
            
        }

    }

    if($_POST){

        /* echo "<pre>";
        var_dump($_FILES);
        exit;
 */
        //salvando o arquivo (imagem)
        $imagem = $_FILES['imagem']['name'];
        $localTmp = $_FILES['imagem']['tmp_name'];
        $caminho = 'assets/images/'.$imagem;
        
        $deuCerto = move_uploaded_file($localTmp, $caminho);
        
        echo cadastrarProduto($_POST['nome'],$_POST['descricao'],$caminho, $_POST['preco']);
    }

?>
<!DOCTYPE html>
<?php include_once("variaveis.php");?>
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
                <form method="post" action="#" enctype="multipart/form-data">
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
