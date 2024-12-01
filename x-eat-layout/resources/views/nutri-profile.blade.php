<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Nutricionista</title>
    <link rel="stylesheet" href="{{ asset('css/styles-logout.css') }}">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <div class="green-bar"></div>
            <div class="welcome-card">
                <h1>Bem Vindo, Nutricionista</h1>
            </div>
        </header>
        <main>
            <div class="profile-box">
                <div class="profile-info">
                    <div class="profile-img">
                        <img src="/images/profile.jpg" alt="Nutricionista">
                    </div>
                    <div class="profile-details">
                        <h2>Dr. João Silva</h2>
                        <p><strong>Especialidade:</strong> Nutrição Esportiva</p>
                        <p><strong>CRM:</strong> 12345-NUT</p>
                        <p><strong>Consultas Realizadas:</strong> 150+ Clientes</p>
                    </div>
                </div>
                <div class="logout">
                    <a href="/login" class="btn sair">Sair</a>
                </div>
            </div>
        </main>
    </div>
    
    <!-- Script para alternar a visibilidade da senha -->
    <script>
        // Aqui você pode adicionar funções se necessário, como logout ou alternar visibilidade de informações
    </script>
</body>
</html>
