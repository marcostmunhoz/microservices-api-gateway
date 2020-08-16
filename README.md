# API Gateway
## Projeto desenvolvido durante o curso básico de microservices.

### Setup

- Duplicar o arquivo .env.example para .env, e alterar as seguintes variáveis de acordo:
    - AUTHORS_SERVICE_BASE_URI: A URI base do serviço de autores.
    - AUTHORS_SERVICE_SECRET: A chave secreta para comunicação com o serviço de autores.
    - BOOKS_SERVICE_BASE_URI: A URI base do serviço de livros.
    - BOOKS_SERVICE_SECRET: A chave secret para comunicação com o serviço de livros.
- `composer install`, para instalar as dependências do projeto.
- `php artisan jwt:secret`, para gerar uma nova chave secreta JWT.
- `touch database/database.sqlite`, para criar o banco de dados de SQLite, caso queira usar esse tipo de banco.
- `php artisan migrate --seed`, para criar a tabela de usuários, criando também o usuário de testes.

### Usuário de testes
- E-mail: teste@mail.com
- Senha: teste@password
