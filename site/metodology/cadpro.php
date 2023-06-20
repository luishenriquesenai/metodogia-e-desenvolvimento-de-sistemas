<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>

<body>

    <!-- <h1>Upload PDF BLOB</h1> -->

    <?php
        // Receber os dados do formulario
        // $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        // Acessa IF quando o usuário clica no botao
        // if(!empty($dados['CadArquivoPdf'])){
            //var_dump($dados);

            // Receber o arquivo PDF do formulario
            // $arquivo_pdf = $_FILES['arquivo_pdf'];
            //var_dump($arquivo_pdf);

            // validar se he arquivo PDF
            // if($arquivo_pdf['type'] == "application/pdf"){
                // Converter o arquivo para blob
    //             $arquivo_pdf_blob = file_get_contents($arquivo_pdf['tmp_name']);

    //             $query_arquivo = "INSERT INTO arquivos (numero_contrato, nome_documento, arquivo_pdf) VALUES (:numero_contrato, :nome_documento, :arquivo_pdf)";
    //             $cad_arquivo = $conn->prepare($query_arquivo);
    //             $cad_arquivo->bindParam(':numero_contrato', $dados['numero_contrato']);
    //             $cad_arquivo->bindParam(':nome_documento', $arquivo_pdf['name']);
    //             $cad_arquivo->bindParam(':arquivo_pdf', $arquivo_pdf_blob);
    //             $cad_arquivo->execute();

    //             if($cad_arquivo->rowCount()){
    //                 echo "<p style='color: green;'>Arquivo cadastrado com sucesso!</p>";
    //             }else{
    //                 echo "<p style='color: #f00;'>Erro: Arquivo não cadastrado com sucesso!</p>";
    //             }

    //         }else{
    //             echo "<p style='color: #f00;'>Erro: Extensão do arquivo inválido. Necessário enviar arquivo PDF!</p>";
    //         }

    //     }
    // ?>

    <!-- <form method="POST" action="" enctype="multipart/form-data">
        <label>Número do Contrato: </label>
        <input type="text" name="numero_contrato" placeholder="Número do contrato"><br><br>

        <label>Arquivo PDF: </label>
        <input type="file" name="arquivo_pdf"><br><br>

        <input type="submit" name="CadArquivoPdf" value="Enviar"><br><br>
    </form>

</body>

</html> -->