<?php
session_start();
    $nomeSistema = "Cursos Ai!";
    $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario']: [];

        $nomeArquivo = "produto.json";
        $produtos = json_decode(file_get_contents($nomeArquivo), true);

    // $produtos = [
    // ["nome"=>"Curso Fulltsack","preco"=>"1200.00","duracao"=>"5 meses", "img"=>"img/fullstack.jpg"],
    // ["nome"=>"Curso Marketing","preco"=>"1000.00","duracao"=>"4 meses", "img"=>"img/fullstack.jpg"],
    // ];

    $categorias = ["Cursos", "Palestras", "Artigos","item 1","item 2"];
?>