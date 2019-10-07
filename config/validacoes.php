<?php

// array de erros
$erros = [];

// função de validação
function validaNome($nome){
    global $erros;
    if( strlen($nome) == 0 ){
        array_push($erros, "Preencha o nome corretamente");
    }
}

function validaCPF($cpf){
    global $erros;
    if ( strlen($cpf) != 11){
        array_push($erros, "Preencha o número do CPF corretamente");
    }
}
?>