<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Requisitos

- Git
- Docker
- Docker-composer

## Instalação

- Realizar o clone

```
root@577187a1bdd4# https://github.com/SistemasWlk/docker-compose-desafio-tecnico-back-end.git
```

- Acesse o branch main

```
root@577187a1bdd4# git checkout main 
```

- Entra na pasta raiz do projeto e executar o seguinte comando

```
root@577187a1bdd4# docker composer up -d --build
```

- Logo em seguida no direóro raiz do projeto execute o compser install

```
root@577187a1bdd4# composer install
```

- Altere a permissão da pasta storage/

```
root@577187a1bdd4# chmod 777 storage/ -R
```

- Crie o arquivo de conviguração .env

```
root@577187a1bdd4# cp -v .envexemplo .env
```

- Execute os comando logo abaixo na pasta raiz

```
root@577187a1bdd4# php artisan key:generate
root@577187a1bdd4# php artisan config:clear
root@577187a1bdd4# php artisan config:cache
root@577187a1bdd4# php artisan migrate
root@577187a1bdd4# php artisan db:seed
```

## Endereço de Acesso

Acessa um navegador e digita as seguintes url
- http://localhost:8091/: phpMyAdmin 
- http://localhost:8090/: Desafio Técnico 

