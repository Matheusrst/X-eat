<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Nutricionista</title>
    <link rel="stylesheet" href="{{ asset('css/styles-homeNutri.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Alimentos</a></li>
                    <li><a href="#">Refeições</a></li>
                    <li><a href="#">Acompanhamento</a></li>
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Pacientes</a></li>
                    <li><a href="#">Notificações</a></li>
                </ul>
            </nav>
            <div class="actions">
                <a href="#" class="button">Agendar consulta</a>
                <a href="/cadastro-paciente" class="button">Cadastrar paciente</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main>
            <!-- Header -->
            <header>
                <div class="header-cards">
                    <div class="card">
                        <i class="fas fa-calendar-plus"></i>
                        <span>Nova Consulta</span>
                    </div>
                    <div class="card">
                        <i class="fas fa-clock"></i>
                        <span>Histórico de consultas</span>
                    </div>
                    <div class="card">
                        <i class="fas fa-users"></i>
                        <span>Meus Pacientes</span>
                    </div>
                    <div class="card">
                        <i class="fas fa-check"></i>
                        <span>Minhas Metas</span>
                    </div>
                </div>
                <div class="profile" onclick="redirectToProfilePage()">
                    <i class="fas fa-user-circle"></i>
                </div>
            </header>

            <!-- Charts Section -->
            <section class="charts">
                <div class="chart-container">
                    <h2>Número de Pacientes e Consultas</h2>
                    <canvas id="patientsChart"></canvas>
                </div>
                <div class="chart-container">
                    <h2>Pacientes</h2>
                    <canvas id="ageDistributionChart"></canvas>
                </div>
            </section>
        </main>
    </div>

    <!-- Scripts -->
    <script>
        function redirectToProfilePage() {
        // Redireciona para a página de perfil do usuário
        window.location.href = "/nutri-profile"; // Aqui você deve colocar a URL do perfil do usuário
    }
        const ctx1 = document.getElementById('patientsChart').getContext('2d');
        const patientsChart = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
                datasets: [
                    {
                        label: 'Consultas',
                        data: [0, 0, 1, 2, 4],
                        borderColor: '#3AC07A',
                        fill: false,
                    },
                    {
                        label: 'Pacientes Novos',
                        data: [0, 0, 1, 1, 2],
                        borderColor: '#82E3AA',
                        fill: false,
                    },
                ],
            },
        });

        const ctx2 = document.getElementById('ageDistributionChart').getContext('2d');
        const ageDistributionChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Bebê', 'Pré-escolar', 'Escolar', 'Adolescente', 'Adulto', 'Idoso'],
                datasets: [
                    {
                        data: [5, 10, 20, 25, 30, 10],
                        backgroundColor: ['#3AC07A', '#6EDABE', '#F4C200', '#FF6347', '#FFCC00', '#A5A5A5'],
                    },
                ],
            },
        });
    </script>
</body>
</html>
