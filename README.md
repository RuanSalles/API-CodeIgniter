# API CODEIGNITER 4

## Como buildar o projeto

1. Clone o repositório:
```bash
git clone git@github.com:RuanSalles/API-CodeIgniter.git
```

2. Acesse o diretório do projeto:
```bash
cd API-CodeIgniter
```

3. Instale as dependências do Composer:
```bash
composer install
```

Caso queira rodar o projeto com o docker, execute o seguinte comando: 
```bash
docker-compose up -d --build
docker compose up -d --build
```

Aguarde até que o processo de build seja concluído.

Finalizado o processo, acesse a URL do projeto no seu navegador:
```

# Link do projeto()
http://localhost:8080

# PHPMyAdmin()
http://localhost:8081
```

Execute os comandos a seguir para criar  a tabela de usuários no banco e popular com dados de exemplo:
```bash
docker exec -it ci4_php /bin/bash
php spark migrate
php spark db:seed UserSeeder
```
**Observação:** A senha e usuário do PHPMyAdmin são `root` e `root`, respectivamente.

Após isso você poderá utilizar a API através do Postman ou qualquer outro cliente HTTP.
Nos Endpoints estão disponíveis as seguintes operações:
- Listar usuários - http://localhost:8080/api/users - GET
- Criar usuário - http://localhost:8080/api/users - POST
- Visualizar usuário - http://localhost:8080/api/users/{id} - GET
- Atualizar usuário - http://localhost:8080/api/users/{id} - PUT
- Deletar usuário - http://localhost:8080/api/users/{id} - DELETE