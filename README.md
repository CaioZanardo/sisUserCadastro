# sisUserCadastro
- Para conseguir utilizar o progeto temos um passo a passo.
- Com o xampp instalado, fazer start do Apache e Mysql
### Apache

- Para acessar o front: http://localhost/sisUserCadastro/ 

### Banco de Dados

- Acessar http://localhost/phpmyadmin/
- Para utilizar o banco existe um script na estrutura src/db/dbcadastrouser.sql
- Criar um novo banco; (nome do banco esta no script);
- Rodar script.

### API

Para cadastrar um User via postman:
- Metodo: Post
- URL: http://localhost/api/add-api.php
- Body: selecionar "raw";
- enviar Json:
{
    "user": "(nome_desejado)"
}


## Grupo

- André Spinelli Cintra RM 551016
- Augusto de Oliveira Laurino RM 93498
- Caio Felipe Britto Zanardo da Silva RM 95125
- Gabriel Wilke Azevedo RM 95211
- Guilherme de Lucas Garcia RM 94392
