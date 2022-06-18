<?php
// Dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$partido = $_POST['partido'];
$descricao = $_POST['descricao'];
$img = $_POST['img'];
$numero = $_POST['numero'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles//style.css" />
    <title>TSE - Detalhes</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./index.php"><img class="logo" src="https://logodownload.org/wp-content/uploads/2018/07/tse-logo-1.png" alt="Logo do STE" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Página inicial <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/cadastro.php">Candidatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastro.php">Cadastro</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </nav>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Detalhes do candidato</h1>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo $img; ?>" alt="<?php echo $nome; ?>" class="img-fluid" style="width:100px; height: 100px; border-radius:50% " />
                            <h5 class="card-title">Nome: <?php echo $nome; ?></h5>
                            <p class="card-text">Descricao: <?php echo $descricao; ?> </p>
                            <p class="card-text">Partido: <?php echo $partido; ?> </p>
                            <p class="card-text">Numero: <?php echo $numero; ?> </p>
                            <form action="./ArmazenaDados.php" method='post'>
                                <input type="hidden" name="id" value="<?php echo $nome ?>" />
                                <button class="btn btn-primary my-3">Votar</button>
                            </form>
                            <a class="m-2" href="./candidatos.php">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>