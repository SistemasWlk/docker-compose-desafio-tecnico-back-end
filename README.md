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

- Acesse o arquivo .env na raiz do diretório `docker-compose-desafio-tecnico-back-end`

```
root@577187a1bdd4# vim .env 
```

- Altere as a variável PHP_FPM_USER adicionando o mesmo usuário do seu sistema operacional

```
# PHP_FPM -------------------------------------------------------------------------------------
PHP_FPM_USER={seu_usuario}
PHP_FPM_UID=1000
PHP_FPM_APPLICATION=./laravel-docker-desafio-tecnico-back-end
```

- Altere o usuário do projeto, add o seu

```
root@577187a1bdd4# chown wilker.wilker ~/docker-compose-desafio-tecnico-back-end -R
```

- Altere a permissão do diretório storage do laravel

```
root@577187a1bdd4# chmod 777 -R storage
```

- Na raiz do projeto e executar o seguinte comando

```
root@577187a1bdd4# docker composer build
root@577187a1bdd4# docker composer up -d
```

- Logo em seguida verifique os conteinde

```
root@577187a1bdd4# docker ps
```

- Será mostrado todos os conteines

```
CONTAINER ID   IMAGE                               COMMAND                  CREATED          STATUS                          PORTS                                                                                                                  NAMES
3eccc2bceba8   desafio-tecnico-back-end-app        "docker-php-entrypoi…"   20 seconds ago   Up 5 seconds                    9000/tcp                                                                                                               desafio-tecnico-back-end-queue
84eb66edb778   desafio-tecnico-back-end-app        "docker-php-entrypoi…"   22 seconds ago   Up 9 seconds                    9000/tcp                                                                                                               desafio-tecnico-back-end-app
b1d9c409bc50   dpage/pgadmin4                      "/entrypoint.sh"         22 seconds ago   Up 10 seconds                   443/tcp, 0.0.0.0:8091->80/tcp, :::8091->80/tcp                                                                         desafio-tecnico-back-end-pgadmin
595b7985b6f7   nginx:alpine                        "/docker-entrypoint.…"   25 seconds ago   Up 16 seconds                   0.0.0.0:443->443/tcp, :::443->443/tcp, 0.0.0.0:8090->80/tcp, :::8090->80/tcp                                           desafio-tecnico-back-end-nginx
0f2de3b3c50a   redis:latest                        "docker-entrypoint.s…"   25 seconds ago   Up 15 seconds                   6379/tcp                                                                                                               desafio-tecnico-back-end-redis
b25fd175646a   desafio-tecnico-back-end-postgres   "docker-entrypoint.s…"   25 seconds ago   Restarting (1) 3 seconds ago                                                                                                                           desafio-tecnico-back-end-postgres
```

- Acesse o conteiner desafio-tecnico-back-end-app

```
root@577187a1bdd4# docker exec -it desafio-tecnico-back-end-app bash
```


- Execute os comando logo abaixo na pasta raiz

```
root@577187a1bdd4# php artisan migrate
root@577187a1bdd4# php artisan db:seed
```

## Arquivo json com as requisições  

[desafio-técnic_.postman_collection_json.tar.gz](https://github.com/SistemasWlk/docker-compose-desafio-tecnico-back-end/files/10916908/desafio-tecnic_.postman_collection_json.tar.gz)


## Endereço de Acesso

Acessa um navegador e digita as seguintes url
- http://localhost:8091/: phpMyAdmin 
- http://localhost:8090/: Desafio Técnico 

