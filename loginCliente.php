

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cliente</title>
    <!--BOXICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <!--STYLE-->
    <link rel="stylesheet" href="loginCliente.css">
</head>
<body>
    <?php 
        session_start();
    ?>
    <div class="form-container">
        <div class="col col-1">
            <p class="featured-words">Página do <span>Usuário</span></p>
        </div>


        <div class="col col-2">
            <a href="loginCliente.php">
                <div class="btn-box">
                    <button class="btn btn-1" id="login">
                        Login
                    </button>
                </div>
            </a>

            <div >
                <a href="signupCliente.php">
                    <div class="btn-box">
                        <button class="btn btn-2" id="register">
                            Registro
                        </button>
                    </div>
                </a>
            </div>

            <!--Login form container-->
            <form class="login-form" method="POST" action="login.php">
                <div class="form-title">
                    <span>Login</span>
                </div>
                <div class="form-inputs">
                <?php 
                        if(isset($_SESSION['senhainvalida'])):
                    ?>
                    <div>
                        <p class="error-message">
                            <?php  
                                echo 'CPF ou senha inválidos.'; 
                            ?>
                        </p>
                    </div>
                    <?php 
                        endif;
                        unset($_SESSION['senhainvalida']);
                        
                    ?>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="CPF" name="cpf" id="idcpf" required>
                        <i class="bx bx-user icon"></i>
                    </div>
                    
                        <div class="input-box">
                            <input type="password" class="input-field" placeholder="Password" name="senha" id="idsenha" required>
                            <i class="bx bx-lock-alt icon"></i>
                        </div>
                        <div class="forgot-pass">
                            <a href="#">Forgot password?</a>
                        </div>
                        <div class="input-box" >
                            <button type="submit" class="input-submit" name="login" id="idlogin">
                                <span>Login</span>
                                <i class="bx bx-right-arrow-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="social-login">
                        <!-- <i class="bx bxl-google"></i>
                        <i class="bx bxl-facebook"></i>
                        <i class="bx bxl-twitter"></i>
                        <i class="bx bxl-github"></i> -->
                    </div>
            </form>
</body>
</html>