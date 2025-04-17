<?php 
        session_start();
        // Caso seja null torna falso.
        if (!isset($_SESSION['logado'])) {
            $_SESSION['logado'] = false;
        }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BobNet</title>
    <!--Fonte do site-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <!--Pagina principal css -->
    <link rel="stylesheet" href="main-page.css">
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
            <a href="index.php" name="top"><img src="img/img-bobnet.png" alt="imagem_Bob_Net" ></a>
        </div>
        <?php if($_SESSION['logado']):?>
        <div>
            <a href="areaCliente.php">
                <button class="AreaCliente">
                    Area do Cliente
                </button>
            </a>
        </div>
        <?php else:?>
        <div class=" botoes">
            <a href='https://api.whatsapp.com/send?phone=5581985960647&' target="_blank">
                <button class="Login">
                    Assine
                </button>
            </a>
            <a href="loginCliente.php">
                <button class="AreaCliente">
                    Sou cliente
                </button>
            </a>
        </div>
        <?php endif;?>
    </header>
    <nav>
        <div class="bob-fibra">
            <h2>BOB FIBRA</h2>
        </div>
        <div class="esquerda">
            
            <a href="#planos" class="links-ancoras">
                <h4>Planos</h4>
            </a>
            <a href="#vantagens" class="links-ancoras">
                <h4>Vantagens</h4>
            </a>
            <a href="#duvidas" class="links-ancoras">
                <h4>Dúvidas</h4>
            </a>
        </div>
        <div class="direita">
            <a href='https://api.whatsapp.com/send?phone=5581985960647&' target="_blank" class="links-ancoras">
                <h4>Suporte</h4>
            </a>

        </div>
    </nav>
    <main>
        <img class="assine" src="img/img-assine.png" alt="assine-ja-bobnet">
        <h1>BobNet é a internet com o melhor suporte regional</h1>
        <p>
            Tenha internet com a melhor e mais recente tecnologia que permite jogar, assistir, escutar músicas e
            trabalhar em diversos dispositivos simultâneamente. Aproveite também o Wi-Fi e instalação grátis na compra
            de qualquer plano.
        </p>


        <section id="planos">
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
            <div class="second-card">
                <h2>PLANO PRIME</h2>
                <h2>100 MEGA</h2>
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
        <h1 id="vantagens">Bobnet oferece também diversas vantagens</h1>
        <p>
            Ao escolher nosso plano de internet, você terá uma experiência completa e sem complicações que garantem uma
            série de vantagens:
        </p>
        <ul>
            <li class="lista">Instalação grátis:</li>
        </ul>
        <p>
            Comece a usar o seu novo serviço de internet sem qualquer custo adicional para a instalação. Cuidamos de
            tudo para que você tenha uma conexão estável e de qualidade, sem taxas extras.
        </p>

        <ul>
            <li class="lista">Wi-Fi em comodato:</li>
        </ul>
        <p>
            Esqueça a necessidade de comprar ou de se preocupar com a manutenção de um roteador. Oferecemos um aparelho
            Wi-Fi moderno e eficiente em comodato, garantindo excelente cobertura de sinal em toda a sua casa.
        </p>

        <ul>
            <li class="lista">IPTV inclusa:</li>
        </ul>
        <p>
            Tenha acesso a uma ampla variedade de conteúdos de TV diretamente pela internet, sem a necessidade de
            antenas ou cabos extras. A IPTV oferece mais flexibilidade para assistir aos seus programas favoritos quando
            quiser.
        </p>

        <ul>
            <li class="lista">Suporte técnico especializado:
            </li>
        </ul>
        <p>
            Caso precise de assistência, nossa equipe técnica estará disponível para atendê-lo de segunda a sábado, das
            08:00 às 17:00. Garantimos um atendimento rápido e eficiente para resolver qualquer problema.
        </p>
        </ul>
        <h1 id="duvidas" class="espacamento-duvidas">Dúvidas frequentes</h1>
        <h3>Como contratar um plano de internet?</h3>
        <p class="espacamento-paragrafo-duvidas">
            Para contratar um plano de internet, basta ir à seção de planos e escolher o que lhe convém.
        </p>
        <h3>Qual o plano ideal para minha casa?</h3>
        <p class="espacamento-paragrafo-duvidas">
            Há diversos fatores que influenciam na escolha do plano ideal para sua residência, como o tamanho do local e
            a quantidade de dispositivos que utilizam a internet. Portanto, o mais adequado é entrar em contato com
            nossa equipe via WhatsApp para descobrir qual é o plano ideal.
        </p>
        <h3>Quais os benefícios de contratar um plano de internet?</h3>
        <p class="espacamento-paragrafo-duvidas">
            Os benefícios de contratar um plano de internet incluem instalação gratuita, Wi-Fi em comodato sem custos
            adicionais, IPTV inclusa com uma grande variedade de canais, além de suporte técnico especializado para
            garantir que você esteja sempre conectado. Esses diferenciais tornam o serviço mais prático, completo e
            confiável.
        </p>
        <h3>Como efetuar o cancelamento da minha internet?</h3>
        <p class="espacamento-paragrafo-duvidas">
            Para cancelar sua internet, entre em contato com a nossa equipe via WhatsApp para fazer a solicitação e
            consultar as condições.
        </p>
    </main>
    <footer> Developed by saint group</footer>
</body>

</html>