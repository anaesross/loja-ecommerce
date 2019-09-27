<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introdução php</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
        $nome="Anaê";
        $sobrenome="Soares";
        $idade= 31;

        echo "Meu nome é " .$nome. " meu sobrenome é ".$sobrenome." e eu tenhos ".$idade." anos.<br>"; //"" = dentro das aspas é texto!
        //ou
        echo "Meu nom é $nome $sobrenome <br>"; //funciona apenas com aspas duplas, e nao funciona com o array

        $usuario= ["Anaê", "Soares",21,["música","som","áudio"]]; //array numérico posição 0 = anae 1 =soares 2= 31
                                                                //array dentro de outro array
        $usuarioDois = ["nome"=>"anaê", "sobrenome"=>"Soares"];//array associativo

        echo $usuario[1]."<br>"; //solicitando posição 1 do array

        echo $usuario[3][1]."<br>"; // selecionando o elemento 3 que seria o array dentro do array , depois seleciono
        //o elemento na posição 1 dentro do segundo array qye seria o elemento = som

        $usuario[]= "Violão"; // adicionando um novo valor no array, na última posição disponível no caso a 4

        echo $usuarioDois["sobrenome"]."<br>";//solicitando a identidade sobrenome do array associativo

        var_dump($usuario);   
        
        //concatenação
        // dois modos diferentes , utilizam o . para concatenar 
        
        echo "<h2>".$usuario[0]." ".$usuario[1]."</h2>";

        echo "<hr>";

        echo "<h1>Operadores</h1>";

        

    ?>
</body>
</html>