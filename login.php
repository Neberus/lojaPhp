<?php
$usuario = ["email"=>"yuriccoe@email.com","senha"=>'$2y$10$jtipEP8wmyTc6nQMMAaCNOssyeZCtVsyKue19eAThRicEGaIdIu6K'];

if ($_POST){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    // Validando E-mail
    if ($email == $usuario['email']){
        // Validando Senha
        if(password_verify($senha, $usuario['senha'])){
            session_start();
            $_SESSION['usuario'] = ["nome"=>"Yuri"];
            header('Location:index.php');

        }else {
            echo "E-mail ou senha inválidas";
        }


    }else {
        echo "E-mail ou senha inválidas";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include_once "header.php"?>
    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="login.php" method="post" class="card p-2"> 
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escrever e-mail">
                <small id="emailHelp" class="form-text text-muted">Não compartilhamos seu e-mail com terceiros.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escrever senha">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-success" type="submit">Logar</button>
            </div>
        </form>
    </main>
    
</body>
</html>