<?php 
    $usuario = ["nome"=>"Anaê"];
   /*  $produtos =[
        ["nome"=>"Curso HTML e CSS", "preco"=>1200.00, "duracao"=>"5 meses","img"=>"assets/images/html.svg"],
        ["nome"=>"PHP", "preco"=>1000.00, "duracao"=>"8 meses","img"=>"assets/images/php.png"],
        ["nome"=>"Javascript", "preco"=>1500.00, "duracao"=>"12 meses","img"=>"assets/images/js.png"],
    ]; */

    $nomeArquivo = "produto.json";

    $produtos = json_decode(file_get_contents($nomeArquivo), true);

    // var_dump($produtos);

    $categorias=["Cursos","Palestras", "Artigos","Livros","Ebook","Gibi"];
?>