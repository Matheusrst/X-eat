<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="{{ asset('css/styles-home.css') }}">
    <!-- Font Awesome para os ícones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Cabeçalho -->
        <header class="header">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <nav class="menu">
                <a href="#">Dietas</a>
                <a href="#">Procurar alimentos</a>
                <a href="#">Metas</a>
                <a href="#">Registros</a>
            </nav>
            <div class="actions">
                <a href="/login" class="login">
                    Login
                </a>
                <a href="/login" class="register">
                    Cadastrar-se
                </a>
            </div>
        </header>

        <!-- Conteúdo Principal -->
        <div class="content">
            <div class="text-section">
                <h1>Deixe sua dieta no piloto automático com o X-Eat!</h1>
                <p>
                    Criamos planos de refeições personalizados com base nas suas preferências alimentares, orçamento e cronograma.
                    Alcance suas metas nutricionais com facilidade usando nossa calculadora de calorias, planos semanais de refeições, listas de compras e muito mais.
                </p>
                <strong>Crie seu plano de refeições em segundos.</strong>
                <p>
                    Pronto para começar? Nos informe sobre sua dieta e deixe-nos cuidar do resto!
                </p>
            </div>
            <div class="image-section">
                <!-- Esta imagem será alterada quando a categoria for clicada -->
                <img id="main-image" src="/images/prato-1.jpg" alt="Imagem de refeição saudável">
            </div>
        </div>

        <!-- Categorias -->
    <div class="categories">
        <div class="category">
            <i class="fas fa-drumstick-bite"></i>
            <span>Carnes</span>
        </div>
        <div class="category selected">
            <i class="fas fa-carrot"></i>
            <span>Vegetais</span>
        </div>
        <div class="category">
            <i class="fas fa-apple-alt"></i>
            <span>Frutas</span>
        </div>
        <div class="category">
            <i class="fas fa-balance-scale"></i>
            <span>Balanceado</span>
        </div>
        <div class="category">
            <i class="fas fa-hamburger"></i>
            <span>Livre</span>
        </div>
    </div>
</body>
</html>

<script>
    // Adicionando o evento de clique nas categorias
    document.querySelectorAll('.category').forEach(function(category) {
        category.addEventListener('click', function() {
            // Remove a classe "selected" de todas as categorias
            document.querySelectorAll('.category').forEach(function(c) {
                c.classList.remove('selected');
            });

            // Adiciona a classe "selected" à categoria clicada
            category.classList.add('selected');

            // Altera a imagem com base na categoria selecionada
            var image = document.getElementById('main-image');

            if (category.innerText.trim() === 'Carnes') {
                image.src = '/images/prato-2.jpg'; // Alterar o caminho da imagem conforme necessário
            } else if (category.innerText.trim() === 'Vegetais') {
                image.src = '/images/prato-1.jpg'; // Alterar o caminho da imagem conforme necessário
            } else if (category.innerText.trim() === 'Frutas') {
                image.src = '/images/prato-3.jpg'; // Alterar o caminho da imagem conforme necessário
            } else if (category.innerText.trim() === 'Balanceado') {
                image.src = '/images/prato-4.jpg'; // Alterar o caminho da imagem conforme necessário
            } else if (category.innerText.trim() === 'Livre') {
                image.src = '/images/prato-5.jpg'; // Alterar o caminho da imagem conforme necessário
            }
        });
    });
</script>
