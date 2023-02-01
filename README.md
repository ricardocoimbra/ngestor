<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## nGESTOR

Instalação
baixe o projeto do git
```git
    git clone https://github.com/ricardocoimbra/ngestor.git
```

Faça um cópia do arquivo `.env.example` para `.env`

```shell
cp .env.example .env
```

Altere o arquivo .env
```yaml
DB_CONNECTION=mysql
DB_HOST=test-mysql
DB_PORT=3306
DB_DATABASE=test
DB_USERNAME=test
DB_PASSWORD=test
```

Na pasta do ngestor execute o comando abaixo:

```shell
docker-compose up -d
```

Acesse o container em execução pelo terminal
```shell
docker exec -it test-app /bin/bash
```

E execute o comando para recriar o bando e executar o seed
```shell
php artisan migrate:refresh --seed
```

acessar o link http://localhost ou http://127.0.0.1 

```
usuário: admin@gmail.com
senha: 123Mudar
```

