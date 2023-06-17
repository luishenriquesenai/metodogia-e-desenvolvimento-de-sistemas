<?php
session_start();
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:index.php');
}
$logado = $_SESSION['email']
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>

<body class="body bg-dark">
  <nav class="navbar navbar-expand-lg bg-danger >">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="#"></a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link disabled">Disabled</a>
        </div>
      </div>
    </div>
    <div class="d-flex">
      <a href="sair.php" class="btn btn-danger me-5">Sair</a>

    </div>
  </nav>

  <?php

  // echo"<h5> Olá <u>$logado</u></h5>"
  
  ?>

  <div class="row w-75 d-flex mx-5 ">
    <h5 class="text-center mt-3 text-white">Cadastro de Projetos - Modelo Cascata</h5>
    <div class="col-6 mt-2">
      <form action="processar.php" method="POST">
        <div class="form-group">
          <label for="nome" class="fs-5 text-white">Nome do Projeto</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
          <label for="descricao" class="fs-5 text-white">Requisitos</label>
          <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="descricao" class="fs-5 text-white">Ánalise</label>
          <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="descricao" class="fs-5 text-white">Arquitetura</label>
          <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div> <br>
        <div class="form-group">
          <label for="descricao" class="fs-5 text-white">Codificação</label>
          <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="descricao" class="fs-5 text-white">Testes Realizados</label>
          <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="descricao" class="fs-5 text-white">Implantação</label>
          <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="descricao" class="fs-5 text-white">Manutençao</label>
          <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="data_fim" class="fs-5 text-white">Data de Início</label>
          <input type="date" class="form-control" id="data_fim" name="data_fim" required>
        </div>
        <div class="form-group">
          <label for="data_fim" class="fs-5 text-white">Data de Término</label>
          <input type="date" class="form-control" id="data_fim" name="data_fim" required>
        </div>
        <div class="form-group">
          <label for="responsavel" class="fs-5 text-white">Responsável pelo Projeto</label>
          <input type="text" class="form-control" id="responsavel" name="responsavel" required>
        </div> <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div>
  </div>
  

















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>