<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TSE - Cadastro</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./index.php"><img class="logo" src="https://logodownload.org/wp-content/uploads/2018/07/tse-logo-1.png" alt="Logo do STE" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Página inicial <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="candidatos.php">Candidatos</a>
        </li>
        <li class="nav-item active">
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

  <!-- Main -->
  <main>
    <form method="POST" action="./cadastrar.php" onsubmit="return verifForm()" id="Form" class="m-auto w-50 bg-dark p-4 text-white">
      <h1 class="display-4">Cadastro</h1>
      <!-- Nome -->
      <div class="mb-3 w-10">
        <label for="Nome" class="form-label">Nome Completo</label>
        <input name="nome" type="text" minlength="2" class="form-control" id="Nome" placeholder="Exemplo: João da Silva" aria-describedby="emailHelp" />
      </div>
      <!-- RG -->
      <div class="mb-3 w-10">
        <label for="RG" class="form-label">RG</label>
        <input type="number" name="RG" class="form-control" id="RG" maxlength="8" placeholder="Exemplo: 12345678" aria-describedby="emailHelp" />
      </div>
      <!-- CPF -->
      <div class="mb-3 w-10">
        <label for="CPF" class="form-label">CPF</label>
        <input type="number" name="CPF" class="form-control" id="CPF" maxlenght="11" placeholder="Exemplo: 123.123.123.12" aria-describedby="emailHelp" />
      </div>
      <!-- Sexo -->
      <div class="mb-3 w-10">
        <label for="UF" class="form-label">Sexo:</label>
        <select class="form-control" name="etinia" id="sexo" aria-describedby="emailHelp">
          <option value="-1" selected>Escolha seu Sexo: </option>
          <option value="M">Masculino</option>
          <option value="F">Feminino</option>
        </select>
      </div>
      <!-- Etnia -->
      <div class="mb-3 w-10">
        <label for="Etnia" class="form-label">Etnia:</label>
        <select class="form-control" name="etinia" id="Etnia" aria-describedby="emailHelp">
          <option value="-1" selected>Escolha sua Etnia</option>
          <option value="B">Branca</option>
          <option value="N">Negra</option>
          <option value="I">Indígena</option>
        </select>
      </div>
      <!-- Nacionalidade -->
      <div class="mb-3 w-10">
        <label for="UF" class="form-label">União Federativa:</label>
        <select class="form-control" name="etinia" id="Etnia" aria-describedby="emailHelp">
          <option value="-1" selected>Escolha sua União Federativa</option>
          <option value="RS">RS</option>
          <option value="RJ">RJ</option>
          <option value="SP">SP</option>
        </select>
      </div>
      <!-- Telefone -->
      <div class="mb-3 w-10">
        <label for="Telefone" class="form-label">Telefone: </label>
        <input type="number" name="telefone" class="form-control" id="Telefone" maxlenght="13" placeholder="Exemplo: 5554912345678" aria-describedby="emailHelp" />
      </div>
      <!-- Email -->
      <div class="mb-3 w-10">
        <label for="Email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="Email" placeholder="Exemplo: J.daSilva@gmail.com" aria-describedby="emailHelp" />
      </div>
      <button class="btn btn-primary">Enviar</button>
    </form>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="../validacao.js"></script>
</body>

</html>