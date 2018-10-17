## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## Manual de uso

É necessário configurar o arquivo .env de acordo com seu banco de dados
A chamamada para a API segue o seguinte padrão

<p>Consulta Livros: <i>get</i>: http://{{URL_LOCAL}}/api/library </p>
<p>Consulta um Livro<i>get</i>: http://{{URL_LOCAL}}/api/library/id</p>
<p>Atualiza um Livro<i>put</i>: http://{{URL_LOCAL}}/api/library/id</p>
<p>Deleta um Livro<i>get</i>: http://{{URL_LOCAL}}/api/library/id</p>
* URL_LOCAL deve configurar qual será o endPoint

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
