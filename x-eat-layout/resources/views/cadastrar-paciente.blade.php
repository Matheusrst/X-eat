<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Paciente</title>
    <link rel="stylesheet" href="css/styles-pacientes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="/images/logo.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="/home-nutri"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fas fa-utensils"></i> Alimentos</a></li>
                    <li><a href="#"><i class="fas fa-concierge-bell"></i> Refeições</a></li>
                    <li><a href="#"><i class="fas fa-chart-line"></i> Acompanhamento</a></li>
                    <li><a href="#"><i class="fas fa-calendar-alt"></i> Agenda</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> Pacientes</a></li>
                    <li><a href="#"><i class="fas fa-bell"></i> Notificações</a></li>
                </ul>
                <a href="#" class="cta">Agendar consulta</a>
                <a href="#" class="active cta">Cadastrar paciente</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="content">
            <header>
                <div />
            </header>
            <section class="form-section">
                <h1>Cadastrar Paciente</h1>
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nome">*Nome Completo</label>
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" id="nome" class="input-nome" placeholder="Digite o nome completo">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sexo">*Sexo</label>
                            <div class="input-icon">
                                <i class="fas fa-mars"></i>
                                <select id="sexo" class="select-opcao">
                                    <option value="">Selecione</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ocupacao">*Ocupação</label>
                            <div class="input-icon">
                                <i class="fas fa-briefcase"></i>
                                <input type="text" id="ocupacao" class="input-ocupacao" placeholder="Digite a ocupação">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="data-nascimento">*Data de Nascimento</label>
                            <div class="input-icon">
                                <i class="fas fa-calendar-alt"></i>
                                <input type="date" id="data-nascimento" class="input-data">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">*E-mail</label>
                            <div class="input-icon">
                                <i class="fas fa-envelope"></i>
                                <input type="email" id="email" class="input-email" placeholder="Digite o e-mail">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nacionalidade">*Cidade</label>
                            <div class="input-icon">
                                <i class="fas fa-globe"></i>
                                <select id="nacionalidade" class="select-opcao">
                                    <option value="">Selecione</option>
                                    <option value="brasileira">São paulo</option>
                                    <option value="brasileira">Rio de janeiro</option>
                                    <option value="brasileira">Ourinhos</option>
                                    <option value="brasileira">Curitiba</option>
                                    <option value="outra">Outra</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cep">Cep</label>
                            <div class="input-icon">
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" id="cep" class="input-cep" placeholder="Digite o CEP">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="telefone">*Número de Celular</label>
                            <div class="input-icon">
                                <i class="fas fa-phone"></i>
                                <input type="text" id="telefone" class="input-telefone" placeholder="Digite o número">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox">
                            Enviar questionário inicial por mensagem de e-mail
                        </label>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn-cancel">Cancelar</button>
                        <button type="submit" class="btn-submit">Cadastrar</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>
</html>
