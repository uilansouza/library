## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## Manual de uso

É necessário configurar o arquivo .env de acordo com seu banco de dados
A chamamada para a API segue o seguinte padrão

<p>Consulta Livros->  <i>get</i>: http://{{URL_LOCAL}}/api/library </p>
<p>Consulta um Livro->  <i>get</i>: http://{{URL_LOCAL}}/api/library/id</p>
<p>Atualiza um Livro->  <i>put</i>: http://{{URL_LOCAL}}/api/library/id</p>
<p>Deleta um Livro->  <i>delete</i>: http://{{URL_LOCAL}}/api/library/id</p>
* URL_LOCAL deve configurar qual será o endPoint

--Colletion para execução no Postman
https://www.getpostman.com/collections/e6ef94c136d23f252ed3


## Migrations
É necessário executar as migrates para a criação do banco de dados

λ php artisan migrate

