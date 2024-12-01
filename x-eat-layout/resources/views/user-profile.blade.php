<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="{{ asset('css/styles-logout.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Perfil do Usuário</h1>
        </header>
        <main>
            <div class="profile-info">
                <p><strong>Nome:</strong> João da Silva</p>
                <p><strong>Email:</strong> joao.silva@example.com</p>
                <p><strong>Data de Cadastro:</strong> 01/01/2024</p>
            </div>
            <div class="logout">
                <button class="btn sair" onclick="logout()">Sair</button>
            </div>
        </main>
    </div>

    <script>
        function logout() {
            // Aqui você pode limpar o armazenamento local, cookies ou realizar a lógica de logout no servidor
            alert("Você foi desconectado com sucesso!");
            // Redireciona para a página de login após o logout
            window.location.href = "/login"; // A URL da sua página de login
        }
    </script>
</body>
</html>
