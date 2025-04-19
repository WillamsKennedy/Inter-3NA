<?php
session_start();
include('funcoes.php');
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
        }

        $funcionario = verificarFuncionario($cpf);
        if ($funcionario && $senha === $funcionario['senha']) {
            $_SESSION = [
                'user_id' => $funcionario['idFuncionario'],
                'username' => $funcionario['nome'],
                'cargo' => $funcionario['cargo'],
                'logadoFuncionario' => true
            ];
            header('Location: areaFuncionario.php');
        } else {
            $_SESSION['senhainvalida'] = true;
            header('Location: loginCliente.php');
        }
    }
}
?>

<?php
/*         
            elseif($_SESSION['logadoFuncionario']):
        ?>
        <div>
            <a href="areaFuncioanrio.php">
                <button class="AreaCliente">
                    Area do funcionario
                </button>
            </a>
        </div>
    */
?>