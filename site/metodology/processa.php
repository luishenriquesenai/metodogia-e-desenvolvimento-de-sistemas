<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);




//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuario (nome, email,senha) VALUES ('$nome', '$email','$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:black;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}



include_once 'conexao.php';
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_contrato = $_POST['numero_contrato'];
    $nome_documento = $_POST['nome_documento'];

    // Verifica se um arquivo foi enviado
    if (isset($_FILES['arquivo_pdf']) && $_FILES['arquivo_pdf']['error'] === UPLOAD_ERR_OK) {
        $arquivo_temporario = $_FILES['arquivo_pdf']['tmp_name'];
        $arquivo_pdf = file_get_contents($arquivo_temporario);

        
        // Conexão com o banco de dados
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepara a consulta SQL
        $sql = "INSERT INTO arquivos (numero_contrato, nome_documento, arquivo_pdf) VALUES (:numero_contrato, :nome_documento, :arquivo_pdf)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':numero_contrato', $numero_contrato);
        $stmt->bindParam(':nome_documento', $nome_documento);
        $stmt->bindParam(':arquivo_pdf', $arquivo_pdf, PDO::PARAM_LOB);

        // Executa a consulta
        $stmt->execute();

        echo "Arquivo PDF cadastrado com sucesso!";
    } else {
        echo "Nenhum arquivo PDF foi enviado.";
    }
}





