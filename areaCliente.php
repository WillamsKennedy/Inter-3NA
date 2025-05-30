<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: loginCliente.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do cliente</title>
    <!--Fonte do site-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!--STYLE-->
    <link rel="stylesheet" href="areaCliente.css">
    <!--Icone whatsapp-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <!--Botao flutuante whatsapp-->
    <div class="button-whatsapp">
        <a href='https://api.whatsapp.com/send?phone=5581985960647&' target="_blank" class="icon">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <header>
        <div>
            <a href="index.php" name="top"><img src="img/img-bobnet.png" alt="imagem_Bob_Net"></a>
        </div>

        <div class="">
            <p class="usuario">
                <?php
                echo $_SESSION['username'] . "<br>";

                ?>
            </p>
        </div>

        <div class=" botoes">
            <a href="logout.php">
                <button class="AreaCliente">
                    sair


                </button>
            </a>
        </div>
    </header>
    <nav>
        <div class="bob-fibra">
            <h2>BOB FIBRA</h2>
        </div>
        <div class="esquerda">
            <a href="#promocoes" class="links-ancoras">
                <h4>Promoções</h4>
            </a>
            <a href="#alterar" class="links-ancoras">
                <h4>Alterar Plano</h4>
            </a>
            <a href="#feedback" class="links-ancoras">
                <h4>Feedback</h4>
            </a>
        </div>
        <div class="direita">
            <a href='https://api.whatsapp.com/send?phone=5581985960647&' target="_blank" class="links-ancoras">
                <h4>Suporte</h4>
            </a>
        </div>
    </nav>
    <main>
        <div class=" col-1">

            <div class="exibir-info">
                <h2>Plano atual</h2>
                <?php
                echo $_SESSION['planoatual'];
                ?>
            </div>


            <div class="exibir-info">
                <h2>Faturas disponível</h2>
                Pagar fatura
            </div>


            <a href='https://api.whatsapp.com/send?phone=5581985960647&' target="_blank" class="links-ancoras">
                <div class="exibir-info">
                    <h2>Segunda via de pagamento</h2>
                    Solicitar via whatsapp
                </div>
            </a>
        </div>
        <div class="alter-plano">
            <h1>Alterar plano</h1>
        </div>

        <section id="alterar">

            <div class="first-card">
                <h2>PLANO SUPER</h2>
                <h2>70 MEGA</h2>
                <h3>INCLUI:</h3>
                <h4>+ Wi-Fi 5G em comodato</h4>
                <h4>+ Instalação grátis</h4>
                <h4>+ IPTV streaming</h4>
                <h5>Por:xxx/mês</h5>
                <div class="btn-box">
                    <a href='https://api.whatsapp.com/send?phone=5581985960647&' target="_blank">
                        <button class="plano-btn">
                            <i class="fab fa-whatsapp"></i> ASSINE JÁ
                        </button>
                    </a>
                </div>

            </div>
            <div class="third-card">
                <h2>PLANO HIPER</h2>
                <h2>150 MEGA</h2>
                <h3>INCLUI:</h3>
                <h4>+ Wi-Fi 5G em comodato</h4>
                <h4>+ Instalação grátis</h4>
                <h4>+ IPTV streaming</h4>
                <h5>Por:xxx/mês</h5>
                <div class="btn-box">
                    <a href='https://api.whatsapp.com/send?phone=5581985960647&' target="_blank">
                        <button class="plano-btn">
                            <i class="fab fa-whatsapp"></i> ASSINE JÁ
                        </button>
                    </a>
                </div>
            </div>
            <div class="fourth-card">
                <h2>PLANO FULL</h2>
                <h2>200 MEGA</h2>
                <h3>INCLUI:</h3>
                <h4>+ 2 Wi-Fi 5G em comodato</h4>
                <h4>+ Instalação grátis</h4>
                <h4>+ IPTV streaming</h4>
                <h5>Por:xxx/mês</h5>
                <div class="btn-box">
                    <a href='https://api.whatsapp.com/send?phone=5581985960647&' target="_blank">
                        <button class="plano-btn">
                            <i class="fab fa-whatsapp"></i> ASSINE JÁ
                        </button>
                    </a>
                </div>
            </div>
        </section>
        <h1>Promoção</h1>
        <div class="promocao-box" id="promocoes">
            <div class="promocao">
                <h2>PROMOÇÃO</h2>
                <h2>BLACK FRIDAY</h2>
                <h3>CONTRATANDO O PLANO FULL</h3>
                <h4>no mês de novembro</h4>
                <h2>Receba 250 MEGAS até o fim do ano</h2>
                <h3>Enquanto mantiver o plano full</h3>
                <a href='https://api.whatsapp.com/send?phone=5581985960647&' target="_blank">
                    <button class="plano-btn-2">
                        <i class="fab fa-whatsapp"></i> ASSINE JÁ
                    </button>
                </a>
            </div>
        </div>
    </main>
    <footer>
        <div class="container" id="feedback">
            <div class="feedback-section">
                <div class="text-section">
                    <h1>Feed<br>Back</h1>

                </div>
                <div class="feedback-form">
                    <p>O seu feedback impulsiona nossa empresa a evoluir e atender melhor às suas expectativas!</p>
                    <textarea placeholder="Insira seu feedback"></textarea>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>