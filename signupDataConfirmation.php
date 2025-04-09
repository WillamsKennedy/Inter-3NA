<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cliente</title>
    <!--BOXICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <!--STYLE-->
    <link rel="stylesheet" href="signupCliente.css">
</head>
<body>
<div class="container">
        <h1>Cadastro Concluído!</h1>
        
        <?php if ($resultado): ?>
            <div class="error-message">
                CPF já cadastrado em nosso sistema. Por favor, verifique seus dados ou entre em contato com o suporte.
            </div>
        <?php else: ?>
            <div class="success-message">
                Seu cadastro foi realizado com sucesso! Abaixo estão os dados registrados:
            </div>
            
            <div class="dados-cadastro">
                <h2>Dados Pessoais</h2>
                <p><strong>Nome:</strong> <?php echo htmlspecialchars($dados['nome']); ?></p>
                <p><strong>CPF:</strong> <?php echo htmlspecialchars($dados['cpf']); ?></p>
                <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($dados['nascimento']); ?></p>
                <p><strong>Telefone:</strong> <?php echo htmlspecialchars($dados['telefone']); ?></p>
                
                <h2>Endereço</h2>
                <p><strong>Endereço:</strong> <?php echo htmlspecialchars($dados['endereco']); ?></p>
                <p><strong>Número:</strong> <?php echo htmlspecialchars($dados['numero']); ?></p>
                <p><strong>Bairro:</strong> <?php echo htmlspecialchars($dados['bairro']); ?></p>
                <p><strong>Complemento:</strong> <?php echo htmlspecialchars($dados['complemento']); ?></p>
                <p><strong>CEP:</strong> <?php echo htmlspecialchars($dados['cep']); ?></p>
            </div>
            
            <p style="text-align: center; margin-top: 30px;">
                <a href="login.html" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Ir para Login</a>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>