<?php 
    session_start();
    require("conexaobd.php");
    $erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'] ?? '';
    $senha = $_POST['senha'] ?? '';
    
    if (!empty($cpf) && !empty($senha)) {
       
        
            $stmt = $pdo->prepare("SELECT idClientes, cpf, nome, senha, plano FROM clientes WHERE cpf = ?");
            $stmt->execute([$cpf]);
            $user = $stmt->fetch();
            
            //var_dump($user);
            
            if ($user && $senha === $user['senha']) {
                $_SESSION = [
                    'user_id' => $user['idClientes'],
                    'username' => $user['nome'],
                    'planoatual' => $user['plano'],
                    'logado' => true
                ];
                header('Location: areaCliente.php');
                exit;
            } else {
                $_SESSION['senhainvalida'] = true;
                header('Location: loginCliente.php');
            }
        
            
       
    } 
}
?>
