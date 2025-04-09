<?php
  session_start();

  if (!isset($_SESSION['cadastro'])) {
    header('Location: signupClient.html'); // Redireciona se o Passo 1 não foi concluído
    exit;
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Recebe a informação do cadastro 3/3
      $_SESSION['cadastroPasso3'] = [
      'plano' => $_POST["plano"],
      'email' => $_POST["email"]
    ];

    //Verificação do email
    $verificarEmail = verificarEmail($_SESSION['cadastroPasso3']['email']);

    if($verificarEmail === true) {
      header('Location: signupDataConfirmation.php');
      exit;
  } else {
      $_SESSION['erro_email'] = $verificarEmail;
      header('Location: signupClientePasso3.php');
      exit;
  }
    
  }

  


?>