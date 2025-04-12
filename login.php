<?php 
    require("conexaobd.php");

    $erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    
    if (!empty($cpf) && !empty($senha)) {
        try {
            $stmt = $pdo->prepare("SELECT id, cpf, senha FROM usuarios WHERE cpf = ?");
            $stmt->execute([$cpf]);
            $user = $stmt->fetch();
            
            if ($user && password_verify($password, $user['password_hash'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['nome'];
                header('Location: dashboard.php');
                exit;
            } else {
                $erro = 'Usuário ou senha incorretos.';
            }
        } catch (PDOException $e) {
            $erro = 'Erro ao realizar login: ' . $e->getMessage();
        }
    } 
}
?>
