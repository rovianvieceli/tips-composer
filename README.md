### Introdução
Utilizado para exemplificar a utilização do composer, abaixo segue os passos para utilização.<br/> **Dica:** Sempre inicie o seu projeto pelo `composer`.

### Requisitos instalados
* php
* composer
* git

### Instalação
No seu terminal, va até o diretório `(/meuprojeto)` do projeto e siga como abaixo! Por hora iremos apenas fazer o 
básico.
`Apenas de [ENTER] nas opções para definir o padrão`

````bash
root@be681a22876a:/var/www/html/meuprojeto# composer init

  Welcome to the Composer config generator

This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [root/meuprojeto]: [ENTER]

Description []: [ENTER]

Author [, n to skip]: n

Minimum Stability []: [ENTER]

Package Type (e.g. library, project, metapackage, composer-plugin) []: [ENTER]

License []: [ENTER]

Define your dependencies.
Would you like to define your dependencies (require) interactively [yes]? yes
Search for a package: phpmailer

Found 14 packages matching phpmailer
   [0] swiftmailer/swiftmailer
   [1] phpmailer/phpmailer
   [2] vernes/yiimailer
   [3] itinerisltd/wp-phpmailer
   [4] yurunsoft/phpmailer-swoole
   [5] rmrevin/yii2-postman
   [6] msp/smtp
   [7] zyx/zyx-phpmailer
   [8] filips123/monolog-phpmailer
   [9] yuan1994/tp-mailer
  [10] cattong/think-mailer
  [11] byjg/mailwrapper
  [12] phpmailerflamin/phpmailer
  [13] phpmailer/apix-log-phpmailer

Enter package # to add, or the complete package name if it is not listed: 1

Enter the version constraint to require (or leave blank to use the latest version): [ENTER]

Using version ^6.1 for phpmailer/phpmailer

Search for a package: [ENTER]

Would you like to define your dev dependencies (require-dev) interactively [yes]? no

{
    "name": "root/meuprojeto",
    "require": {
        "phpmailer/phpmailer": "^6.1"
    }
}

Do you confirm generation [yes]? yes

Would you like to install dependencies now [yes]? yes

Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing phpmailer/phpmailer (v6.1.5): Loading from cache
phpmailer/phpmailer suggests installing psr/log (For optional PSR-3 debug logging)
phpmailer/phpmailer suggests installing league/oauth2-google (Needed for Google XOAUTH2 authentication)
phpmailer/phpmailer suggests installing hayageek/oauth2-yahoo (Needed for Yahoo XOAUTH2 authentication)
phpmailer/phpmailer suggests installing stevenmaguire/oauth2-microsoft (Needed for Microsoft XOAUTH2 authentication)
phpmailer/phpmailer suggests installing symfony/polyfill-mbstring (To support UTF-8 if the Mbstring PHP extension is not enabled (^1.2))
Writing lock file
Generating autoload files

root@be681a22876a:/var/www/html/meuprojeto#
````

### Adicionando novas libs
Acesse o site do [Packagist](https://packagist.org/) e pesquise pela lib desejada. Após em seu termina rode o comando `require`.
````bash
root@00219f153aa7:/var/www/html/meuprojeto# composer require php-activerecord/php-activerecord

Using version ^1.2 for php-activerecord/php-activerecord
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing php-activerecord/php-activerecord (v1.2.0): Downloading (100%)
Writing lock file
Generating autoload files
1 package you are using is looking for funding.
Use the `composer fund` command to find out more!

root@00219f153aa7:/var/www/html/meuprojeto#
````

### Finalizado
Após os passos acima você vera uma estrutura assim no seu `root Folder`.

* `vendor/` dependencies do composer.
* `composer.json` arquivo que define o que será instalado e requisitos mínimos.
* `composer.lock` arquivo gerado automaticamente para garantir a versão exata da dependência.

````bash
root@be681a22876a:/var/www/html/meuprojeto#
total 0
drwxrwxrwx 1 root root    0 Apr 17 14:54 ./
drwxrwxrwx 1 root root 4096 Apr 17 14:53 ../
-rwxr-xr-x 1 root root   96 Apr 17 14:54 composer.json*
-rwxr-xr-x 1 root root 3087 Apr 17 14:54 composer.lock*
drwxrwxrwx 1 root root    0 Apr 17 14:54 vendor/
````

### Resumo / Comandos
Composer lê o arquivo `composer.json` e instala todas as depêndencias necessárias de cada umas das libs informadas para 
que sejam disponibilizada e fiquem funcionais.
* `composer install` - Instalar todas as dependências na `vendor`.
* `composer update` - Atualiza/Instala/Remove as dependências na `vendor`. 
* `composer require` - Instala/Procura uma nova dependência na `vendor`.
* `composer dump-autoload -o` - Atualiza e otimiza `-o` a injeção de classes no `autoload` com utilização do `namespace`.

**Lembrete:** *Todos os camando executam as funções baseado nas definições do seu `composer.json`.*

## Exemplo composer.json
````composer
{
    "name": "root/meuprojeto",
    "minimum-stability": "stable",
    "require": {
        "phpmailer/phpmailer": "^6.1",
    },
    "autoload": {
        "psr-4": {
            "app\\": "app"
        }
    },
    "authors": [
        {
            "name": "Autor",
            "email": "autor@mail.com"
        }
    ]
}
````

### Publicar
Apenas faça esses passos no seu diretório `www`.

### Construido com
* [Composer](https://getcomposer.org/) - Gerenciador de dependências.
* [PHP](https://php.net/) - Linguagem de uso.
* [PHPMailer](https://github.com/PHPMailer/PHPMailer) - Lib de envio de email.
* [Autoload](https://www.php-fig.org/) - Padrão de `PSR`
* [MailTrap](https://mailtrap.io/) - Caixa de Email pra teste de envio

### Contributing
N/A

### Controle de Versões
Utilizado [SemVer](http://semver.org/) para o controle das versões.

### Autor
* Rovian Vieceli - [GitHub](https://github.com/rovianvieceli).

### Licença
Este repositório está sobre a licença MIT - [LICENSE.md](LICENSE.md).