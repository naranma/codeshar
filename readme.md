# Oracle Web expdp/impdp

## Instalação

Requisitos 
- Apache
- PHP 7.2
- Composer
- git

Baixar o repositório na máquina usando um usuário não root:

```console
$ git clone https://urldogit/codeshar.git
```

Entre no diretório do projeto e execute o comando composer:
- Obs.: Por padrão o composer não executa usando o usuário root.

```console
$ composer install
```

Após executar a intalação, copie o diretório da instalação para o local definitivo.

## Configurando o aquivo .env

Entre no diretório do projeto e copie o arquivo `.env.example` para `.env`

```console
# cp .env.example .env
```

Edite o arquivo .env apontando o banco de dados:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=nome_do_usuario
DB_PASSWORD=senha
```

Para configurar usando Sqlite, crie um aquivo vazio no diretório `database`

```console
# touch database/database.sqlite
```

Configure o arquivo `.env` da seguinte forma.
```ini
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=database.sqlite
# DB_USERNAME=nome_do_usuario
# DB_PASSWORD=senha
```

### Chave do aplicativo

Gere uma chave para o aplicativo usando o seguinte comando.

```console
# php artisan key:generate
```

No aquivo `.env` será gerado uma chave de 32 caracteres na entrada `APP_KEY=`

## Migração do banco

Para gerar as tabelas do sistema no banco de dados, execute o seguinte comando:

```console
# php artisan make:migration
```

## Configuração do LDAP

Configure as variáveis de ambiente do LDAP no aquivo `.env`

```ini
LDAP_HOST="host.dominio.com"
LDAP_USER_GROUP="NomeDoGroupo"
LDAP_DN="DC=host,DC=dominio,DC=com"
LDAP_USR_DOM="@dominio.com"
```

## Iniciando o app sem o apache

No diretório do projeto execute o seguinte comando.

```console
# php artisan serve
```
Esse comando vai executar o server do php no host 127.0.0.1 e porta 8000

Para mudar execute o comando passando o parâmetro `--host` e `--port`

```console
# php artisan serve --host 0.0.0.0 --port 8003
```

## Configuração do Apache

Configure o apache apontando o diretório para o local de instalação do app.

```apache
<VirtualHost *:80>
    DocumentRoot "/local/oraexpimp/public"
    DirectoryIndex index.php
    <Directory "/local/oraexpimp/public">
        Options All
        AllowOverride All
        Order Allow,Deny
        Allow from all
    </Directory>
</VirtualHost>
```

## Desativar o modo `debug`

No arquivo `.env`, coloque o valor da entrada debug para `false`.

```ini
APP_DEBUG=false
```
