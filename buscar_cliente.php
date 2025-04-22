<?php
require_once 'conexaoBd.php';

header('Content-Type: application/json');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT c.*, p.nome 
                          FROM clientes c
                          LEFT JOIN planos p ON c.idPlano = p.idPlano
                          WHERE c.idClientes = ?");
    $stmt->execute([$id]);
    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($cliente) {
        echo json_encode($cliente);
    } else {
        echo json_encode(['error' => 'Cliente não encontrado']);
    }
} else {
    echo json_encode(['error' => 'ID não fornecido']);
}
?>