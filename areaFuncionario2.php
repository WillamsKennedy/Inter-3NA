<?php 
        session_start();
        include('funcoes.php');
        

        if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
            header('Location: loginCliente.php');
            exit;
        }
    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Controle de Funcionários</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url(img/3.jpg);
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      padding: 40px;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form {
      display: flex;
      gap: 10px;
      justify-content: center;
      margin-bottom: 20px;
    }

    input, button {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
    }

    .btn {
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .edit {
      background: #ffc107;
      color: #fff;
    }

    .delete {
      background: #dc3545;
      color: #fff;
    }
  </style>
</head>
<body>
    
  <h1>Controle de Funcionários</h1>

  <div class="form">
    <input type="text" id="nome" placeholder="Nome do funcionário">
    <input type="text" id="cargo" placeholder="Cargo">
    <button onclick="adicionarFuncionario()">Adicionar</button>
  </div>

  <table id="tabela">
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Data de nascimento</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Numero</th>
        <th>Bairro</th>
        <th>Comlemento</th>
        <th>CEP</th>
        <th>Email</th>
        <th>Plano</th>
        <th>Ações</th>
      </tr>
      <?php
        $usuarios = verificartudoBd();
        if (!empty($usuarios)): ?>
          <?php foreach ($usuarios as $usuario): ?>
              <tr>
                  <td><?= htmlspecialchars($usuario['nome'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['cpf'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['nascimento'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['telefone'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['endereco'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['numero'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['bairro'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['complemento'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['cep'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['email'] ?? '') ?></td>
                  <td><?= htmlspecialchars($usuario['plano'] ?? '') ?></td>
                  <td>
                  <button class="btn edit" onclick="">Editar</button><br><br>
                  <button class="btn delete" onclick="">Deletar</button>
                  </td>
                  
              </tr>
          <?php endforeach; ?>
      <?php else: ?>
          <tr>
              <td colspan="4">Nenhum usuário encontrado</td>
          </tr>
      <?php endif; ?>
      
    </thead>
    <tbody id="lista">
      <!-- Funcionários serão inseridos aqui -->
    </tbody>
  </table>

</body>
</html>