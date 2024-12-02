# X-Eat

Este projeto foi iniciado no 3°semestre de ADS na faculdade de tecnologia Fatec Ourinhos e foi tomada a continuidade dele nos semestres posteriores. X-Eat é uma aplicação para gerenciar refeições, acompanhar macronutrientes e criar planos alimentares personalizados. O sistema combina ferramentas de acompanhamento nutricional e organização diária de refeições.

## 🚀 Tecnologias Utilizadas

- **Backend**: Laravel (PHP)
- **Frontend**: Blade Templates e JavaScript
- **Estilização**: CSS, Bootstrap
- **Build Tools**: Vite
- **Banco de Dados**: MySQL
- **Gerenciamento de Dependências**: Composer e npm

## 📂 Estrutura do Projeto

- **`app/`**: Contém os modelos e lógica de negócios.
- **`resources/`**: Arquivos de views (Blade), CSS e JavaScript.
- **`public/`**: Arquivos públicos, como imagens e scripts minificados.
- **`routes/`**: Configuração das rotas da aplicação.
- **`database/`**: Migrações e seeders para configuração do banco de dados.

## 🛠️ Configuração do Ambiente

### Pré-requisitos

- PHP >= 8.1
- Composer
- Node.js >= 16
- Banco de Dados MySQL

### Passos de Instalação

1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/x-eat.git
   cd x-eat
   ```

2. Instale as dependências do PHP:
   ```bash
   composer install
   ```

3. Instale as dependências do npm:
   ```bash
   npm install
   ```

4. Configure o arquivo `.env`:
   - Copie o arquivo de exemplo: `cp .env.example .env`
   - Configure o banco de dados e outras variáveis no arquivo `.env`.

5. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

6. Execute as migrações e seeders:
   ```bash
   php artisan migrate --seed
   ```

7. Compile os assets:
   ```bash
   npm run build
   ```

8. Inicie o servidor:
   ```bash
   php artisan serve
   ```

9. Acesse a aplicação no navegador: [http://localhost:8000](http://localhost:8000)

## ⚙️ Scripts do npm

- `npm run dev`: Inicia o servidor de desenvolvimento.
- `npm run build`: Gera os arquivos de produção.

## 📋 Funcionalidades Principais

- Cadastro e gerenciamento de refeições.
- Gráficos dinâmicos de macronutrientes.
- Controle de consumo de água semanal.
- Integração para envio de notificações.

## 👨‍💻 Equipe de desenvolvimento

-Matheus felipe leal -Desenvolvedor
-Rafael Banco de dados
-Gean correia -Documentação
-Rafael Diagramas 

## 🤝 Contribuições (externas)

1. Faça um fork do repositório.
2. Crie uma branch com a sua feature: `git checkout -b minha-feature`.
3. Commit suas alterações: `git commit -m 'Adicionei minha feature'`.
4. Envie para a branch principal: `git push origin minha-feature`.
5. Abra um Pull Request.

## 📜 Licença

Este projeto está licenciado sob a licença MIT.
```
