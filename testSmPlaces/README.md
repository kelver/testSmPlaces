# APIBook
## _API de cadastro de livros, baseada no interesse do usuário_
## Installation

Clone o repositório raíz,
```sh
git clone https://github.com/kelver/testSmPlaces.git
```
onde usamos o [LaraDock](http://laradock.io/) para montar o ambiente da aplicação. na pasta raíz, clone também o laradock, dentro da pasta já existente.

```sh
git clone https://github.com/Laradock/laradock.git ./laradock
```
Entre na pasta laradock, e faça uma cópia de .env.example para configurar o ambiente.
Na pasta _NGINX_ do laradock, altere o arquivo _sites/default.conf_:
```sh
    root /var/www/{folderProject}/public;
    index index.php index.blade.php index.htm;
```

Após, execute os containers necessários
```sh
docker-compose up -d nginx mysql
```
O ambiente deve estar rodando no navegador em:
```sh
http://localhost
```

Com o ambiente configurado, entre na pasta _testSmPlaces_, e instale as dependências do projeto:
```sh
composer install
```
ao finalizar, copie o arquivo _.env.example_ e renomeie para _.env_ configurando os dados da conexão com o banco de dados configurados no laradock.
Execute as migrações de banco de dados:
```sh
php artisan migrate
```
E as Seeders:
```sh
php artisan db:seed
```
Rode o comando para gerar a key secret do _JWT_
```sh
php artisan jwt:secret
```
De forma alternativa, existe liberada a rota _/register_ para cadastro de usuários.
Para acessar a documentação da API:
```sh
http://localhost/docs
```

## License

MIT
_______________
