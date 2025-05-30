<?php
session_start();
require('conexaobd.php');
include 'funcoes.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //Recebe a informação do cadastro 1/3
  $_SESSION['cadastroFuncionario'] = [
    'nome' => $_POST["nome"],
    'cpf' => $_POST["cpf"],
    'cargo' => $_POST["cargo"],
    'senha' => $_POST["senha"]
  ];


  $verificarSenha = verificarSenha($_SESSION['cadastrofuncionario']['senha']);

  if ($verificarSenha === true) {
    $query = "INSERT INTO funcionarios(nome, cpf, senha, cargo) 
              VALUES (:nome, :cpf, :senha, :cargo)";

    $stmt = $pdo->prepare($query);
    $stmt->execute([
      ':nome' => $_SESSION['cadastroFuncionario']['nome'],
      ':cpf' => $_SESSION['cadastroFuncionario']['cpf'],
      ':senha' => $_SESSION['cadastroFuncionario']['senha'],
      ':cargo' => $_SESSION['cadastroFuncionario']['cargo']
    ]);

    header('Location: signupFuncionariosConfirmation.php');
    //}

    $pdo = null;
    //session_destroy();
    $_SESSION['cadastroConcluido'] = true;
    exit;
  } else {
    $_SESSION['senhainvalida'] = $verificarSenha;
    header('Location: loginCadastroFuncionarios.php');
    exit;
  }
}
