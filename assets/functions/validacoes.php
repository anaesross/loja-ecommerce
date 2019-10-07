<?php

    //criando array para contar os erros (campos não preenchidos pelo usuário)
    $erros = [];

    //criando as funções de validação 
    function validaNome($nome){ //exemplo de função void, nao tem um retorno de valores.
        global $erros;
        if(strlen($nome) == 0){
            array_push($erros, "Preencha o nome."); //primeiro valor = onde inserir , segundo = o que mostrar
        }
    }
    function validaCpf($cpf){
        global $erros;
        if(strlen($cpf) != 11){ // strlen percorre a string
            array_push($erros, "Preencha o CPF corretamente");
        }
    }

?>