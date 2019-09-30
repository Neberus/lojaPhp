<?php
    $nomeSistema = "Cursos Show!";
    $usuario = ["nome" => "Yuri", ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header class="navbar">
        <h1 id="logo"><?php echo $nomeSistema; ?></h1>
        <nav>
            <ul class="nav">
                <?php if(isset($usuario) && $usuario != "") {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Curso</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
                    </li>
                <?php }else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
                <div class="col-lg-3 card text-center">
                    <h5 class="card-title">Fullstack Overflow</h5>
                    <img class="card-img-top" src="img/undraw_features_overview_jg7a.svg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">R$: 15,00</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                </div>

                <div class="col-lg-3 card text-center">
                    <h5 class="card-title">PHP para cozinha prática</h5>
                    <img class="card-img-top" src="img/undraw_features_overview_jg7a.svg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">R$: 15,00</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                </div>

                <div class="col-lg-3 card text-center">
                    <h5 class="card-title">Assando com CSS</h5>
                    <img class="card-img-top" src="img/undraw_features_overview_jg7a.svg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">R$: 15,00</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                </div>
            </div>
        </section>
    </main>


</body>
</html>
                    <!-- <?php
                        // $nome = "Yuri";
                        // $idade = 10;
                        // $usuario = ["Yuri", "Coelho", 21, ["comida", "viagem", "jogos"]]; //array dentro de array//

                        // $usuarioDois = ["nome" => "Yuri", "sobrenome" => "Coelho"]; //array associativo//

                        // echo "Hello World!";

                        // var_dump($usuario);

                        // $usuario[] = "Cozinhar";

                        // echo "<br>";

                        // var_dump($usuario);

                        // echo "<br>";

                        // echo $usuario[3][2];

                        // echo "<br>";

                        // echo $usuario[0].$usuario[1];

                        // echo "<br>";

                        // echo $usuarioDois["sobrenome"];
                    ?> -->