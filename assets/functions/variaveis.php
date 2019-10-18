<?php

session_start(); // para iniciar a sessão do usuário logado. Melhor usar no começo do arquivo
// seleciona a palavra shift aspas ou command aspas para colocar a palavra entre aspas
    $nomeSistema = "Cursos Aí!"; // php na parte de cima para organizar melhor
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : []; // if tenário
        $nomeArquivo = __DIR__."/../../produto.json";
        $produtos = json_decode(file_get_contents($nomeArquivo), true); // traz o arquivo e transforma em array
        //echo $nomeArquivo;

    // $produtos = [
    //     ["nome"=>"Curso Fullstack", "preço"=>"R$ 1.200,00", "duração"=>"5 meses", "img"=>"image/produto1.png"], 
    //     ["nome"=>"Curso Marketing", "preço"=>"R$ 1.000,00", "duração"=>"54 meses", "img"=>"image/produto2.png"],
    // ];

    $categorias = ["Cursos", "Palestras", "Artigos"];
?>
