<?php
session_start();
include_once ("conexao.php");

if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		

    $sql = "SELECT * FROM projeto";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
		<title>CRUD - Listar</title>		
	</head>
	<body class= bg-primary>
	
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">VOLTAR</a>
  </div>
</nav>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </div>
</nav>
    
        <div class="table-responsive">
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th>Projeto</th>
                    <th>Requisitos</th>
                    <th>Análise</th>
                    <th>Arquitetura</th>
                    <th>Testes</th>
                    <th>Implantação</th>
                    <th>Manutenção</th>
                    <th>Data de Início</th>
                    <th>Dat de Entrega</th>
                    <th>Responsável</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>{$row['numero_contrato']}</td>";
                        echo "<td>{$row['nome_documento']}</td>";
                        echo "<td>{$row['analise']}</td>";
                        echo "<td>{$row['arquivo_pdf']}</td>";
                        echo "<td>{$row['teste']}</td>";
                        echo "<td>{$row['implantacao']}</td>";
                        echo "<td>{$row['manutencao']}</td>";
                        echo "<td>{$row['data_inicio']}</td>";
                        echo "<td>{$row['data_fim']}</td>";
                        echo "<td>{$row['responsavel']}</td>";
                        echo "</tr>";
                    }
              
                ?>
            </tbody>
        </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

		
         
        
      
     