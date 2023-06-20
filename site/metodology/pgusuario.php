<?php
session_start();



include_once 'conexao.php';


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

<body class="body bg-primary">

  <?php
  // Verifica se o formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_contrato = $_POST['numero_contrato'];
    $nome_documento = $_POST['nome_documento'];
    $analise = $_POST['analise'];
    $codigo = $_POST['codigo'];
    $teste = $_POST['teste'];
    $implantacao = $_POST['implantacao'];
    $manutencao = $_POST['manutencao'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $responsavel = $_POST['responsavel'];

  }

  // Verifica se um arquivo foi enviado
  if (isset($_FILES['arquivo_pdf']) && $_FILES['arquivo_pdf']['error'] === UPLOAD_ERR_OK) {
    $arquivo_temporario = $_FILES['arquivo_pdf']['tmp_name'];
    $arquivo_pdf = file_get_contents($arquivo_temporario);





    // Configurações do banco de dados
  
    // $host = 'localhost';
    // $dbname = 'projetometod';
    // $usuario = 'root';
    // $senha = '';
  
    // // Conexão com o banco de dados
    // $conn = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

    $sql = "INSERT INTO projeto (numero_contrato, nome_documento, analise, codigo, teste, implantacao, manutencao, data_inicio, data_fim, responsavel, arquivo_pdf) VALUES (:numero_contrato, :nome_documento, :analise, :codigo, :teste, :implantacao, :manutencao, :data_inicio, :data_fim, :responsavel, :arquivo_pdf)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':numero_contrato', $numero_contrato);
    $stmt->bindParam(':nome_documento', $nome_documento);
    $stmt->bindParam(':analise', $analise);
    $stmt->bindParam(':codigo', $codigo);
    $stmt->bindParam(':teste', $teste);
    $stmt->bindParam(':implantacao', $implantacao);
    $stmt->bindParam(':manutencao', $manutencao);
    $stmt->bindParam(':data_inicio', $data_inicio);
    $stmt->bindParam(':data_fim', $data_fim);
    $stmt->bindParam(':responsavel', $responsavel);
    $stmt->bindParam(':arquivo_pdf', $arquivo_pdf);


    $stmt->execute();

    echo "Projeto cadastrado com sucesso!";
  } else {
    echo "Preencha corretamente o formulário.";
  }

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

  <body class="body bg-primary">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PROJECT SAVED</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active mx-5" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-5" href="visualizar.php">Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-5" href="#">Editar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h3 class="text-white text-center">Cadastro de Projetos Modelo Cascata</h3>
    <div class="border border-white mt-4">
      <div class="row w-95 mx-1  p-3 ">
        <div class="col-4 mt-2">
          <form method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label for="numero_contrato" class="fs-5 text-white">Nome do Projeto</label>
              <input type="text" name="numero_contrato" class="form-control" id="numero_contrato">
            </div>

            <div class="form-group">
              <label for="nome_documento" class="fs-5 text-white">Requisitos:</label>
              <textarea type="text" class="form-control" name="nome_documento" id="nome_documento" required></textarea>
            </div>

            <div class="form-group">
              <label for="analise" class="fs-5 text-white">Analise:</label>
              <textarea type="text" class="form-control" name="analise" id="analise" required></textarea>
            </div>

            <div class="form-group">
              <label for="analise" class="fs-5 text-white">Codificação:</label>
              <textarea type="text" class="form-control" name="codigo" id="codigo" required></textarea>
            </div>
        </div>
        <div class="col-4 mt-2">
          <div class="form-group">
            <label for="arquivo_pdf" class="fs-5 text-white">Arquitetura:</label>
            <input class="form-control" type="file" name="arquivo_pdf" id="arquivo_pdf" required>
          </div>
          <div class="form-group">
            <label for="teste" class="fs-5 text-white">Testes:</label>
            <textarea type="text" class="form-control" name="teste" id="teste" required></textarea>
          </div>

          <div class="form-group">
            <label for="teste" class="fs-5 text-white">Implantação:</label>
            <textarea type="text" class="form-control" name="implantacao" id="implantacao" required></textarea>
          </div>

          <div class="form-group">
            <label for="teste" class="fs-5 text-white">Manutenção:</label>
            <textarea type="text" class="form-control" name="manutencao" id="manutencao" required></textarea>
          </div>
        </div>

        <div class="col-4 mt-2">
          <div class="form-group">
            <label for="data_fim" class="fs-5 text-white">Data de Início</label>
            <input type="date" class="form-control" id="data_inicio" name="data_inicio">
          </div>

          <div class="form-group">
            <label for="data_fim" class="fs-5 text-white">Data de Entrega</label>
            <input type="date" class="form-control" id="data_fim" name="data_fim">
          </div>

          <div class="form-group">
            <label for="responsavel" class="fs-5 text-white">Nome do Responsável</label>
            <input type="text" name="responsavel" class="form-control" id="responsavel">
          </div>
          <br>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
          <br>

          <h5 class=" text-white">Para um melhor preenchimento do formulário observe
            as orientções abaixo</h5>

          </form>

        </div>
      </div>
    </div>
    <h4>



      <div class="w-75 mx-4 p-3 text-white mt-5">
        <h4> 1. Levantamento de requisitos: Nesta fase, o objetivo é entender as necessidades e requisitos do sistema a ser
        desenvolvido.
        Isso envolve a interação com os usuários finais e outras partes interessadas para identificar os recursos,
        funcionalidades
        e restrições do sistema.</h4><br>
        </div>

        <div class="w-75 mx-4 p-3 text-white">
    <h4>
      2. Análise: Nessa fase, os requisitos identificados são analisados ​​em detalhes. Os analistas de sistemas examinam a
      viabilidade
      técnica e financeira do projeto, identificam os riscos potenciais e desenvolvem uma visão
      geral do sistema a ser construído.</h4><br>
      </div>
      <div class="w-75 mx-4 p-3 text-white">
    <h4>
      3. Codificação: Nesta fase, os desenvolvedores de software escrevem o código do sistema com base nas especificações e
      design definido nas fases anteriores. É nessa fase que ocorre a implementação real do sistema.</h4><br>
      </div>
      <div class="w-75 mx-4 p-3 text-white">
    <h4>
      4. Testes: Após a conclusão da exigência, o sistema é submetido a testes rigorosos para identificar defeitos,
      erros e garantir que ele atenda aos requisitos exigidos. Isso inclui testes unitários,
      testes de integração e testes de sistema para validar a funcionalidade e a qualidade do sistema.</h4> <br>
      </div>
      <div class="w-75 mx-4 p-3 text-white">
    <h4>
      5. mplantação: Após a fase de teste, o sistema é aprimorado no ambiente de produção. Isso pode envolver a
      instalação de hardware, configuração de software e migração de dados, se necessário.</h4> <br>
      </div>
      <div class="w-75 mx-4 p-3 text-white">
      <h4>6. Manutenção: A fase de manutenção ocorre após a implantação do sistema. Nessa fase, são realizadas
      atividades de suporte contínuo, como correção de erros,
      tualizações de software, melhorias de desempenho e atendimento a solicitação de alteração.</h4>
    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>
  </body>

  </html>