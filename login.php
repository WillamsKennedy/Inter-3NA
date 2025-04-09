<?php 
    require("conexaobd.php");
    
    //$cpf = $_POST["cpf"];
    //$senha = md5($_POST["senha"]);
    //
    //if($_SERVER['REQUEST_METHOD'] == 'POST') {
//
//
    //    
    //}
    
    echo "INSERT INTO clientes(nome,cpf,dataNascimento,senha,telefone,endereco,numero,bairro,complemento,cep) VALUES ('".$_SESSION['cadastro']['nome']."','".$_SESSION['cadastro']['cpf']."','".$_SESSION['cadastro']['nascimento']."','".$_SESSION['cadastro']['pass']."','".$_SESSION['cadastropasso2']['telefone']."','".$_SESSION['cadastropasso2']['endereco']."','".$_SESSION['cadastropasso2']['numero']."','".$_SESSION['cadastropasso2']['bairro']."','".$_SESSION['cadastropasso2']['complemento']."','".$_SESSION['cadastropasso2']['cep']."')";
?>