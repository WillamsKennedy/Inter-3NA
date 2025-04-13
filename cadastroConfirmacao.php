<?php

require('conexaobd.php');
session_start(); 

if (!isset($_SESSION['cadastro']) || !isset($_SESSION['cadastroPasso2']) || !isset($_SESSION['cadastroPasso3'])) {
    header('Location: signupCliente.html'); //Retorna para o inicio do cadastro
    exit;
}

$dados = array_merge($_SESSION['cadastro'], $_SESSION['cadastroPasso2'], $_SESSION['cadastroPasso3']);



echo "<h1>Cadastro Concluído!</h1>";
echo "<pre>";
print_r($dados);
echo "</pre>";

// Verifica se CPF já existe
$sql = "SELECT * FROM clientes WHERE cpf = :cpf";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':cpf', $_SESSION['cadastro']['cpf'], PDO::PARAM_STR);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

if ($resultado) {
    echo "CPF já existe no banco de dados.";
} else {
    echo "CPF não existe, pode ser inserido.";

    
    $query = "INSERT INTO clientes(nome, cpf, dataNascimento, senha, telefone, endereco, numero, bairro, complemento, cep, email, plano) 
              VALUES (:nome, :cpf, :nascimento, :senha, :telefone, :endereco, :numero, :bairro, :complemento, :cep, :email, :plano)";
    
    
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':nome' => $_SESSION['cadastro']['nome'],
        ':cpf' => $_SESSION['cadastro']['cpf'],
        ':nascimento' => $_SESSION['cadastro']['nascimento'],
        ':senha' => $_SESSION['cadastro']['senha'],
        ':telefone' => $_SESSION['cadastroPasso2']['telefone'],
        ':endereco' => $_SESSION['cadastroPasso2']['endereco'],
        ':numero' => $_SESSION['cadastroPasso2']['numero'],
        ':bairro' => $_SESSION['cadastroPasso2']['bairro'],
        ':complemento' => $_SESSION['cadastroPasso2']['complemento'],
        ':cep' => $_SESSION['cadastroPasso2']['cep'],
        ':email' => $_SESSION['cadastroPasso3']['email'],
        ':plano' => $_SESSION['cadastroPasso3']['plano']
    ]);
}

$pdo = null;
session_destroy();
exit;
?>

<?php
//  session_start();
//  require("conexaobd.php");
//  
//  
//
//  if($_SERVER['REQUEST_METHOD'] == 'POST') {
//
//    $nome = $_POST["plano"];
//    $cpf = $_POST["email"];
//    $senha = $_POST["pass"];
//
//    $sql = "SELECT * FROM clientes WHERE cpf = :cpf";
//    $stmt = $pdo->prepare($sql);
//    $stmt->bindParam(':cpf', $cpf,PDO::PARAM_STR);
//    $stmt->execute();
//    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
//    
//    
//    if ($resultado > 0) {
//        echo "CPF já existe no banco de dados.";
//    } else {
//        echo "CPF não existe, pode ser inserido.";
//
//      $query = "INSERT INTO clientes(nome,cpf,senha) VALUES ('$nome','$cpf',//'$senha')";
//
//       $stmt = $pdo->prepare($query);
//       $stmt->execute();
//    }
//
//    $pdo = null;
//  }
//?>