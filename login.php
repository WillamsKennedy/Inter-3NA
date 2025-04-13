<?php 
    session_start();
    require("conexaobd.php");
    $erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'] ?? '';
    $senha = $_POST['senha'] ?? '';
    echo '1';
    if (!empty($cpf) && !empty($senha)) {
        echo '2';
        
            $stmt = $pdo->prepare("SELECT idClientes, cpf, nome, senha FROM clientes WHERE cpf = ?");
            $stmt->execute([$cpf]);
            $user = $stmt->fetch();
            echo '<br>';
            //var_dump($user);
            echo '<br>3';
            if ($user && $senha === $user['senha']) {
                $_SESSION['user_id'] = $user['idClientes'];
                $_SESSION['username'] = $user['nome'];
                header('Location: areaCliente.html');
                exit;
            } else {
                $_SESSION['senhainvalida'] = true;
                header('Location: loginCliente.php');
            }
        
            
       
    } 
}
?>
