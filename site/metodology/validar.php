<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{


     include_once("conexao.php");
     $email = $_POST['email'];
     $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
    $result = $conn->query($sql);
    
    if(mysqli_num_rows($result) < 1) 
    {
     unset($_SESSION['email']);
     unset($_SESSION['senha']);
     header('location: index.php');
    }

    else
    {
     $_SESSION['email'] = $email;
     $_SESSION['senha'] = $senha;
header('location: pgusuario.php');
     }


 }
 else
 {
      header('location:index.php');    
 }
 ?>