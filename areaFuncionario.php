<?php 
        session_start();

        if (!isset($_SESSION['logadoFuncionario']) || $_SESSION['logadoFuncionario'] !== true) {
            header('Location: loginCliente.php');
            exit;
        }
    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Controle de Clientes</title>
  <link rel="stylesheet" href="loginCliente .css">
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
  <form class="col col-1" action="index.php">
    <div>
        <button class="btn btn-2" type="submit" id="login">
            Início
        </button>
    </div>
    
    </form>
    <div class=" botoes">
            <a href="logout.php">
                <button class="btn btn-2">
                    sair
                    

                </button>
            </a>
    </div>
  <h1>Controle de Clientes</h1>

  <div class="form">
    <input type="text" id="nome" placeholder="Nome do funcionário">
    <input type="text" id="cpf" placeholder="cpf">
    <button onclick="adicionarFuncionario()">Adicionar</button>
  </div>

  <table id="tabela">
    <thead>
      <tr>
        <th>Nome</th>
        <th>cpf</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody id="lista">
      <!-- Funcionários serão inseridos aqui -->
    </tbody>
  </table>

  <script>
    let lista = document.getElementById("lista");
    let funcionarioEditando = null;

    function adicionarFuncionario() {
      const nome = document.getElementById("nome").value.trim();
      const cpf = document.getElementById("cpf").value.trim();

      if (nome === "" || cpf === "") return alert("Preencha todos os campos!");

      if (funcionarioEditando) {
        funcionarioEditando.cells[0].innerText = nome;
        funcionarioEditando.cells[1].innerText = cpf;
        funcionarioEditando = null;
      } else {
        const novaLinha = lista.insertRow();

        novaLinha.insertCell(0).innerText = nome;
        novaLinha.insertCell(1).innerText = cpf;

        const acoes = novaLinha.insertCell(2);
        acoes.innerHTML = `
          <button class="btn edit" onclick="editarFuncionario(this)">Editar</button>
          <button class="btn delete" onclick="deletarFuncionario(this)">Deletar</button>
        `;
      }

      document.getElementById("nome").value = "";
      document.getElementById("cpf").value = "";
    }

    function editarFuncionario(botao) {
      const linha = botao.parentNode.parentNode;
      const nome = linha.cells[0].innerText;
      const cpf = linha.cells[1].innerText;

      document.getElementById("nome").value = nome;
      document.getElementById("cpf").value = cpf;
      funcionarioEditando = linha;
    }

    function deletarFuncionario(botao) {
      const confirmar = confirm("Tem certeza que deseja excluir este funcionário?");
      if (confirmar) {
        const linha = botao.parentNode.parentNode;
        linha.remove();
      }
    }
  </script>

</body>
</html>