<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TSE - Página inicial</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#"><img class="logo" src="https://logodownload.org/wp-content/uploads/2018/07/tse-logo-1.png" alt="Logo do STE" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Página inicial <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Candidatos</a>
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
    <div id="carouselExampleCaptions" class="carousel slide m-auto" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" style="max-height:600px">
          <a href="./candidatos.php">
            <img src="https://www.ovale.com.br/image/policy:1.49469.1631012792/image.jpg?f=2x1" class="d-block w-100" alt="..." />
            <div class="carousel-caption text-white  d-none d-md-block">
              <h5 class="font-weight-bold" style="text-shadow: 1px 1px 2px black,0 0 1em #6b6b6b,0 0 0.2em #6b6b6b;">Inicio da pesquisa Eleitoral</h5>
              <p style="text-shadow: 1px 1px 2px black,0 0 1em #6b6b6b,0 0 0.2em #6b6b6b;">
                O TSE está iniciando a pesquisa Eleitoral, Clicke aqui para fazer a sua parte.
              </p>
            </div>
          </a>
        </div>
        <div class="carousel-item" style="max-height:600px">
          <img src="https://www.tse.jus.br/admin-tse/destaques/atualizacao-do-portal-area-de-noticias-ficara-sem-novos-conteudos-por-5-dias/@@images/3d05a042-4c4f-449a-955d-19a45a98242c.jpeg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block ">
            <h5 class="font-weight-bold" style="text-shadow: 1px 1px 2px black,0 0 1em #6b6b6b,0 0 0.2em #6b6b6b;">Inicio da pesquisa Eleitoral</h5>
            <p style="text-shadow: 1px 1px 2px black,0 0 1em #6b6b6b,0 0 0.2em #6b6b6b;">
              O TSE está iniciando a pesquisa Eleitoral, Clicke aqui para fazer a sua parte.
            </p>
          </div>
        </div>
        <div class="carousel-item" style="max-height:600px">
          <img src="https://www.tse.jus.br/imagens/fotos/calendario-eleitoral-em-08-03-2022/@@images/95d3b906-564f-4b42-9ba1-602de5112e29.jpeg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block ">
            <h5 class="font-weight-bold" style="text-shadow: 1px 1px 2px black,0 0 1em #6b6b6b,0 0 0.2em #6b6b6b;">Inicio da pesquisa Eleitoral</h5>
            <p style="text-shadow: 1px 1px 2px black,0 0 1em #6b6b6b,0 0 0.2em #6b6b6b;">
              O TSE está iniciando a pesquisa Eleitoral, Clicke aqui para fazer a sua parte.
            </p>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Sobre -->
    <div class="Sobre p-3 d-flex m-5 my-6 ">
      <img src="https://www.tse.jus.br/imagens/fotos/tre-ce-fachada-do-tse-620-x-300/@@images/31e57839-0d04-4033-b58e-5657a2bc8460.jpeg" alt="">
      <div class="d-flex flex-column">
        <h1 class="text-center">Sobre a Pesquisa Eleitoral</h1>
        <hr />
        <p class="text-center w-50 m-auto">
          Em relação a pesquisa eleiroral é nescesario entender que para a computação deve-se efetuar o cadastro para a visualização dos candidatos desta forma podendo clicar em opções ou em votar no candidato selecionado !!</p>
        </p>
        <a class="m-auto" href="./candidatos.php">
          <button class="btn btn-primary m-auto" type="submit">Participar</button>
        </a>
      </div>
    </div>
    <div class="Sobre p-3 d-flex m-5 my-6 ">
      <div class="d-flex flex-column">
        <h1 class="text-center">A Justiça Eleitoral</h1>
        <hr />
        <p class="text-center w-100 m-auto">
          No dia 24 de fevereiro de 1932, foi criado o primeiro Código Eleitoral brasileiro, que instituiu a Justiça Eleitoral e passou a regulamentar as eleições no país. O Código Eleitoral foi instituído por meio do Decreto nº 21.076 , com o objetivo de reformar a legislação eleitoral existente no país. A partir dele foram adotados o voto secreto, o voto feminino e o sistema de representação proporcional de votação. Em maio do mesmo ano, o TSE foi instalado no Rio de Janeiro, então capital do país.
        </p>
        <a class="m-auto" href="./candidatos.php">
          <button class="btn btn-primary m-auto" type="submit">Ver</button>
        </a>
      </div>
      <img src="https://www.tse.jus.br/imagens/fotos/nos-somos-a-justica-eleitoral-2021/@@images/aebfe48d-2565-4186-ac4e-c89e7df4ce32.jpeg" alt="">
    </div>
    <div class="redesSociais">
      <div class="container">
        <div class="row">
          <div class="col-md-4 m-auto w-100 p-2">
            <div class="card">
              <div class="card-body m-auto">
                <h5 class="card-title text-center">Redes Sociais do STE</h5>
                <p class="card-text text-center">
                  <a href="https://www.facebook.com/">
                    <img src="https://img.icons8.com/color/48/000000/facebook-new.png" />
                  </a>
                  <a href="https://www.instagram.com/">
                    <img src="https://img.icons8.com/color/48/000000/instagram-new.png" />
                  </a>
                  <a href="https://www.twitter.com/">
                    <img src="https://img.icons8.com/color/48/000000/twitter.png" />
                  </a>
                </p>
              </div>
            </div>
          </div>
  </main>
  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">SupremoTribunalEleitoral.com</a>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>