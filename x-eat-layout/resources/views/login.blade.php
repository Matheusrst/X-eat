<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <div class="green-bar"></div>
            <div class="welcome-card">
                <h1>Bem Vindo</h1>
            </div>
        </header>
        <main>
            <div class="login-box">
                <div class="novo-login">
                    <h2>NOVO LOGIN</h2>
                    <br />
                    <br />
                    <button class="btn criar-conta">Criar conta</button>
                    <br />
                    <div class="social-login">
                        <!-- Ícones de redes sociais -->
                        <span class="icon"><i class="fab fa-google"></i></span>
                        <span class="icon"><i class="fab fa-facebook-f"></i></span>
                        <span class="icon"><i class="fas fa-envelope"></i></span> <!-- Ícone de email -->
                    </div>
                </div>
                <div class="divider"></div>
                <div class="fazer-login">
                    <h2>FAÇA LOGIN</h2>
                    <form>
                        <div class="input-box">
                            <input type="text" placeholder="USUÁRIO">
                        </div>
                        <div class="input-box">
                            <input type="password" id="senha" placeholder="SENHA">
                            <!-- Ícone de olho para mostrar/ocultar senha -->
                            <span class="eye-icon" onclick="togglePassword()">
                                <i class="fas fa-eye" id="eye-icon"></i>
                            </span>
                        </div>
                        <div class="options">
                            <label>
                                <input type="checkbox"> Lembrar
                            </label>
                            <a href="#" class="recuperar-senha">Recuperar senha</a>
                        </div>
                        <button class="btn entrar">Entrar</button>
                        <div class="social-login">
                            <!-- Ícones de redes sociais -->
                            <span class="icon"><i class="fab fa-google"></i></span>
                            <span class="icon"><i class="fab fa-facebook-f"></i></span>
                            <span class="icon"><i class="fas fa-envelope"></i></span> <!-- Ícone de email -->
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <!-- Script para alternar a visibilidade da senha -->
    <script>
        function togglePassword() {
            var senha = document.getElementById("senha");
            var eyeIcon = document.getElementById("eye-icon");

            // Verificar o tipo do campo de senha
            if (senha.type === "password") {
                senha.type = "text";  // Torna o texto visível
                eyeIcon.classList.remove("fa-eye");  // Remove o ícone de olho fechado
                eyeIcon.classList.add("fa-eye-slash");  // Adiciona o ícone de olho aberto
            } else {
                senha.type = "password";  // Oculta o texto novamente
                eyeIcon.classList.remove("fa-eye-slash");  // Remove o ícone de olho aberto
                eyeIcon.classList.add("fa-eye");  // Adiciona o ícone de olho fechado
            }
        }
    </script>
</body>
</html>
