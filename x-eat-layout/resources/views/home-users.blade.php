<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles-homeUsers.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="/images/logo.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li class="active"><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fas fa-utensils"></i> Alimentos</a></li>
                    <li><a href="#"><i class="fas fa-concierge-bell"></i> Refeições</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> Acompanhamento</a></li>
                    <li><a href="#"><i class="fas fa-calendar-alt"></i> Agenda</a></li>
                    <li><a href="#"><i class="fas fa-bell"></i> Notificações</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main>
            <!-- Header -->
            <header>
                <div class="header-cards">
                    <div class="card">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Cardápio</span>
                    </div>
                    <div class="card">
                        <i class="fas fa-history"></i>
                        <span>Histórico Alimentar</span>
                    </div>
                    <div class="card">
                        <i class="fas fa-search"></i>
                        <span>Buscar Alimentos</span>
                    </div>
                    <div class="card">
                        <i class="fas fa-tasks"></i>
                        <span>Minhas Metas</span>
                    </div>
                </div>
                <div class="profile" onclick="redirectToProfilePage()">
                    <img src="/images/profile.jpg" alt="profile">
                </div>
            </header>

            <!-- Content -->
            <section class="content">
                <div class="recent-meals">
                    <h2>Últimas refeições Consumidas</h2>
                    <div class="filters">
                        <span><i class="fas fa-bookmark"></i> Favoritos</span>
                        <span><i class="fas fa-heart"></i> Minhas receitas</span>
                    </div>
                    <div class="meal-card">
                        <img src="/images/tapioca.jpg" alt="Tapioca">
                        <div class="meal-info">
                            <h3>Tapioca</h3>
                            <span><i class="fas fa-sun"></i> Café da manhã</span>
                            <div class="details">
                                <span><i class="fas fa-weight-hanging"></i> por 100g</span>
                                <span><i class="fas fa-bolt"></i> Energia 231 Kcal</span>
                                <span><i class="fas fa-tint"></i> Gordura 6g</span>
                                <span><i class="fas fa-leaf"></i> Carboidratos 36g</span>
                                <span><i class="fas fa-dumbbell"></i> Proteína 8g</span>
                            </div>
                        </div>
                        <div class="icons">
                            <i class="fas fa-bookmark"></i>
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div class="meal-card">
                        <img src="/images/arroz.jpg" alt="Arroz com Carne">
                        <div class="meal-info">
                            <h3>Arroz com Carne</h3>
                            <span><i class="fas fa-sun"></i> Almoço</span>
                            <div class="details">
                                <span><i class="fas fa-weight-hanging"></i> por 280g</span>
                                <span><i class="fas fa-bolt"></i> Energia 460 Kcal</span>
                                <span><i class="fas fa-tint"></i> Gordura 24g</span>
                                <span><i class="fas fa-leaf"></i> Carboidratos 65g</span>
                                <span><i class="fas fa-dumbbell"></i> Proteína 22g</span>
                            </div>
                        </div>
                        <div class="icons">
                            <i class="fas fa-bookmark"></i>
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>

                <div class="macronutrients">
                    <h3>Refeições</h3>
                    <div class="meal-type">
                        <div class="chart-container">
                            <div class="chart" id="chart1">
                                <span id="percent1">30%</span>
                            </div>
                            <span>Café da Manhã</span>
                        </div>
                        <div class="chart-container">
                            <div class="chart" id="chart2">
                                <span id="percent2">50%</span>
                            </div>
                            <span>Almoço</span>
                        </div>
                        <div class="chart-container">
                            <div class="chart" id="chart3">
                                <span id="percent3">20%</span>
                            </div>
                            <span>Lanche</span>
                        </div>
                    </div>

                    <h3>Distribuição dos Macronutrientes</h3>
                    <div class="bars">
                        <div>
                            <span>Proteínas</span>
                            <div class="progress">
                                <div class="proteins"></div>
                            </div>
                        </div>
                        <div>
                            <span>Gorduras</span>
                            <div class="progress">
                                <div class="fats"></div>
                            </div>
                        </div>
                        <div>
                            <span>Carboidratos</span>
                            <div class="progress">
                                <div class="carbs"></div>
                            </div>
                        </div>
                    </div>

                    <div class="water-intake">
                        <h3>Consumo de Água Semanal</h3>
                        <div class="graph">
                            <div class="bar" id="monday"><span>Seg</span></div>
                            <div class="bar" id="tuesday"><span>Ter</span></div>
                            <div class="bar" id="wednesday"><span>Qua</span></div>
                            <div class="bar" id="thursday"><span>Qui</span></div>
                            <div class="bar" id="friday"><span>Sex</span></div>
                            <div class="bar" id="saturday"><span>Sáb</span></div>
                            <div class="bar" id="sunday"><span>Dom</span></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        function redirectToProfilePage() {
        // Redireciona para a página de perfil do usuário
        window.location.href = "/user-profile"; // Aqui você deve colocar a URL do perfil do usuário
    }

    window.onload = function() {
        // Atualizando as barras de macronutrientes
        const protein = 30; // Exemplo de 30% de proteínas
        const fats = 24; // Exemplo de 24% de gorduras
        const carbs = 46; // Exemplo de 46% de carboidratos

        // Atualizar as larguras das barras de progresso
        document.querySelector('.proteins').style.width = protein + '%';
        document.querySelector('.fats').style.width = fats + '%';
        document.querySelector('.carbs').style.width = carbs + '%';

        // Atualizar os gráficos de pizza
        document.getElementById('chart1').style.background = `conic-gradient(#3AC07A 0% ${protein}%, #F5F5F5 ${protein}% 100%)`;
        document.getElementById('chart2').style.background = `conic-gradient(#FF6347 0% ${fats}%, #F5F5F5 ${fats}% 100%)`;
        document.getElementById('chart3').style.background = `conic-gradient(#FFCC00 0% ${carbs}%, #F5F5F5 ${carbs}% 100%)`;

        // Atualizar as porcentagens visíveis dentro dos gráficos
        document.getElementById('percent1').textContent = `${protein}%`;
        document.getElementById('percent2').textContent = `${fats}%`;
        document.getElementById('percent3').textContent = `${carbs}%`;

        // Atualizando o gráfico de consumo de água
        const dailyWaterConsumption = {
            monday: 200,
            tuesday: 400,
            wednesday: 500,
            thursday: 300,
            friday: 600,
            saturday: 500,
            sunday: 450
        };

        const maxDailyConsumption = 1000; // Meta diária
        Object.keys(dailyWaterConsumption).forEach(day => {
            const bar = document.getElementById(day);
            const dailyPercentage = (dailyWaterConsumption[day] / maxDailyConsumption) * 100;
            bar.style.height = dailyPercentage + '%';
        });
    };
</script>

</body>
</html>
