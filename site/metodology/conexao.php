<?php
$host = 'localhost';
$dbname = 'projetometod';
$usuario = 'root';
$senha = '';

// Conexão com o banco de dados
$conn = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);